<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<?php include '../head.php'?>
</head>
<body class="wowTitleText">
	<?php include '../navBarIndex.php'?>
<div class="container wowTop text-center animated flash">
	<div class="alert alert-info" role="alert">目前顯示的是：南台街右邊</div>
</div>
<div class="container">
<?php
/*image為店家圖片.menu0表示沒有菜單連結，按鈕會自動disabled.href為瞭解更多的連結，數值為0會自動


/*
image為店家圖片
menu值為0表示沒有菜單的連結
href值為0表示沒有了解更多的連結
以上數值為0者，相關項目會自動disabled
*/
$json = file_get_contents("doorRightShop.json");
$doorRightShopData = json_decode($json);   

/*
宣告row次數
每一行要的col-sm
宣告row
*/
$colCount = 0;
$numOfCols = 3;
echo "<div class='row text-center'>";
/*開始迴圈跑店家資料*/
foreach($doorRightShopData->doorRightShopJson as $data){
	$menudis = $data->menu ; /*菜單圖數值*/
	$hrefdis = $data->href ; /*連結數值*/

/*宣告col-sm*/
	echo "<div class='col-sm'>";
/*邊框*/
	echo "<div class='card border-secondary mt-3'>" ;
	/*圖片的連結.disabled img href if href's value='0' */
	if ($hrefdis == "0"){
		echo "<a target='_blank' href='#' onclick='return false;'>";
	} else {
		echo "<a target='_blank' href='" .$data->href . "'>";
	}
		/*圖片*/
	echo "<img class='card-img-top' src='" . "$data->image" . "' alt='" . $data->name;
	echo "'></a>" ;
	/*Card Body開始*/
		/*名稱大標*/
	echo "<div class='card-body'>" ;
	echo "<h4 class='card-title'>" . $data->name . "</h4>";
	echo "<p class='card-text'>" . $data->class . "</p>";
		/*菜單按鈕.disabled button if menu's value='0' */
	if ($menudis == "0"){
		echo "<a target='_blank' href='" . $data->menu . "' class='btn btn-info disabled' style='margin-right:4px ;'>" . "<i class='fa fa-book' aria-hidden=true'></i>" . " 菜單" . "</a>";
	} else {
		echo "<a target='_blank' href='" . $data->menu . "' class='btn btn-info' style='margin-right:4px ;'>" . "<i class='fa fa-book' aria-hidden=true'></i>" . " 菜單" . "</a>";
	}
		/*了解更多按鈕.disabled button if href's value='0' */
	if ($hrefdis == "0"){
		echo "<a target='_blank' href='" . $data->href . "' class='btn btn-info disabled'> 了解更多</a>";
	} else {
		echo "<a target='_blank' href='" . $data->href . "' class='btn btn-info'> 了解更多</a>";
	}
	/*Card Body結束*/
	echo "</div>" ;
	
	/*店家資訊*/
	echo "<ul class='list-group list-group-flush'>" ;
	echo "<li class='list-group-item'>" . "電話：" . $data->phone . "</li>";
	echo "<li class='list-group-item'>" . "時段：" . $data->times . "</li>";
	echo "</ul>" ;
/*邊框結束*/
	echo "</div>";
/*col-sm結束*/
	echo "</div>";
/*自動增加row*/
	$colCount++;
	if ($data->finalOne == 1 and $colCount % $numOfCols == 0) {
		/*當項目足3時且到達尾端時，自動結束row並加入底部空隙*/
		echo "</div><div class='wowBottom'>";
	} else if ($colCount % $numOfCols == 0) {
		/*當項目足3，自動結束row並開新row*/
		echo "</div><div class='row text-center'>";
	} else if ($data->finalOne == 1 and $colCount % $numOfCols == 1) {
		/*當項目不足3且到達尾端時，自動填入兩個col-sm.結束row並加入底部空隙*/
		echo "<div class='col-sm'></div><div class='col-sm'></div>";
		echo "</div><div class='row text-center wowBottom'>";
	} else if ($data->finalOne == 1 and $colCount % $numOfCols == 2) {
		/*當項目不足3且到達尾端時，自動填入一個col-sm.結束row並加入底部空隙*/
		echo "<div class='col-sm'></div>";
		echo "</div><div class='row text-center wowBottom'>";
	}
}
/*row結束*/
	echo "</div>";
?>
</div>  
<?php include('../footer.php') ?>
</body>
</html>
<?php
$json = file_get_contents("shopList.json");
$ShopData = json_decode($json);
/*auto turn list to card view*/
/*add container*/
echo "<div class='container global-font-family'>";
/*
-------------------
宣告col次數
每一行要的col-sm
宣告row
-------------------
*/
$colCount = 0;
$numOfCols = 3;
echo "<div class='row text-center'>";
/*開始迴圈跑店家資料*/
foreach($ShopData->$value as $data){
/*宣告col-sm*/
	echo "<div class='col-sm'>";
/*邊框*/
	echo "<div class='card border-secondary mt-3'>" ;
	/*圖片的連結.disabled img href if href's value='0' */
	if ($data->href == "0"){
		echo "<a target='_blank' href='#' onclick='return false;'>";
	} else {
		echo "<a target='_blank' href='" .$data->href . "'>";
	}
	
	/*無圖自動抓ComingSoon*/
	if ($data->image == "0"){
		echo "<img class='card-img-top' src='https://3.bp.blogspot.com/-DBKey_PTWCw/WgviY83OERI/AAAAAAAAXo4/VRW_U9JObLIq7I-X4aFMDFLwvbaaTadkQCK4BGAYYCw/s320/coming%2Bsoon.png' alt='" . $data->name;
	} else {
		echo "<img class='card-img-top' src='" . "$data->image" . "' alt='" . $data->name;
	}
	
	echo "'></a>" ;
	/*Card Body開始*/
		/*名稱大標*/
	echo "<div class='card-body'>" ;
	echo "<h4 class='card-title'>" . $data->name . "</h4>";
	echo "<p class='card-text'>" . $data->class . "</p>";
		/*菜單按鈕.disabled button if menu's value='0' */
	if ($data->menu == "0"){
		echo "<a target='_blank' href='" . $data->menu . "' class='btn btn-info disabled' style='margin-right:4px ;'>" . "<i class='fa fa-book' aria-hidden=true'></i>" . " 菜單" . "</a>";
	} else {
		echo "<a target='_blank' href='" . $data->menu . "' class='btn btn-info' style='margin-right:4px ;'>" . "<i class='fa fa-book' aria-hidden=true'></i>" . " 菜單" . "</a>";
	}
		/*了解更多按鈕.disabled button if href's value='0' */
	if ($data->href == "0"){
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
/*row結束.container結束*/
	echo "</div>" . "</div>";
?>
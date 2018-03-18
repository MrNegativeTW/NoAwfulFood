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
/*image為店家圖片.menu0表示沒有菜單連結，按鈕會自動disabled.href為瞭解更多的連結，數值為0會自動disabled*/
$doorRightShopJson = ' [
{
	"name":"MoM\'s Touch",
	"class":"速食",
	"phone":"06-2545888",
	"times":"午餐 / 晚餐",
	"drink":"另購",
	"soup":"null",
	"selfClean":"是",
	"delivery":"null",
	"image":"http://2.bp.blogspot.com/-F69XbDIsjWQ/WgZW0LBJ7jI/AAAAAAAAXWI/d7aSpSu2UrYGqg_sviu9UM8HxBC93hGmQCK4BGAYYCw/s1600/MoM%2527s%2BTouch.png",
	"menu":"0",
	"href":"../doorRight/1"
},{
	"name":"鼎旺餐飲",
	"class":" 早餐、便當",
	"phone":"0953-399-818 / 06-2432530",
	"times":"早餐 / 午餐 / 晚餐",
	"drink":"null",
	"soup":"null",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://2.bp.blogspot.com/-bwrbBZ8foG0/WgZW7P49DTI/AAAAAAAAXWQ/HUuNfF6roj0MRS2z7Hc_I7w8rDaIsAmwwCK4BGAYYCw/s1600/%25E9%25BC%258E%25E6%2597%25BA%25E9%25A4%2590%25E9%25A3%25B2.png",
	"menu":"0",
	"href":"0"
},{
	"name":"素食",
	"class":"早餐、便當",
	"phone":"0918-721-512 / 0930-157-945",
	"times":"早餐 / 午餐 / 晚餐",
	"drink":"null",
	"soup":"null",
	"selfClean":"不適用",
	"delivery":"null",	"image":"http://1.bp.blogspot.com/-0ZhVHLuY5WA/WgZW7_KtOEI/AAAAAAAAXWY/AYeVwKP9oBwd9UUc7bq4B6L7RXiuhnl2gCK4BGAYYCw/s1600/%25E7%25B4%25A0%25E9%25A3%259F.png",
	"menu":"0",
	"href":"0"
},{
	"name":"日船章魚小丸子",
	"class":"章魚燒",
	"phone":"未提供/待搜集",
	"times":"晚餐",
	"drink":"無",
	"soup":"無",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://4.bp.blogspot.com/-L10ZHUAezvM/WhQX09IahzI/AAAAAAAAX-Q/oob1nLutoFkpK4Q4wZyTqmW3QnEx6lXBwCK4BGAYYCw/s1600/%25E6%2597%25A5%25E8%2588%25B9%25E7%25AB%25A0%25E9%25AD%259A%25E5%25B0%258F%25E4%25B8%25B8%25E5%25AD%2590.png",
	"menu":"0",
	"href":"0"
},{
	"name":"蜜汁燒烤",
	"class":"燒烤",
	"phone":"未提供/待搜集",
	"times":"午餐 / 晚餐",
	"drink":"無",
	"soup":"無",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://3.bp.blogspot.com/-fOWQZHZH_vI/WgZW96FzLOI/AAAAAAAAXWg/9GBr_c6APncxee3Ntld6f74wUcLHrlpDgCK4BGAYYCw/s1600/%25E8%259C%259C%25E6%25B1%2581%25E7%2587%2592%25E7%2583%25A4.png",
	"menu":"0",
	"href":"0"
},{
	"name":"脆皮雞蛋糕",
	"class":"雞蛋糕",
	"phone":"未提供/待搜集",
	"times":"晚餐",
	"drink":"無",
	"soup":"無",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://1.bp.blogspot.com/-Wh5-_vMQj7Q/WgZW_A5kleI/AAAAAAAAXWo/68QdwHIwAMcXR0Ct4Foe-YH4_sNDdhh9QCK4BGAYYCw/s1600/%25E8%2584%2586%25E7%259A%25AE%25E9%259B%259E%25E8%259B%258B%25E7%25B3%2595.png",
	"menu":"0",
	"href":"0"
},{
	"name":"揪揪丸",
	"class":"飯糰",
	"phone":"未提供/待搜集",
	"times":"早餐、午餐",
	"drink":"無",
	"soup":"無",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://3.bp.blogspot.com/-FluE8rzfAUg/WgZXF9KPJJI/AAAAAAAAXWw/A7HYvjXQfNg9-90Ubw8V5lBh0Wooa8PzACK4BGAYYCw/s1600/%25E6%258F%25AA%25E6%258F%25AA%25E4%25B8%25B8.png",
	"menu":"0",
	"href":"0",
	"final":"1"
} ]';	
	
/**$str = file_get_contents('../arrays/doorRightShop.json');**/
$doorRightShopData = json_decode($doorRightShopJson);
/**echo print_r ($doorRightShopData);**/
/*宣告row次數*/
$colCount = 0;
/*每一行要的col-sm*/
$numOfCols = 3;
/*宣告row*/
	echo "<div class='row text-center'>";
foreach($doorRightShopData as $data){
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
		echo "<a href='" . $data->href . "' class='btn btn-info disabled'>" . " 了解更多" . "</a>";
	} else {
		echo "<a href='" . $data->href . "' class='btn btn-info'>" . "了解更多" . "</a>";
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
	if ($colCount % $numOfCols == 0) {
		/*當項目足3時，自動結束row並開啟新的row*/
		echo "</div><div class='row text-center'>";
	} else if ($data->final == 1 and $colCount % $numOfCols == 1){
		/*當項目不足3時，自動填入兩個col-sm*/
		echo "<div class='col-sm'></div><div class='col-sm'></div>";
		echo "</div><div class='row text-center wowBottom'>";
	} else if ($data->final == 1 and $colCount % $numOfCols == 2) {
		/*當項目不足3時，自動填入一個col-sm*/
		echo "<div class='col-sm'></div>";
		echo "</div><div class='row text-center wowBottom'>";
	}
}
/*row結束*/
	echo "</div>";	
?>
</div>  
    <?php include('../footer.php') ?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
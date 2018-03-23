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
	"class":"早餐、便當",
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
	"drink":"不適用",
	"soup":"不適用",
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
	"drink":"不適用",
	"soup":"不適用",
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
	"drink":"不適用",
	"soup":"不適用",
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
	"drink":"不適用",
	"soup":"無",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://3.bp.blogspot.com/-FluE8rzfAUg/WgZXF9KPJJI/AAAAAAAAXWw/A7HYvjXQfNg9-90Ubw8V5lBh0Wooa8PzACK4BGAYYCw/s1600/%25E6%258F%25AA%25E6%258F%25AA%25E4%25B8%25B8.png",
	"menu":"0",
	"href":"0"
},{
	"name":"鼎吉魯味",
	"class":"滷味",
	"phone":"未提供/待搜集",
	"times":"晚餐",
	"drink":"無",
	"soup":"金額滿30",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://2.bp.blogspot.com/-NwyOnr_5bds/WgZXHoU_GvI/AAAAAAAAXW4/mFZw_zVPhy8ubi4g25vNkF0kB5_qBCcbQCK4BGAYYCw/s1600/%25E9%25BC%258E%25E5%2590%2589%25E9%25AD%25AF%25E5%2591%25B3.png",
	"menu":"0",
	"href":"0"
},{
	"name":"粥神",
	"class":"粥",
	"phone":"未提供/待搜集",
	"times":"早餐、午餐、晚餐",
	"drink":"null",
	"soup":"null",
	"selfClean":"不適用",
	"delivery":"null",	"image":"http://3.bp.blogspot.com/-5sJEJADKOUw/WgZXIXY5YDI/AAAAAAAAXXA/Nq7Gxgy9Z6QVUWIyuIowvMnww9NZBOfcQCK4BGAYYCw/s1600/%25E7%25B2%25A5%25E7%25A5%259E.png",
	"menu":"0",
	"href":"0"
},{
	"name":"早餐店",
	"class":"早餐",
	"phone":"06-2542350",
	"times":"早餐、午餐",
	"drink":"另購",
	"soup":"null",
	"selfClean":"null",
	"delivery":"null",
	"image":"http://3.bp.blogspot.com/-kvZxaSiRQus/WgZXJKJaTeI/AAAAAAAAXXI/8LVU5WeESDY3zanuSpdA2aVGHu_Z042hwCK4BGAYYCw/s1600/%25E6%2597%25A9%25E9%25A4%2590%25E5%25BA%2597.png",
	"menu":"0",
	"href":"0"
},{
	"name":"南台水果Bar",
	"class":"各種水果",
	"phone":"未提供/待搜集",
	"times":"午餐、晚餐",
	"drink":"無",
	"soup":"無",
	"selfClean":"不適用",
	"delivery":"無",
	"image":"http://1.bp.blogspot.com/-aA2oTOwwibg/WgZXSt3Cn7I/AAAAAAAAXXU/CVQjGTnCp3wx55mM7y9HSliJxWp2bspigCK4BGAYYCw/s1600/%25E5%258D%2597%25E5%258F%25B0%25E6%25B0%25B4%25E6%259E%259CBar.png",
	"menu":"0",
	"href":"0"
},{
	"name":"九香回味",
	"class":"鹽酥雞",
	"phone":"未提供/待搜集",
	"times":"晚餐",
	"drink":"無",
	"soup":"無",
	"selfClean":"不適用",
	"delivery":"無",
	"image":"http://3.bp.blogspot.com/-Z5pz7dqJz6M/WgZXUPn6DmI/AAAAAAAAXXc/smRKxgEAhcI8nZ5vif6-lWZik2Laz1d6QCK4BGAYYCw/s1600/%25E4%25B9%259D%25E9%25A6%2599%25E5%259B%259E%25E5%2591%25B3.png",
	"menu":"0",
	"href":"0"
},{
	"name":"有志麵食館",
	"class":"麵食",
	"phone":"06-2438191",
	"times":"午餐、晚餐",
	"drink":"有",
	"soup":"null",
	"selfClean":"否",
	"delivery":"null",
	"image":"http://3.bp.blogspot.com/-nSZaIzkDT1o/WgZXWTZZsAI/AAAAAAAAXXk/WdQ1AvplRmMgZxPFwu5-YpDDSCz7xdQpACK4BGAYYCw/s1600/%25E6%259C%2589%25E5%25BF%2597%25E9%25BA%25B5%25E9%25A3%259F%25E9%25A4%25A8.png",	"menu":"http://2.bp.blogspot.com/-6__E8Gxky9s/WrRyrpWdqeI/AAAAAAAAfrE/uSWbH4gHyZ4e6vqX48iH5DN3VXu0T_XEgCK4BGAYYCw/s1600/%25E6%259C%2589%25E5%25BF%2597%25E9%25BA%25B5%25E9%25A3%259F%25E9%25A4%25A8%2B%2528%25E5%25A4%2596%25E5%25B8%25B6%25E5%25B0%2588%25E7%2594%25A8%2529.png",
	"href":"0"
},{
	"name":"鮮果補給站",
	"class":"各種水果",
	"phone":"未提供/待搜集",
	"times":"晚餐",
	"drink":"不適用",
	"soup":"不適用",
	"selfClean":"不適用",
	"delivery":"無",
	"image":"http://1.bp.blogspot.com/-KKSHrDvPZ3M/WgZZzf7fp1I/AAAAAAAAXZ4/uCXpWJ5R6MUlT7zoBuKZW6qBiVhgOzQsQCK4BGAYYCw/s1600/%25E9%25AE%25AE%25E6%259E%259C%25E8%25A3%259C%25E7%25B5%25A6%25E7%25AB%2599.png",
	"menu":"0",
	"href":"0"
},{
	"name":"仛茶",
	"class":"飲料",
	"phone":"06-2535911",
	"times":"午餐、晚餐",
	"drink":"他就是飲料店",
	"soup":"不適用",
	"selfClean":"不適用",
	"delivery":"有",
	"image":"http://4.bp.blogspot.com/-hvoe0-tWS70/WgZXZEwXHbI/AAAAAAAAXXs/xx3jUkXvtjEx2EHItCKBBPGBSTDX3GctQCK4BGAYYCw/s1600/%25E4%25BB%259B%25E8%258C%25B6.png",
	"menu":"http://1.bp.blogspot.com/-wI0R2BsPJ8w/WrRyxbJFBTI/AAAAAAAAfrM/wSQ_E9sWTCwPX-fSEY28nogIu9ULh01nQCK4BGAYYCw/s1600/%25E4%25BE%2598%25E8%258C%25B6.jpg",
	"href":"0"
},{
	"name":"小台南便當",
	"class":"便當",
	"phone":"06-2530700",
	"times":"午餐、晚餐",
	"drink":"是",
	"soup":"是",
	"selfClean":"否",
	"delivery":"null",	"image":"http://1.bp.blogspot.com/-1ujl1kSHjwE/WgZXbPZogxI/AAAAAAAAXX8/A8gaegnDFG05blvbsfByw1v4IC8JRKCpgCK4BGAYYCw/s1600/%25E5%25B0%258F%25E5%258F%25B0%25E5%258D%2597%25E4%25BE%25BF%25E7%2595%25B6.png",
	"menu":"0",
	"href":"0"
},{
	"name":"一代目",
	"class":"飲料",
	"phone":"06-2436008",
	"times":"午餐、晚餐",
	"drink":"他就是飲料店",
	"soup":"null",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://1.bp.blogspot.com/-KjOMLXYNY0Q/WgZXhOt85SI/AAAAAAAAXYE/6TvoFLPjkns-CTOTtygstJry4ErXaWN7wCK4BGAYYCw/s1600/%25E4%25B8%2580%25E4%25BB%25A3%25E7%259B%25AE.png",
	"menu":"http://3.bp.blogspot.com/-KoLTa_bh9xQ/WrRyKIrA6SI/AAAAAAAAfq4/roMXdjK6h9kLmi1YdSAc9EIQd-0o3sysQCK4BGAYYCw/s1600/%25E4%25B8%2580%25E4%25BB%25A3%25E7%259B%25AE.jpg",
	"href":"0"
},{
	"name":"淳莊燒烤",
	"class":"燒烤",
	"phone":"未提供/待搜集",
	"times":"晚餐",
	"drink":"不適用",
	"soup":"不適用",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://2.bp.blogspot.com/-Mq3JkjytKLY/WgZXk4Ou0dI/AAAAAAAAXYM/03axpLVXPzIL4swxj9B6CcPPFrVv0Vb4QCK4BGAYYCw/s1600/%25E6%25B7%25B3%25E8%258E%258A%25E7%2587%2592%25E7%2583%25A4.png",
	"menu":"0",
	"href":"0"
},{
	"name":"麻辣關東煮",
	"class":"關東煮",
	"phone":"0939-053-267",
	"times":"晚餐",
	"drink":"不適用",
	"soup":"null",
	"selfClean":"不適用",
	"delivery":"null",	"image":"http://3.bp.blogspot.com/-1t7AS34txt0/WgZXmtk40PI/AAAAAAAAXYU/lBq6vJFmNZMcZSf4bX0HaIME5Yzd_ZcEgCK4BGAYYCw/s1600/%25E9%25BA%25BB%25E8%25BE%25A3%25E9%2597%259C%25E6%259D%25B1%25E7%2585%25AE.png",
	"menu":"0",
	"href":"0"
},{
	"name":"鼎盛發手工湯包",
	"class":"湯包、蒸餃、蔥抓餅",
	"phone":"未提供/待搜集",
	"times":"午餐、晚餐",
	"drink":"null",
	"soup":"null",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://2.bp.blogspot.com/-PwdetivCQI0/WgZXqJcBPuI/AAAAAAAAXYc/gQU4IGx4OgAdQzpu05gzjd5zjx2D-8Z2gCK4BGAYYCw/s1600/%25E9%25BC%258E%25E7%259B%259B%25E7%2599%25BC%25E6%2589%258B%25E5%25B7%25A5%25E6%25B9%25AF%25E5%258C%2585.png",
	"menu":"0",
	"href":"0"
},{
	"name":"梅子の店",
	"class":"便當、炒飯",
	"phone":"06-2432171",
	"times":"午餐、晚餐",
	"drink":"是",
	"soup":"否",
	"selfClean":"是",
	"delivery":"10 up",
	"image":"http://3.bp.blogspot.com/-SSwbqWiVWtY/WgZXx0eXPqI/AAAAAAAAXYo/tOqQkiAm7qI3E_cAYlwknjsNmEWwAcD1QCK4BGAYYCw/s1600/%25E6%25A2%2585%25E5%25AD%2590%25E3%2581%25AE%25E5%25BA%2597.png",
	"menu":"http://3.bp.blogspot.com/-IG0Yjh6XoVQ/WkDL2ghyKaI/AAAAAAAAa2M/1TYAUn0huIYIFysV-kKjJPyqwT6L2iVyACK4BGAYYCw/s1600/%25E6%25A2%2585%25E5%25AD%2590%25E7%259A%2584%25E5%25BA%2597.png",
	"href":"../doorRight/22"
},{
	"name":"吃貨販賣所",
	"class":"速食",
	"phone":"0965-307676",
	"times":"午餐、晚餐",
	"drink":"另購",
	"soup":"另購",
	"selfClean":"是",
	"delivery":"null",
	"image":"http://2.bp.blogspot.com/-ANpjYYNgyk4/WgZXzj070wI/AAAAAAAAXY0/S04OO8KXx8INEyDLtJi0Px8SnOcmtOyVwCK4BGAYYCw/s1600/%25E5%2590%2583%25E8%25B2%25A8%25E8%25B2%25A9%25E8%25B3%25A3%25E6%2589%2580.png",
	"menu":"0",
	"href":"0"
},{
	"name":"摩爾義式料理",
	"class":"null",
	"phone":"06-2432296",
	"times":"午餐、晚餐",
	"drink":"null",
	"soup":"null",
	"selfClean":"null",
	"delivery":"null",
	"image":"http://1.bp.blogspot.com/-rv-6vuK2WWk/WgZX1DQUwPI/AAAAAAAAXY8/B-Px0rByLGQ7uiutNcTgNMbW8m9N7INPgCK4BGAYYCw/s1600/%25E6%2591%25A9%25E7%2588%25BE%25E7%25BE%25A9%25E5%25BC%258F%25E6%2596%2599%25E7%2590%2586.png",
	"menu":"0",
	"href":"0"
},{
	"name":"吉品牛肉麵",
	"class":"一般麵類、鍋燒、牛肉麵",
	"phone":"是/外送06-2432888",
	"times":"午餐、晚餐",
	"drink":"null",
	"soup":"null",
	"selfClean":"null",
	"delivery":"null",
	"image":"http://1.bp.blogspot.com/-tv7n-rfQoig/WgZX3C2MIyI/AAAAAAAAXZE/6_N9AGvcI1MvLlrvHvaGEtJn3EZUVl1GACK4BGAYYCw/s1600/%25E5%2590%2589%25E5%2593%2581%25E7%2589%259B%25E8%2582%2589%25E9%25BA%25B5.png",
	"menu":"http://4.bp.blogspot.com/-k2RYsR_h_RE/WrRxO4AuEOI/AAAAAAAAfqs/O9s98inM-YEUs5OJ6ksNQSWAq66RGeTDQCK4BGAYYCw/s1600/25.png",
	"href":"0"
},{
	"name":"續杯黑糖乃舖",
	"class":"黑糖飲品 廣東粥品 鍋燒系列",
	"phone":"0933-397-470 / 06-2433014",
	"times":"午餐、晚餐",
	"drink":"另購",
	"soup":"另購",
	"selfClean":"否",
	"delivery":"有",
	"image":"https://3.bp.blogspot.com/-MpqykQo-qTY/WpY30-A3gTI/AAAAAAAAeXU/F87OKpBQ7TcghdM2p9Qv5uQJqhCAz-HPQCK4BGAYYCw/s1600/%25E7%25BA%258C%25E6%259D%25AF%25E9%25BB%2591%25E7%25B3%2596%25E5%25A5%25B6%25E8%2588%2596.png",
	"menu":"http://2.bp.blogspot.com/-f540N2XnBC0/WqjPDSda7iI/AAAAAAAAfD4/tG-MtML9xukeoRvqQ49wB4JKrLjwACo2ACK4BGAYYCw/s1600/26.jpg",
	"href":"0"
},{
	"name":"藤手做壽司",
	"class":"壽司拼盤",
	"phone":"未提供/待搜集",
	"times":"午餐、晚餐",
	"drink":"不適用",
	"soup":"不適用",
	"selfClean":"不適用",
	"delivery":"null",
	"image":"http://4.bp.blogspot.com/-Llk8pNHIfQ8/WgZZuyGQ6SI/AAAAAAAAXZw/i5OMNozBBzwtVFJgIKYgXOwkVXNgDxWXwCK4BGAYYCw/s1600/%25E8%2597%25A4%25E6%2589%258B%25E5%2581%259A%25E5%25A3%25BD%25E5%258F%25B8.png",
	"menu":"0",
	"href":"0"
},{
	"name":"阿甘淳牛肉麵",
	"class":"拉麵、意麵、冬粉",
	"phone":"06-2430589",
	"times":"午餐、晚餐",
	"drink":"06-2430589",
	"soup":"null",
	"selfClean":"否",
	"delivery":"null",
	"image":"http://4.bp.blogspot.com/-mC86OB53BuU/WgZX9HZzp9I/AAAAAAAAXZc/qZP6IC3x1j8FlondrdBfSBJvSxJTyxmswCK4BGAYYCw/s1600/%25E9%2598%25BF%25E7%2594%2598%25E6%25B7%25B3%25E7%2589%259B%25E8%2582%2589%25E9%25BA%25B5.png",
	"menu":"http://3.bp.blogspot.com/-MWZOhkzgFrI/WrRwmokurCI/AAAAAAAAfqg/P55GIOewr90RlNZB227GFEb_ulkmnCTugCK4BGAYYCw/s1600/%25E9%2598%25BF%25E7%2594%2598%25E6%25B7%25B3%25E7%2589%259B%25E8%2582%2589%25E9%25BA%25B5.png",
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
	if ($data->final == 1 and $colCount % $numOfCols == 0) {
		/*當項目足3時且到達尾端時，自動結束row並加入底部空隙*/
		echo "</div><div class='wowBottom'>";
	} else if ($colCount % $numOfCols == 0) {
		/*當項目足3，自動結束row並開新row*/
		echo "</div><div class='row text-center'>";
	} else if ($data->final == 1 and $colCount % $numOfCols == 1) {
		/*當項目不足3且到達尾端時，自動填入兩個col-sm.結束row並加入底部空隙*/
		echo "<div class='col-sm'></div><div class='col-sm'></div>";
		echo "</div><div class='row text-center wowBottom'>";
	} else if ($data->final == 1 and $colCount % $numOfCols == 2) {
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
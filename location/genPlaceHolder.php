
<?php
echo "<div class='container wowTop text-center animated ' id='place_holder'><div class='alert alert-info' role='alert'>目前顯示的是：";
if ($value == doorLeftShopJson){
	echo "南台街左邊";
}else if ($value == doorRightShopJson){
	echo "南台街右邊";
}else if ($value == stLeftShopJson){
	echo "大武街左邊";
}else if ($value == stRightShopJson){
	echo "大武街右邊";
}else if ($value == hosp){
	echo "往醫院方向";
}else if ($value == other){
	echo "其他";
}
echo "</div></div>";
?>
	
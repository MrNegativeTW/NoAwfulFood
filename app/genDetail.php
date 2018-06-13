<?php
$json = file_get_contents("../location/shopList.json");
$ShopData = json_decode($json);

foreach($ShopData->$value as $data){
	if ($data->name == $thisShop) {
		echo "<div class='container wowTop text-center'>";
		echo "<div class='card border-secondary mt-3'>";

		echo "<img class='card-img-top' src='" . $data->image . "' alt='圖片失效，請聯絡我們處理。'>";
			
		echo "<div class='card-body'>";
		echo "<h4 class='card-title'>". $data->name . "</h4>";
		echo "<p class='card-text'>" . $data->class . "</p>";
		
		if ($data->menu == "0"){
		echo "<a target='_blank' href='" . $data->menu . "' class='btn btn-info disabled'><i class='fa fa-book' aria-hidden='true'></i> 菜單</a>";
		} else {
		echo "<a target='_blank' href='" . $data->menu . "' class='btn btn-info'><i class='fa fa-book' aria-hidden='true'></i> 菜單</a>";
		}
    	echo "</div>";
		
		echo "<ul class='list-group list-group-flush'>";
		echo "<li class='list-group-item'>電話：" . $data->phone . "</li>";
    	echo "<li class='list-group-item'>時段：" . $data->times . "</li>";
    	echo "<li class='list-group-item'>提供飲料：" . $data->drink . "</li>";
    	echo "<li class='list-group-item'>提供湯品：" . $data->soup . "</li>";
    	echo "<li class='list-group-item'>自行收拾：" . $data->selfclean . "</li>";
    	echo "<li class='list-group-item'>提供外送：" . $data->delivery . "</li>";
 		echo "</ul>";
		
		echo "</div>";
		echo "<div class='wowBottom'></div>";
  		echo "<hr>";
  		echo "</div>";
	}
}
?>
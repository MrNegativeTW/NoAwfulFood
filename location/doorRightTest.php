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

<?php
	
$doorRightShopJson = ' [
{
	"name":"MoM\'s Touch",
	"class":"速食",
	"phone":"未提供/待搜集",
	"times":"午餐/晚餐",
	"drink":"另購",
	"soup":"無",
	"selfClean":"是",
	"delivery":"不提供",
	"image":"無",
	"menu":"無"
},{
	"name":"馬來小館",
	"class":"鍋燒、飯食",
	"phone":"未提供/待搜集",
	"times":"午餐/晚餐",
	"drink":"另購",
	"soup":"無",
	"selfClean":"是",
	"delivery":"不提供",
	"image":"無",
	"menu":"無"
} ]';
	
	
	
	
/**$str = file_get_contents('../arrays/doorRightShop.json');**/
$doorRightShopData = json_decode($doorRightShopJson);
/**echo print_r ($doorRightShopData);**/

foreach($doorRightShopData as $data){
	echo "店名:" . $data->name . "<br>";
	echo "飲食類型:" . $data->class . "<br>";
	echo "電話:" . $data->phone . "<br>";
	echo "營業時段:" . $data->times . "<br>";
	echo "飲料:" . $data->drink . "<br/>";
	echo "湯品:" . $data->soup . "<br/>";
	echo "自行收拾:" . $data->selfClean . "<br/>";
	echo "提供外送:" . $data->delivery . "<br/>";
	echo "圖片:" . $data->image . "<br/>";
	echo "菜單:" . $data->menu . "<br/>";
	echo "<br/>";
}
?>


<div class="container">
 	<div class="card-deck text-center">
  		<div class="card border-secondary mt-3">
    		<a target="_blank" href="../doorRight/1.php"><img class="card-img-top" src="http://2.bp.blogspot.com/-F69XbDIsjWQ/WgZW0LBJ7jI/AAAAAAAAXWI/d7aSpSu2UrYGqg_sviu9UM8HxBC93hGmQCK4BGAYYCw/s1600/MoM%2527s%2BTouch.png" alt="圖片失效，請聯絡我們處理。"></a>
    	<div class="card-body">
				<h4 class="card-title">MoMs Touch</h4><!--1-->
				<p class="card-text">速食</p>
     			<a target="_blank" href="#" class="btn btn-info disabled"><i class="fa fa-book" aria-hidden="true"></i> 菜單</a>
      			<a href="../doorRight/1.php" class="btn btn-info disabled">了解更多</a>
    	</div>
    		<ul class="list-group list-group-flush">
    			<li class="list-group-item">電話：06-2545888</li>
    			<li class="list-group-item">時段：午餐 / 晚餐</li>
 			</ul>
  		</div>

  		<div class="card border-secondary mt-3">
    		<a href="#" onclick="return false;"><img class="card-img-top" src="http://2.bp.blogspot.com/-bwrbBZ8foG0/WgZW7P49DTI/AAAAAAAAXWQ/HUuNfF6roj0MRS2z7Hc_I7w8rDaIsAmwwCK4BGAYYCw/s1600/%25E9%25BC%258E%25E6%2597%25BA%25E9%25A4%2590%25E9%25A3%25B2.png" alt="圖片失效，請聯絡我們處理。"></a>
    	<div class="card-body">
			<h4 class="card-title">鼎旺餐飲</h4><!--2-->
      		<p class="card-text">便當</p>
      		<a target="_blank" href="#" class="btn btn-info disabled"><i class="fa fa-book" aria-hidden="true"></i> 菜單</a>
      		<a href="#" class="btn btn-info disabled">了解更多</a>
   		</div>
			<ul class="list-group list-group-flush">
    			<li class="list-group-item">電話：0953-399-818 / 06-2432530</li>
    			<li class="list-group-item">時段：早餐 / 午餐 / 晚餐</li>
 			</ul>
  		</div>

  		<div class="card  border-secondary mt-3">
    		<a href="#" onclick="return false;"><img class="card-img-top" src="http://1.bp.blogspot.com/-0ZhVHLuY5WA/WgZW7_KtOEI/AAAAAAAAXWY/AYeVwKP9oBwd9UUc7bq4B6L7RXiuhnl2gCK4BGAYYCw/s1600/%25E7%25B4%25A0%25E9%25A3%259F.png" alt="圖片失效，請聯絡我們處理。"></a>
    	<div class="card-body">
      		<h4 class="card-title">素食</h4><!--3-->
      		<p class="card-text">早餐</p>
      		<a target="_blank" href="#" class="btn btn-info disabled"><i class="fa fa-book" aria-hidden="true"></i> 菜單</a>
      		<a href="#" class="btn btn-info disabled">了解更多</a>
    	</div>
    		<ul class="list-group list-group-flush">
    			<li class="list-group-item">電話：0918-721-512 / 0930-157-945</li>
    			<li class="list-group-item">時段：早餐 / 午餐 / 晚餐</li>
 			</ul>    	
  		</div>  		
	</div>




	
	<div class="row text-center wowBottom">
 		<div class="col-sm">
  			<div class="card border-secondary mt-3">
    			<a href="#" onclick="return false;"><img class="card-img-top" src="http://4.bp.blogspot.com/-mC86OB53BuU/WgZX9HZzp9I/AAAAAAAAXZc/qZP6IC3x1j8FlondrdBfSBJvSxJTyxmswCK4BGAYYCw/s1600/%25E9%2598%25BF%25E7%2594%2598%25E6%25B7%25B3%25E7%2589%259B%25E8%2582%2589%25E9%25BA%25B5.png" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-body">
      			<h4 class="card-title">阿甘淳牛肉麵</h4><!--29-->
      			<p class="card-text">拉麵、意麵、冬粉</p>
      			<a target="_blank" href="#" class="btn btn-info disabled"><i class="fa fa-book" aria-hidden="true"></i> 菜單</a>
      			<a href="#" class="btn btn-info disabled">了解更多</a>  
    		</div>
    		<ul class="list-group list-group-flush">
    			<li class="list-group-item">電話：06-2430589</li>
    			<li class="list-group-item">時段：午餐 / 晚餐</li>
 			</ul>
  			</div>
 		</div>
 		<div class="col-sm"></div>
  		<div class="col-sm"></div>
	</div>
	
	
	
	
</div>   
    <?php include('../footer.php') ?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
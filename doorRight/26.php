<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<?php include '../head.php'; include '../arrays/doorRightShop.php'; include('../arrays/items.php'); 
	$p = $twentySix; ?>
</head>
<body class="wowTitleText">
	<!--NavBar-->
	<?php include '../navBarIndex.php' ?>
	<div class="container wowTop text-center">
  		<div class="card border-secondary mt-3">
    			<a href="#" onclick="return false;"><img class="card-img-top" src="<?php echo $twentySixp[0]; ?>" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-body">
				<h4 class="card-title"><?php echo $twentySix[0]; ?></h4>
				<p class="card-text"><?php echo $twentySix[1]; ?></p>
     			<a target="_blank" href="<?php echo $twentySixMenu[0];?>" class="btn btn-info"><?php echo $button[0] ?></a>
    		</div>
    		<ul class="list-group list-group-flush"><?php include('../arrays/shopDetailList.php') ?></ul>
  		</div>
  		<div class="wowBottom"></div>
  		<hr>
  	</div>
  	
  	<div class="container">
  	<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action" id="first">測試</a>
  <a href="#" class="list-group-item list-group-item-action" id="second">更多測試</a>
  <a href="#" class="list-group-item list-group-item-action" id="third">滿滿的測試</a>
</div>
		
  	<div id="show"></div>
  	
  	</div>

<h1 class="text-center">菜色實體圖</h1>

<div class="container">
<h4 class="text-center wowTop">便當</h4>
 	<div class="card-deck text-center">
  		<div class="card border-secondary mt-3">
   			<a href="#" onclick="return false;"><img class="card-img-top" src="http://3.bp.blogspot.com/--hb5t9NAQf8/Wkt2pmETGlI/AAAAAAAAbiI/b0UYWjA_TZsS8ShUWnGxIOwWxu2jLjnfACK4BGAYYCw/s1600/%25E5%258D%25A1%25E5%2595%25A6%25E9%259B%259E%25E8%2585%25BF%25E6%258E%2592%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">卡拉雞腿排飯 $60</div>
		</div>
  		<div class="card border-secondary mt-3">
    			<a href="#" onclick="return false;"><img class="card-img-top" src="http://4.bp.blogspot.com/-jhor3FK1aYQ/WkDJiqD3a6I/AAAAAAAAa1U/xKdjZABWsmI6c9I-Qx0oJDzf6pKXFHbTwCK4BGAYYCw/s1600/%25E7%2584%25A1%25E9%25AA%25A8%25E9%259B%259E%25E6%258E%2592%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">無骨雞排飯 $60</div>
		</div>
	</div>
 	<div class="card-deck text-center">
  		<div class="card border-secondary mt-3">
   			<a href="#" onclick="return false;"><img class="card-img-top" src="http://3.bp.blogspot.com/-WaCsG8mILx8/Wkt23-b-e0I/AAAAAAAAbiU/A3D_OX-7h74xCnyEkD-L5AugPGglW-K9gCK4BGAYYCw/s1600/%25E6%25A4%2592%25E9%25B9%25BD%25E9%259B%259E%25E4%25B8%2581%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">椒鹽雞丁飯 $60</div>
		</div>
  		<div class="card border-secondary mt-3">
    			<a href="#" onclick="return false;"><img class="card-img-top" src="http://1.bp.blogspot.com/-GktLiX-MGOk/Wkt3VgXRNII/AAAAAAAAbic/er7l1aNbSYI_y3A0BsjEDm00hDc4F45bgCK4BGAYYCw/s1600/%25E6%2597%25A5%25E5%25BC%258F%25E8%25B1%25AC%25E6%258E%2592%25E9%25A3%25AF%2528%25E4%25B8%258D%25E7%25A2%25BA%25E5%25AE%259A%2529%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">日式豬排飯 $60</div>    		
		</div>
	</div>
 	<div class="card-deck text-center">
  		<div class="card border-secondary mt-3">
   			<a href="#" onclick="return false;"><img class="card-img-top" src="http://1.bp.blogspot.com/-KWbiKvUyTdg/Wky7B4i7LFI/AAAAAAAAboY/GX8M8AyhCWYV2sXpsuRpCpomnbudBv9MQCK4BGAYYCw/s1600/%25E8%25B5%25B7%25E5%258F%25B8%25E8%25B1%25AC%25E6%258E%2592%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">起司豬排飯 $60</div>
		</div>
  		<div class="card border-secondary mt-3">
    			<a href="#" onclick="return false;"><img class="card-img-top" src="http://4.bp.blogspot.com/-uukS5e5B-II/Wkt3lJF-j-I/AAAAAAAAbio/AI3ycigNoDo2sBZbv4oajrEugnReTsQLQCK4BGAYYCw/s1600/%25E5%25AE%25B6%25E5%25B8%25B8%25E8%25B1%25AC%25E6%258E%2592%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">家常豬排飯 $60</div>    		
		</div>
	</div>
 	<div class="card-deck text-center">
  		<div class="card border-secondary mt-3">
   			<a href="#" onclick="return false;"><img class="card-img-top" src="https://4.bp.blogspot.com/-vW4-3JMFR88/WpVBTZB_YnI/AAAAAAAAeUs/LU7cMKssCD4dqgBZtgfeA6hQBnN_1ezYQCK4BGAYYCw/s1600/%25E9%25AD%259A%25E6%258E%2592%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">魚排飯 $60</div>
		</div>
  		<div class="card border-secondary mt-3">
    			<a href="#" onclick="return false;"><img class="card-img-top" src="http://4.bp.blogspot.com/-fq1A7wffaa0/WpUvxvYajSI/AAAAAAAAeSk/fkldtNMDZWUhtaXDfAzuBpfdb6gu_WlHgCK4BGAYYCw/s1600/%25E9%25A6%2599%25E9%2585%25A5%25E9%25AE%25AD%25E9%25AD%259A%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">香酥鮭魚飯 $60</div>    		
		</div>
	</div>
 	<div class="card-deck text-center">
  		<div class="card border-secondary mt-3">
   			<a href="#" onclick="return false;"><img class="card-img-top" src="http://4.bp.blogspot.com/-LhEK8jjAz78/Wkt3xqgcvfI/AAAAAAAAbiw/Jg3RYX4oaaYlN91X38i-ucLqQqTPIz_JwCK4BGAYYCw/s1600/%25E9%25A6%2599%25E8%2585%25B8%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">香腸飯 $60</div>
		</div>
  		<div class="card border-secondary mt-3">
    			<a href="#" onclick="return false;"><img class="card-img-top" src="http://1.bp.blogspot.com/-QmLa6ldoQ8Y/WpUwLDI9j6I/AAAAAAAAeSw/t8MLf1ExTVYjcO4gPIY_TD28fJuAPj1hQCK4BGAYYCw/s1600/%25E9%25A6%2599%25E7%2587%2589%25E8%25B1%25AC%25E6%258E%2592%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">香燉豬排飯 $60</div>    		
		</div>
	</div>
 	<div class="card-deck text-center wowBottom">
  		<div class="card border-secondary mt-3">
   			<a href="#" onclick="return false;"><img class="card-img-top" src="http://4.bp.blogspot.com/-BWQnmI2sDEI/WpUxApNK_AI/AAAAAAAAeTU/RBixPePObM8gq4jDAqKzYqE0vv6UTAbbQCK4BGAYYCw/s1600/%25E9%25A6%2599%25E7%2587%2589%25E5%25B0%258F%25E6%258E%2592%25E9%25A3%25AF%2B60.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">香燉小排飯 $60</div>
		</div>
  		<div class="card border-secondary mt-3">
    			<a href="#" onclick="return false;"><img class="card-img-top" src="http://2.bp.blogspot.com/-qob_82d5K3g/WpyC5qKtA6I/AAAAAAAAeho/ZqEM0hf79_005PHjqXeNe92I4WqU843eACK4BGAYYCw/s1600/%25E7%25B6%2593%25E6%25BF%259F%25E9%25A4%2590.jpg" alt="圖片失效，請聯絡我們處理。"></a>
    		<div class="card-footer bg-transparent border-secondary">經濟餐 $40</div>    		
		</div>
	</div>
	
	<div class="row text-center">
 		<div class="col-sm">
  			<div class="card border-secondary mt-3">
   				<a href="#" onclick="return false;"><img class="card-img-top" src="http://3.bp.blogspot.com/-DBKey_PTWCw/WgviY83OERI/AAAAAAAAXo4/VRW_U9JObLIq7I-X4aFMDFLwvbaaTadkQCK4BGAYYCw/s1600/coming%2Bsoon.png" alt="圖片失效，請聯絡我們處理。"></a>
    			<div class="card-footer bg-transparent border-secondary">鮭魚蛋炒飯 $60</div>
			</div>
 		</div>
 		<div class="col-sm"></div>
		</div>
	</div>
<div class="wowBottom"></div>
	
	<?php include('../footer.php') ?>
	<!-- Bootstrap core JavaScript-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
      	$("#first").on("click", function(){
			$("#show").unload();
        	$("#show").load("../index.php");
			
      });
		$("#second").on("click", function(){
        	$("#show").load("../log.php");
      });
		$("#third").on("click", function(){
        	$("#show").load("../aboutUs.php");
      });
    </script>
    
</body>
</html>
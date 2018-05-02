<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<?php include '../head.php'; include '../arrays/doorRightShop.php'; include('../arrays/items.php'); 
	$p = $twentySix; ?>
	<script>
	function iframeChange() {
    	var a = document.querySelector(".loadiframe"),
        	iframe = document.getElementById('frame');

		a.addEventListener("click", function (e) {
        	iframe.src = e.target.dataset.src;
        	iframe.width = e.target.dataset.width;
        	iframe.height = e.target.dataset.height;
    	});
	}
		window.onload = iframeChange;
		
		
		
	
	</script>
</head>
<body class="global-font-family">
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
	<div class="loadiframe text-center">
		<a class="list-group-item list-group-item-action" id="b1" data-src="../index" data-width=100% data-height="500">鍋燒系列</a>
		<a class="list-group-item list-group-item-action" id="b2" data-src="../doorRight/26" data-width=100% data-height="500">粥品系列</a>
		<a class="list-group-item list-group-item-action" id="b3" data-src="http://jquery.com/" data-width=100% data-height="500">飯系列</a>
		<a class="list-group-item list-group-item-action" id="b4" data-src="http://jquery.com/" data-width=100% data-height="350">炒飯系列</a>
		<a class="list-group-item list-group-item-action" id="b5" data-src="http://jquery.com/" data-width=100% data-height="350">炒麵系列</a>
		<a class="list-group-item list-group-item-action" id="b6" data-src="http://jquery.com/" data-width=100% data-height="350">湯系列</a>
		<a class="list-group-item list-group-item-action" id="b7" data-src="http://jquery.com/" data-width=100% data-height="350">新品系列</a>
	</div>
	
	<iframe id='frame' frameborder="0" scrolling="no" width="500" height="1000"></iframe>
	
	
	
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
</body>
</html>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<?php include 'head.php' ?>
</head>
<body class="wowTitleText">
	<!--NavBar-->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="mainNav" style="background-color: #3d3d3d;position:absolute;">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="../">No Awful Food</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>  
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<!--doorRight-->
            	<li class="nav-item">
					<a class="nav-link" href="../location/doorLeft">南台街左邊</a>
				</li>
				<!--doorLeft-->
				<li class="nav-item">
					<a class="nav-link" href="../location/doorRight">南台街右邊</a>	
				</li>
				<!--stRight-->
				<li class="nav-item">
					<a class="nav-link" href="../location/stLeft">大武街左邊</a>						
				</li>
				<!--stLeft-->
				<li class="nav-item">
					<a class="nav-link" href="../location/stRight">大武街右邊</a>					
				</li>
				<!--hosp-->
				<li class="nav-item">
					<a class="nav-link" href="../location/hosp">往醫院方向</a>
				</li>
				<!--other-->
				<li class="nav-item">
					<a class="nav-link" href="../location/other">其他</a>
				</li>
			</ul>
        </div>
	</div>
</nav>
	<div class="header-nightsky">
        <div class="hero">
            <h1>找食物?<br>來這邊!</h1>
            <p>還在找吃什麼?<br>這邊都幫你整理好了!</p>
        </div>
    </div>
    <!--嗨 你好 原來你也看原始碼-->
    	
	<!--Our Service-->
	<div class="container text-center">
		<div class="row" style="padding-top: 30px; padding-bottom: 30px;">
			<div class="col-sm wowTop">
				<i class="fa fa-search fa-4x" aria-hidden="true" style="color: #E96463"></i>
				<h3 class="wowTop">快速尋找</h3>
				<p class="wowTop">還在為了吃什麼在街上晃?<br>這邊都幫你整理好了!<br>點幾下，什麼資訊都有，根本就是懶人救星 !</p>
			</div>
			<div class="col-sm wowTop">
				<i class="fa fa-pencil fa-4x" aria-hidden="true" style="color: #177E89"></i>
				<h3 class="wowTop">事先預訂</h3>
				<p class="wowTop">還在擔心下課來不及買飯?<br>這邊都幫你整理好了!<br>讓你上課查詢，下課訂餐，到店付款拿了走 !</p>
			</div>
			<div class="col-sm wowTop">
				<i class="fa fa-camera fa-4x" aria-hidden="true" style="color: #FF9D60"></i>
				<h3 class="wowTop">真實樣貌</h3>
				<p class="wowTop">還在好奇食物樣貌跟分量?<br>這邊全部都完整呈現!<br>以後再也不用猜份量，看下就知道適不適合 !</p>
			</div>
		</div>
	</div>
	<div class="jumbotron jumbotron-fluid">
   		<div class="container">
    		<h3 class="display-4 text-center"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:#cc3300"></i>  請注意...</h3>
    		<p class="lead text-center" style="font-size: 20px;">本站圖多，請小心您的數據用量<br>當然，我們也會盡力將圖片最佳化</p>
		</div>
	</div>
	<!--Developing Progress Bar-->
	<div class="container" style="padding-top: 10px; padding-bottom: 20px;">
		<h3><p class="text-center">總開發進度：50%</p></h3>
		<div class="progress">
  			<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
	<div class="container" style="padding-top: 10px; padding-bottom: 20px;">
		<h3><p class="text-center">"分類" 開發進度：80%</p></h3>
		<div class="progress">
  			<div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
	<div class="container" style="padding-top: 10px; padding-bottom: 20px;">
		<h3><p class="text-center">"了解更多" 開發進度：20%</p></h3>
		<div class="progress">
  			<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
	
	<!--Loading Footer, including aboutUs,log and more-->
<?php include('footer.php') ?>
</body>
</html>
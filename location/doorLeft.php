<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<?php include '../head.php' ?>
</head>
<body class="wowTitleText">
	<?php include '../navBarIndex.php' ?>
<div class="container wowTop text-center animated flash">
	<div class="alert alert-info" role="alert">目前顯示的是：南台街左邊</div>
</div>
<!--產生主體-->
<?php
$value=doorLeftShopJson;
include ('genInfo.php');
include('../footer.php');
?>
</body>
</html>
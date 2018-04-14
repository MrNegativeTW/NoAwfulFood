<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
	<?php include '../head.php' ?>
</head>
<body class="wowTitleText">
	<?php include '../navBarIndex.php' ?>
<div class="container wowTop text-center">
	<div class="alert alert-info" role="alert">目前顯示的是：大武街左邊</div>
</div>
<?php
$value=stLeftShopJson;
include ('genList.php');
include('../footer.php');
?>
</body>
</html>
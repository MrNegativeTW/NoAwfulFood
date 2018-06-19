<!DOCTYPE html>
<html lang="zh-Hant-TW">
	<?php include '../head.php' ?>
<body class="global-font-family">
<?php
/*
-------------------
Global Navbar
-------------------
*/
include ('../navBarIndex.php');
/*
-------------------
Different value for each page, Auto generate things.
-------------------
*/
$value=toBuildSJson;
/*
-------------------
Generate Blinking Warning, hope users can know where they are viewing.
-------------------
*/
include('genPlaceHolder.php');
/*
-------------------
Generate Shop List
-------------------
*/
include ('genList.php');
/*
-------------------
Global Footer
-------------------
*/
include('../footer.php');
?>
</body>
</html>
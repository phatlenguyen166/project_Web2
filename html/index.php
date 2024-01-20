<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/1acf2d22a5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/style_Mainpage.css"> <!-- css style - co the sua lai -->
	<title>Thế giới di động</title>
</head>

<body>
	<div class="container">
		<?php
		// HEADER
		include("../html/index/header.php");
		// <!--phan loai theo hang san pham-->
		include("../html/index/brandList.php");
		// <!--List cac san pham-->
		include("../html/index/listProduct.php");
		// <!--phan trang-->
		include("../html/index/phanTrang.php");
		// FOOTER
		include("../html/index/footer.php");
		?>
	</div>
	<script>
		function remind() {
			alert('Bạn chưa đăng nhập !!!');
		}
	</script>
</body>
</html>
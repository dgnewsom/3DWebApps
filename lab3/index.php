<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/style.css">
<title>Lab 3</title>
<script src="https://kit.fontawesome.com/354fa36abf.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include('./includes/navbar.php')?>
<div class="container main_contents">
	<div class="row">
		<!-- main 3d image / carousel -->
		<div class="col-sm-12">
			<div id="main_3d_image">
<!--				class="col-xs-12 col-sm-4"-->
				<div id="main_text" > 
					<h2>Coca Cola Great Britain</h2>
					<h3>Founded by Dr John S Pemberton</h3>
					<p>The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic 
						beverage concentrates and syrups, and produces nearly 400 brands.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<!--Coca cola column-->
		<div class="col-sm-4">
			<div class="card">
				<a href="coke.php">
				<img class="card-img-top img-fluid img-thumbnail" src="./assets/images/coca_cola.jpg" alt="Coca Cola">
				</a>
				<div class="card-body">
					<h3>Coca Cola</h3>
					<p>It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special.</p>
					<a href="coke.php" class="btn btn-primary">Find out more ...</a>
				</div>
			</div>
		</div>
		<!--Sprite column-->
		<div class="col-sm-4">
			<div class="card">
				<a href="sprite.php">
				<img class="card-img-top img-fluid img-thumbnail" src="./assets/images/sprite.jpg" alt="Sprite">
				</a>
				<div class="card-body">
					<h3>Sprite</h3>
					<p>First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. <br>
						Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories. </p>
					<a href="sprite.php" class="btn btn-primary">Find out more ...</a>
				</div>
			</div>
		</div>
		<!--Dr Pepper column-->
		<div class="col-sm-4">
			<div class="card">
				<a href="pepper.php">
				<img class="card-img-top img-fluid img-thumbnail" src="./assets/images/dr_pepper.jpg" alt="Dr Pepper">
				</a>
				<div class="card-body">
					<h3>Dr Pepper</h3>
					<p>Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. <br>
						It was created by Texas pharmacist Charles Alderton in 1885. </p>
					<a href="pepper.php" class="btn btn-primary">Find out more ...</a>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-sm footer">
	<div class="container">
		<div class="navbar-text float-left copyright">
			<p><span class="align-baseline">&copy; 2022 Daniel Newsom</span></p>
		</div>
		<div class="navbar-text float-right social">
			<a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size: 20;color: red"></i></a>
			<a href="#"><i class="fab fa-twitter fa-2x" style="font-size: 20;color: green"></i></a>
			<a href="#"><i class="fab fa-google-plus fa-2x" style="font-size: 20;color: blue"></i></a>
			<a href="#"><i class="fab fa-github-square fa-2x" style="font-size: 20;color: yellow"></i></a>
		</div>
	</div>
</nav>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  ></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

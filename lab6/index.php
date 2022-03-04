<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--CSS (Bootstrap First) -->
<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/x3dom.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<title>Lab 6</title>

</head>
<body id="body">
<?php include "./includes/header.php"?>

<!-- Main Content -->
<!-- Home Page Content -->
<div id="home" class="container main_contents">
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
				<a href="javascript:swap('coke')">
				<img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/coca_cola.jpg" alt="Coca Cola">
				</a>
				<div class="card-body">
					<h3>Coca Cola</h3>
					<p>It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special.</p>
					<a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary" target="_blank">Find out more ...</a>
				</div>
			</div>
		</div>
		<!--Sprite column-->
		<div class="col-sm-4">
			<div class="card">
				<a href="javascript:swap('sprite')">
				<img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/sprite.jpg" alt="Sprite">
				</a>
				<div class="card-body">
					<h3>Sprite</h3>
					<p>First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. <br>
						Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories. </p>
					<a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary" target="_blank">Find out more ...</a>
				</div>
			</div>
		</div>
		<!--Dr Pepper column-->
		<div class="col-sm-4">
			<div class="card">
				<a href="javascript:swap('pepper')">
				<img class="card-img-top img-fluid img-thumbnail" src="assets/images/site_images/dr_pepper.jpg" alt="Dr Pepper">
				</a>
				<div class="card-body">
					<h3>Dr Pepper</h3>
					<p>Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. <br>
						It was created by Texas pharmacist Charles Alderton in 1885.</p>
					<a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper " class="btn btn-primary" target="_blank">Find out more ...</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Coke page -->
<div id="coke" style="display: none" class="container main_contents">
	<div class="row">
		<div class="col-sm-10">
			<div class="card text-left">
				<div class="card-header main-colour">
					<ul class="nav nav-tabs card-header-tabs main-colour">
						<li class="nav-item">
							<a class="nav-link active main-colour" aria-current="true" href="javascript:swap('coke')">Coca-Cola</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:swap('sprite')">Sprite</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:swap('pepper')">Dr Pepper</a>
						</li>
					</ul>
				</div>
				<div class ="preview-header">
					<h4>Coca Cola X3D Model</h4>
				</div>
				<div class="model3D">
					<x3d>
						<scene>
							<inline namespacename = "can" url="./assets/x3d/coke_can.x3d"></inline>
						</scene>
					</x3d>
				</div>
				<div class="card-body">

					<p class="card-text">This model was created using 3DS Max, exported VRML97 and converted to X3D for displaying.</p>
					<h4>Camera Views</h4>
					<p>Use these buttons to adjust the camera view for the 3D preview</p>
					<button type="button" onclick="cam1()">Cam 1</button>
					<a href="#" class="btn btn-primary btn-responsive camera-font">Front</a>
					<a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
					<a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
					<a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="gallery card">
				<div class="card-header main-colour">
					3D Image Gallery
				</div>
				<div id="gallery_coke"></div>
				<p class="card-text">3D images rendered using 3DS Max and Blender</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Coca Cola</h3>
					<p class="card-text">
						Atlanta Beginnings: It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled.
						Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs' Pharmacy put it on sale for five cents (about 3p) a glass.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Sprite Page -->
<div id="sprite" style="display: none" class="container main_contents">
	<div class="row">
		<div class="col-sm-10">
			<div class="card text-left">
				<div class="card-header main-colour">
					<ul class="nav nav-tabs card-header-tabs main-colour">
						<li class="nav-item">
							<a class="nav-link" aria-current="true" href="javascript:swap('coke')">Coca-Cola</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active main-colour" href="javascript:swap('sprite')">Sprite</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:swap('pepper')">Dr Pepper</a>
						</li>
					</ul>
				</div>
				<div class ="preview-header">
					<h4>Sprite X3D Model</h4>
				</div>
				<div class="model3D">
					<x3d>
						<scene>
							<inline namespacename = "can" url="./assets/x3d/sprite_bottle.x3d"></inline>
						</scene>
					</x3d>
				</div>
				<!--					<div id="main_3d_image"></div>-->

				<div class="card-body">

					<p class="card-text">This model was created using 3DS Max, exported VRML97 and converted to X3D for displaying.</p>
					<h4>Camera Views</h4>
					<p>Use these buttons to adjust the camera view for the 3D preview</p>
					<button type="button" onclick="cam1()">Cam 1</button>
					<a href="#" class="btn btn-primary btn-responsive camera-font">Front</a>
					<a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
					<a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
					<a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="gallery card">
				<div class="card-header main-colour">
					3D Image Gallery
				</div>
				<div id="gallery_sprite"></div>
				<p class="card-text">3D images rendered using 3DS Max and Blender</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Sprite</h3>
					<p class="card-text">
						First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries.
						Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Dr Pepper Page -->
<div id="pepper" style="display: none" class="container main_contents">
	<div class="row">
		<div class="col-sm-10">
			<div class="card text-left">
				<div class="card-header main-colour">
					<ul class="nav nav-tabs card-header-tabs main-colour">
						<li class="nav-item">
							<a class="nav-link" aria-current="true" href="javascript:swap('coke')">Coca-Cola</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="javascript:swap('sprite')">Sprite</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active main-colour" href="javascript:swap('pepper')">Dr Pepper</a>
						</li>
					</ul>
				</div>
				<div class ="preview-header">
					<h4>Dr Pepper X3D Model</h4>
				</div>
				<div class="model3D">
					<x3d>
						<scene>
							<inline namespacename = "can" url="./assets/x3d/pepper_cup.x3d"></inline>
						</scene>
					</x3d>
				</div>
				<!--					<div id="main_3d_image"></div>-->

				<div class="card-body">

					<p class="card-text">This model was created using 3DS Max, exported VRML97 and converted to X3D for displaying.</p>
					<h4>Camera Views</h4>
					<p>Use these buttons to adjust the camera view for the 3D preview</p>
					<button type="button" onclick="cam1()">Cam 1</button>
					<a href="#" class="btn btn-primary btn-responsive camera-font">Front</a>
					<a href="#" class="btn btn-secondary btn-responsive camera-font">Back</a>
					<a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
					<a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
				</div>
			</div>
		</div>
		<div class="col-sm-2">
			<div class="gallery card">
				<div class="card-header main-colour">
					3D Image Gallery
				</div>
				<div id="gallery_pepper"></div>
				<p class="card-text">3D images rendered using 3DS Max and Blender</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Dr Pepper</h3>
					<p class="card-text">
						Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on.
						It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "./includes/footer.php"?>

</body>
</html>

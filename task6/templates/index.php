<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<div class="container">
		<h2 class="text-center"><?=$statusMessage?></h2>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h4 class="text-center"><?=$bandName?></h4>
			</div>
		</div>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h5 class="text-center">Musicians in the band:</h5>
				<?php
				print_r($bandMusicians);
					/*foreach ($bandMusicians as $value) {
						echo $value;
					}*/
				?>
			</div>
		</div>
	</div>
</body>
</html>
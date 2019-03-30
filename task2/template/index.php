<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Caclulator</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 pt-3">
				<h3 class="text-center">Calculator</h3>
			</div>
		</div>
		<div class="row bg-light">
			<div class="col-12 pt-3">
				<h4>Sample to set first and second number: </h4>
				<p class="pt-2"><?=$setNum1Res?><?=$num1?><br />
				<?=$setNum2Res?><?=$num2?></p>
			</div>
		</div>
		<div class="row bg-white">
			<div class="col-12 pt-3">
				<h4>Sample with memory operation: </h4>
				<p class="pt-2"><?=$setMemRes?><?=$mem?><br />
				<?=$setNum2Res?><?=$num2?>
				</p>
			</div>
		</div>
	</div>
</body>
</html>
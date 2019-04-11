<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<meta charset="UTF-8">
	<title>Task 5</title>
</head>
<body>
	<div class="container">
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h4 class="text-center">Example work for sessions</h4>
				<p><b>Try to input data:</b> <?=$sesInput?></p>
				<p><b>Try get data:</b> <?=$firstSesData?></p>
				<p><b>Try to delete data:</b> <?=$sesDelete?></p>
				<p><b>Try to get data after deleting:</b> <?=$secondSesData?></p>
			</div>
		</div>
		<div class="row pt-3 bg-light">
			<div class="col-12">
				<h4 class="text-center">Example work for cookies</h4>
				<h6 class="text-center">Notice! Work with reload, cause this is how cookies works</h6>
				<p><b>Try to input data:</b> <?=$cooInput?></p>
				<p><b>Try get data:</b> <?=$firstCooData?></p>
				<p><b>Try to delete data:</b> <?=$cooDelete?></p>
				<p><b>Try to get data after deleting:</b> <?=$secondCooData?></p>
			</div>
		</div>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h4 class="text-center">Example work for ini-files</h4>
				<p><b>Try to input data:</b> <?=$iniInput?></p>
				<p><b>Try get data:</b> <?=$firstIniData?></p>
				<p><b>Try to delete data:</b> <?=$iniDelete?></p>
				<p><b>Try to get data after deleting:</b> <?=$secondIniData?></p>
			</div>
		</div>
		<div class="row pt-3 bg-light">
			<div class="col-12">
				<h4 class="text-center">Example work for json</h4>
				<p><b>Try to input data:</b> <?=$jsonInput?></p>
				<p><b>Try get data:</b> <?=$firstJsonData?></p>
				<p><b>Try to delete data:</b> <?=$jsonDelete?></p>
				<p><b>Try to get data after deleting:</b> <?=$secondJsonData?></p>
			</div>
		</div>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h4 class="text-center">Example work for mysql</h4>
				<p><b>Try to input data:</b> <?=$mysqlInput?></p>
				<p><b>Try get data:</b> <?=$firstMysqlData?></p>
				<p><b>Try to delete data:</b> <?=$mysqlDelete?></p>
				<p><b>Try to get data after deleting:</b> <?=$secondMysqlData?></p>
			</div>
		</div>
	</div>
</body>
</html>
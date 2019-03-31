<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<p><?php
				for ($i=0; $i < $countString; $i++) 
				{
					echo $fileWork->getSourceString($i);
				}
				?></p>
			</div>
		</div>
		<div class="row pt-3 bg-light">
			<div class="col-12">
				<p><?php
				for ($i=0; $i < $countString; $i++) 
				{
					for ($x=0; $x < $fileWork->getAmountSymbContent($i); $x++) 
					{ 
						echo $fileWork->getSourceSymb($i, $x);
					}
				}
				?></p>
			</div>
		</div>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<p><?php
				for ($i=0; $i < $countString; $i++) 
				{
					echo $fileWork->getSaveToString($i);
				}
				?></p>
			</div>
		</div>
		<div class="row pt-3 bg-light">
			<div class="col-12">
				<p><?php
				for ($i=0; $i < $countString; $i++) 
				{
					for ($x=0; $x < $fileWork->getAmountSymbContent($i); $x++) 
					{ 
						echo $fileWork->getSaveToSymb($i, $x);
					}
				}
				?></p>
			</div>
		</div>
	</div>
</body>
</html>
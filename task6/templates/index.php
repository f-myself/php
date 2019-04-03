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
				<p>
					<?php
						foreach ($bandMusicians as $value) 
						{
							echo  "<b>" . $value->getName() . "</b>. Role is:";
							foreach ($value->getMusicianType() as $type) {
								echo " " . $type;
							}
							echo "; Plays on: ";
							foreach ($value->getInstrument() as $instrument)
							{
								echo $instrument->getName() . " ";
							}
							echo "<br>";
						}
					?>
				</p>
			</div>
		</div>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h5 class="text-center">Instruments:</h5>
				<p>
					<?php
						foreach ($instruments as $value) 
						{
							echo "<b>" . $$value->getName() . ".</b> Category: " . $$value->getCategory() . "<br>";
						}
					?>
				</p>
			</div>
		</div>
	</div>
</body>
</html>
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
					<hr>
				Memory + 25 = <?=$memPlusRes?><br />
				Now memory is <?=$memPlusRes?>
				<hr>
				Memory - 34 = <?=$memMinusRes?><br />
				Now memory is <?=$calc -> getMemory()?><hr>
				Memory clearing... <?=$calc -> memoryClear()?><br />
				Now memory is not set</p>
			</div>
		</div>
		<div class="row bg-light">
			<div class="col-12 pt-3">
				<h4>Sample to add numbers: </h4>
				<p class="pt-2"><?=$num1 . " + " . $num2?> = <?=$sumRes?>
				</p>
			</div>
		</div>
		<div class="row bg-white">
			<div class="col-12 pt-3">
				<h4>Sample to substracting numbers: </h4>
				<p class="pt-2"><?=$num1 . " - " . $num2?> = <?=$subRes?>
				</p>
			</div>
		</div>
		<div class="row bg-light">
			<div class="col-12 pt-3">
				<h4>Sample to multiply numbers: </h4>
				<p class="pt-2"><?=$num1 . " x " . $num2?> = <?=$multRes?>
				</p>
			</div>
		</div>
		<div class="row bg-white">
			<div class="col-12 pt-3">
				<h4>Sample to divide numbers: </h4>
				<p class="pt-2"><?=$num1 . " / " . $num2?> = <?=$divRes?>
				</p>
			</div>
		</div>
		<div class="row bg-light">
			<div class="col-12 pt-3">
				<h4>Sample to convert number 1: </h4>
				<p class="pt-2">
					Switching first time: <?=$convertRes?><br />
					Switching second time: <?=$convertRes2?>
				</p>
			</div>
		</div>
		<div class="row bg-white">
			<div class="col-12 pt-3">
				<h4>Sample to get square root of number 1: </h4>
				<p class="pt-2">
					Square root of <?=$num1?>: <?=$sqRootRes?>
				</p>
			</div>
		</div>
		<div class="row bg-light">
			<div class="col-12 pt-3">
				<h4>Sample to get percent from number 1: </h4>
				<p class="pt-2">
					25% of <?=$num1?>: <?=$percentRes?>
				</p>
			</div>
		</div>
		<div class="row bg-white">
			<div class="col-12 pt-3">
				<h4>Sample to 1/x: </h4>
				<p class="pt-2">
					1 / <?=$num1?>: <?=$oneDivRes?>
				</p>
			</div>
		</div>
	</div>
</body>
</html>
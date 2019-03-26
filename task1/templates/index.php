<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/main.css">
	<title>Document</title>
</head>
<body>
	<h3><?=$statusMessage?></h3>
	<div class="form-block">
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			<input type="file" name="upload" required>
			<button type="submit">Send file!</button>
		</form>
	</div>
</body>
</html>
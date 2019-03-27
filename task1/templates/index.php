<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/main.css">
	<title>Document</title>
</head>
<body>
	<h3><?=$_COOKIE['statusMessage']?></h3>
	<div class="form-block">
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			<input type="file" name="upload" required>
			<button type="submit">Send file!</button>
		</form>
	</div>
<?
	if ($filesInfo != ERR_NO_FOLDER and $filesInfo != ERR_EMPTY_FOLDER)
	{
?>
	<h3><?=$_COOKIE['deleteStatus']?></h3>
	<div class="table">
		<table class="filesTable">
			<thead>
		    <tr>
		        <td>File number</td>
		        <td>File Name</td>
		        <td>FileSize</td>
		        <td>DeleteFile</td>
		    </tr>
    	</thead>
    	<tbody>
    		<?
    			foreach ($filesInfo as $key => $value) {
    		?>
				<tr>
					<td><?=$key+1?></td>
					<td><?=$value['name']?></td>
					<td><?=$value['size']?></td>
					<td><form method="POST" action="index.php">
						<input type="hidden" name="path" value="<?=$value['path']?>">
						<button type="submit">Delete</button>
					</form></td>
			<?
    			}
    		} else {
    			echo $filesInfo;
    		}
    		?>
    	</tbody>
		</table>
	</div>
</body>
</html>
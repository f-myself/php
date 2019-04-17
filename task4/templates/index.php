<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<h2 class="text-center"><?=$status?></h2>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h4 class="text-center">Try to insert data</h4>
				<p>MySQL query: <?=$mysqlInsertQuery?></p>
				<p>MySQL: <?=$mysqlInsertStatus?></p>
				<p>Postgres query: <?=$pgInsertQuery?></p>
				<p>PostgreSQL: <?=$pgInsertStatus?></p>
			</div>
		</div>
		<div class="row pt-3 bg-light">
			<div class="col-12">
				<h4 class="text-center">Try to select data</h4>
				<p>MySQL query: <?=$mysqlSelectQuery?></p>
				<p>Result: 
				<?php
					foreach ($mysqlSelectResult as $key => $val)
					{
						echo $key . ": " . $val . "\n";
					}
				?></p>
				<p>Postgres query: <?=$pgSelectQuery?></p>
				<p>Result: 
				<?php
					foreach ($pgSelectResult as $key => $val)
					{
						echo $key . ": " . $val . "\n";
					}
				?></p>
			</div>
		</div>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h4 class="text-center">Try to update data</h4>
				<p>MySQL query: <?=$mysqlUpdateQuery?></p>
				<p>MySQL: <?=$mysqlUpdateResult?></p>
				<p>Postgres query: <?=$pgUpdateQuery?></p>
				<p>PostgreSQL: <?=$pgUpdateResult?></p>
			</div>
		</div>
		<div class="row pt-3 bg-white">
			<div class="col-12">
				<h4 class="text-center">Try to delete data</h4>
				<p>MySQL query: <?=$mysqlDeleteQuery?></p>
				<p>MySQL: <?=$mysqlDeleteResult?></p>
				<p>Postgres query: <?=$pgDeleteQuery?></p>
				<p>PostgreSQL: <?=$pgDeleteResult?></p>
			</div>
		</div>
	</div>
</body>
</html>
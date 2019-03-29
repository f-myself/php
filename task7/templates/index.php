<html>
<head>
	<link rel="stylesheet" href="css/main.css">
	<title>%TITLE%</title>
</head>
<body>
<div><h2>Contact Form</h2></div>
<div>
<form method="POST" action="">
	<label>
		<span>Name:</span>
		<input class="form-field" type="text" name="name" placeholder="Name" value="%NAME%">
	</label>
	<label>
		<span>E-mail:</span>
		<input class="form-field" type="email" name="email" placeholder="E-mail" value="%EMAIL%">
	</label>
	<label>
		<span>Subject:</span>
		<select name="subject">
			<option value="" selected disabled>Please, select subject</option>
			<option>Problems with switching</option>
			<option>Problems with brain</option>
		</select>
	</label>
	<label>
		<span>Subject:</span>
		<textarea name="text" placeholder="Enter text">%TEXT%</textarea>
	</label>
	<button type="submit">Send Message</button>
</form>
</div>
<div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div>
</body>
</html>

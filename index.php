<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CSV to HTML Table</title>
</head>
<body>
	<h1>CSV to HTML Table</h1>
	<form action="result.php" method="GET">
		<label for="url">URL</label><input type="text" size="100" name="url" /><br />
		<label for="hasHeader">Has Header?</label>
		<input type="checkbox" name="hasHeader" /><br />
		<label for="pretty">Pretty View?</label><input type="checkbox" name="pretty" />
		<input type="submit" />
	</form>
</body>
</html>
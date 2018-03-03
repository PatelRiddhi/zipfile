<html>
<body>
<form action="zip.php" name="zips" method="post">

	<input type="checkbox" name="files[]" value="1.jpg" />
	<img src="1.jpg" height="100" width="100"/>

	<input type="checkbox" name="files[]" value="2.jpg" />
	<img src="2.jpg" height="100" width="100"/>

	<input type="checkbox" name="files[]" value="3.jpg" />
	<img src="3.jpg"  height="100" width="100" />
	........
	<input type="text" name="filename" placeholder="Enter your Zipped file name...">
	<input type="submit" name="createpdf" value="Download as ZIP" />&nbsp;
	<input type="reset" name="reset"  value="Reset" />
</form>
</body>
</html>
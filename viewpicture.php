<html>
<head>
	<link rel="stylesheet" type="text/css" href="core.css" />
</head>	
<body>
	<div class="banner">
	    <h2><a href="index.php">Index</a></h2>
	</div>

	<div class="mainContent">
		<h1>View Picture</h1>
		<br />

		<form action="viewpicture.php" method="get">
			Email Address: <input type="text" name="email"><br />
			<input type="submit" value="Email Pic">
		</form> 	

		<table border="">

		<tr>
		<td>Prev</td>
		<td><img src="abc.jpg" /></td>
		<td>Next</td>
		</tr>

		</table>
		<br />
	
		<table>
			<tr><th>Comments</th></tr>
			<tr><td> First! </td></tr>
			<tr><td> 	<form action="viewpicture.php" method="get">
						Reply: <input type="text" name="comment"><br />
						<input type="submit" value="Add Comment">
					</form>  
			</td></tr>
		</table>
	</div>
</body>
</html>

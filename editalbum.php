<html>
<head>
	<link rel="stylesheet" type="text/css" href="core.css" />
</head>	
<body>
	<div class="banner">
	    <h2><a href="index.php">Index</a></h2>
	</div>

	<div class="mainContent">
		<h1>Edit Album</h1>
		<h2>Album Name Here</h2>
		<br />

		<form action="editalbum.php" method="get">
			<select name="access">
			  <option value="public">Public</option>
			  <option value="private">Private</option>
			</select> 
			<input type="submit" value="Submit">
		</form> 

		<form action="editalbum.php" method="get">
			Image URL: <input type="text" name="url"><br />
			<input type="submit" value="Submit">
		</form> 
	
		<table border="">

		<tr>
		<td>picLink1 <br /> [<a>Delete</a>]</td>
		<td>picLink2 <br /> [<a>Delete</a>]</td>
		<td>picLink3 <br /> [<a>Delete</a>]</td>
		</tr>

		<tr>
		<td>picLink4 <br /> [<a>Delete</a>]</td>
		<td>picLink5 <br /> [<a>Delete</a>]</td>
		<td>picLink6 <br /> [<a>Delete</a>]</td>
		</tr>

		<tr>
		<td>picLink7 <br /> [<a>Delete</a>]</td>
		<td>picLink8 <br /> [<a>Delete</a>]</td>
		<td>picLink9 <br /> [<a>Delete</a>]</td>
		</tr>

		</table>
	</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet"/>

	<title>Mad Libs</title>
</head>

<body>
	<form action="madlibs.php" method="post">
		Noun:<input type="text" name="noun"/> <br/>
		Verb:<input type="text" name="verb"/> <br/>
		Adjective:<input type="text" name="adj"/> <br/>
		<input type="submit" value="submit" name="submit_btn"/>
	</form>
	<br/>
	<?php
	if (isset($_POST['submit_btn'])) {
		$noun = $_POST['noun'];
		$verb = $_POST['verb'];
		$adj = $_POST['adj'];
		if (!empty($_POST['noun'])) {
			$noun = $_POST['noun'];
		} else {
			echo "<h3 style='color: red'>Please Choose a Noun!</h3>";
		}
		if (!empty($_POST['verb'])) {
			$verb = $_POST['verb'];
		} else {
			echo "<h3 style='color: red'>Please Choose a Verb!</h3>";
		}

		if (!empty($_POST['adj'])) {
			$adj = $_POST['adj'];
		} else {
			echo
				"<h3 style='color: red'>Please Choose an Adjective!</h3>";
		}
		echo "There is a $noun <br/>";
		echo "Who $verb everyday <br/>";
		echo "This $noun is not $adj, this $noun is very $adj <br/>";
		echo "The next day, the $noun $verb again<br/>";
		/*add a clear button search how to clear a form*/
	}
	?>
</body>

</html>
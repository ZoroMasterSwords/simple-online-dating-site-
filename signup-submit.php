<?php
	/* Mengyuan Huang
	CSE154 AJ HW4
	This is a submit page after new user signed up.*/ 
	include("common.php"); /* This will use the code from common.php */
	$newUser = $_POST["user"].",".$_POST["gender"].",".$_POST["age"].",".$_POST["type"].
				",".$_POST["favoriteos"].",".$_POST["min"].",".$_POST["max"] ; 
	file_put_contents("singles.txt", $newUser, FILE_APPEND ); /* this will write the sign-in information in singles.txt*/ ?>
		<p> <strong>Thank you!</strong></p>
		<p>Welcome to Nerdluv, <?= $_POST["user"] ?>!</p>
		<p>	Now <a href="matches.php"> log in to see your matches!</a></p>
<?php commonBottom(); /*This will use code from common.php*/ ?>
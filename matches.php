<?php
	/* Mengyuan Huang
	CSE154 AJ HW4
	This is a page for user to log in.*/
	include("common.php"); /*This will use code from common.php*/
?>		
		<form action="matches-submit.php"><!-- This is a form for user to log in.-->
			<div>
				<fieldset>
					<legend>Returning User:</legend>
					<strong>Name:</strong><input type="text" name="name" size="16" />
					<input type="submit" value="View My Matches" />
				</fieldset>
			</div>
		</form>

<?php commonBottom(); /* This will use code from common.php */ ?>
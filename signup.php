<?php 	
	/* Mengyuan Huang
	CSE154 AJ HW4
	This is a page for user to sign in.*/  
	include("common.php"); /*This will use code from common.php */
?>		
		<form action="signup-submit.php" method="post"> <!--This is a form for new user to sign up -->
			<div>
				<fieldset>
					<legend>New User Signup:</legend>
				
					<div>
					<strong>Name:</strong> <input type="text" name="user" size="16" /> <br />
					</div>
				
					<div>
					<strong>Gender:</strong> <label><input type="radio" name="gender" value="M" /> Male</label>
							<label><input type="radio" name="gender" value="F" checked="checked" /> Female </label><br />
					</div>
				
					<div>
					<strong>Age:</strong> <input type="text" size="6" name="age" maxlength="2" /> <br />
					</div>
				
					<div>
					<strong>Personality type:</strong> <input type="text" name="type" size="6" maxlength="4" />  (<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>) <br />
					</div>
				
					<div>
					<strong>Favorite OS:</strong> 
					<select name="favoriteos">
						<option selected="selected">Windows</option>
						<option>Mac OS X</option>
						<option>Linux</option>
					</select> <br />
					</div>
				
					<div>
						<strong>Seeking age:</strong><input type="text" name="min" size="6" maxlength="2" placeholder="min" /> to 
						<input type="text" name="max" size="6" maxlength="2" placeholder="max" /><br />
					</div>
					
					<div>
						<input type="submit" value="Sign Up" />
					</div>
				
				</fieldset>
			</div>
		</form>
<?php commonBottom(); /*This will use code from common.php*/ ?>
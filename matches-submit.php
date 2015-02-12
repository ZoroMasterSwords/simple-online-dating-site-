<?php
	/* Mengyuan Huang
	CSE154 AJ HW4
	This is the submit page and it will display mathces' information.*/

 include("common.php"); /* This function will use code from common.php for the header. */
	  $name = $_GET["name"];
	  $lines = file("singles.txt");
	  foreach($lines as $line){ /* This will retrive the information of the user from singles.txt */
	  	$userArray = explode(",", $line);
	  	if(strcmp($userArray[0], $name)==0){
	  		$user=$userArray;
	  	}
	  }
	  /* This function will find and return the matches as an Array from singles.txt according to user's information. */
	  function compare($user, $userArray) { 
	  	for($i = 0; $i < 4; $i++){
	  		if(strcmp(substr($user[3], $i, 1), substr($userArray[3], $i, 1)) == 0) {
				if($userArray[5] < $user[2] && $userArray[6] > $user[2]) {
					return $userArray;
				}
	  		}
	  	}
	  	return null;
	  } ?>
		<h1>Matches for <?= $name ?></h1>
	  <?php 	
	   /*This loop will check through singles.txt to find the matches and display the matches' information. */  
		foreach($lines as $line){
	  	$userArray = explode(",", $line);
	  	if(strcmp($userArray[1], $user[1])!=0 && strcmp($userArray[4], $user[4])==0 && $userArray[2] < $user[6] && $userArray[2] > $user[5]){ 
	  		$matchArray = compare($user, $userArray);
	  		if($matchArray != null) { ?>	 
	  	<div class="match">
			<p><?= $matchArray[0]?>
	  	    <img src="https://webster.cs.washington.edu/images/nerdluv/user.jpg" alt="icon" /></p>
	  	  	<ul>
	  			<li><strong>gender:</strong><?= $matchArray[1] ?></li>
	  			<li><strong>age:</strong><?= $matchArray[2] ?></li>
	  			<li><strong>type:</strong><?= $matchArray[3] ?></li>
	  			<li><strong>OS:</strong><?= $matchArray[4] ?></li>
	  		</ul>
	  	</div>
	 <?php }
		}
	  } ?>

<?php commonBottom(); //This will use the code from common.php ?>
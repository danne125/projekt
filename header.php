<?php 

session_start(); 



echo '<!DOCTYPE html>	


<html> 

	<head>
		<meta charset="UTF-8">
		 <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
		<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		<script src="javascript/dragging.js"></script>
		<link rel="stylesheet" type="text/css" href="css/stilmall.css" /> 
		<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
	</head> 

	
	<body> 
	<div id="wrapper">
	<header>	
		<div id="headspace"> 
			<div id="headspacecontent">
		 		<h1> Logga </h1>
		 		<nav> 
		 			<ul> 
		 				<li><a href="#"> Hem </a></li>
		 				<li><a href="#"> Logga in</a> </li>
					</ul>
				
				</nav>
		 	</div>
		 </div>	
	 
	 <div id="top">';
											

	$correctu = "admin";
	$correctp = "username";
	
	
	if(isset($_POST["namn"]) == $correctu && isset($_POST["losen"]) == $correctp) {
		
		$_SESSION['logged_in'] = True;
		
	}
	
	if (isset($_POST['logga_ut'])) {
					// går även att skriva $sessionen = False; 
					
					unset($_SESSION['logged_in']); 
					
			}
	
	
	if(isset($_SESSION['logged_in'])) {
		echo "<form method='POST' name='form2' action='index.php'>
			<input type='submit' name='logga_ut' value='logga ut' style='float:right;'>
			</form>"; 	 
		 
	}
	
	else {
		
	?>
			
	<form method="POST" name="form1" id="form1" action="index.php"">
			Namn : <input type="text" name="namn" value="användarnamn" id="namn" class="varde"> <em> *</em> <br>
			Lösen : <input type="password" name="losen" value="lösenord" id="losen" class="varde"> <em> *</em> <br>  <br>
			<input type="submit" name="logga_in" value="logga in" >
	</form> 
	
	<?php } ?>

</div>

</header>
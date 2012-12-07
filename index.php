<?php 


require_once('connect.php');
require_once('header.php');


/* testutskrift, prepare statements kommer senare..  */
$spelarquery = $database->query("SELECT name, descriptions FROM players");


$spelare = $spelarquery->fetchAll(PDO::FETCH_ASSOC);



?>



<!--  Content area --> 
<?php if(!isset($_SESSION['logged_in'])) { 
					
					include('pages/start.php'); 
					
				}
					
				?>


				<div id="content">
					
				<!-- om man inte är inloggad, vad ska visas? -->		
					
				
				
				<!-- meny som visas när man är inloggad -->				

				
				<?php if(isset($_SESSION['logged_in'])) { 	
								 
							
							$menuitems = array('kommande', 'trupp', 'traning', 'kalender');
							
							echo '<ul class="inloggadnav">';
	
							foreach ($menuitems as $arrayen => $value) {
								echo "<li><a href='?p=$value'>" . $value . "</a></li>"; 
								
							}
							
							echo '</ul>';
							
				/* meny slut */				
							
				}
				
				?>
				
				
				
				
				
						
				<!-- om man är inloggad, vad ska visas? -->		
						
					<?php if(isset($_SESSION['logged_in'])) {	
					echo '<div class="container"> <div class="containercontent">'; 	
								
							$pages_dir = 'pages'; 
						
							if(!empty($_GET['p'])){
								
								$pages = scandir($pages_dir, 0); 
								
								unset($pages[0], $pages[1]);
								$p = $_GET['p'];
								
								if (in_array($p . '.php', $pages)) {
									include($pages_dir .'/'. $p . '.php');
								}
								else {
									echo 'Sidan existerar inte!'; 
								}
								
							}
							else {
								/* sätt default sida man kommer till när man loggat in*/
								include($pages_dir.'/kommande.php');
							} 
							
						
				/* slut */
						
						
					 } ?>	
						
						
					</div>
				  </div>	
				</div>	
				

<?php 

	require_once('footer.php');

?>

		<div id="fb-root"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '394567147294064', // App ID
      channelUrl : '//WWW.deguwe.byethost7.com/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional init code here
FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
        // connected
    } else if (response.status === 'not_authorized') {
        // not_authorized
        login();
    } else {
        // not_logged_in
        login();
    }
});
};
  


function login() {
    FB.login(function(response) {
        if (response.authResponse) {
            // connected
                            testAPI();
        } else {
            // cancelled
        }
    });
}

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        console.log('Good to see you, ' + response.name + '.');
    });
}

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>

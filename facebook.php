<?php
	
	$test = "693920825";
	$adress = '"<img src="https://graph.facebook.com/';
	$fulladress = '<img src="https://graph.facebook.com/deguwe/picture"/>';
	$type = '/picture"/>"';
	
	echo '<img src="https://graph.facebook.com/deguwe/picture"/>';
	echo "Testar med variablar";
	echo $adress . $test. $type;
	echo $fulladress . $test;
	
	$adress = 'https://graph.facebook.com/';
	$type = '/name';
	echo "</br>" . $adress . $test. $type;
	echo "</br>" . "https://graph.facebook.com/me?fields=id,name";
	//<img src="https://graph.facebook.com/deguwe/picture"/>
	
?>


<div id="fb-root"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '394567147294064', // App ID
      channelUrl : '/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional init code here
	FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
        // connected
        testAPI();
    } else if (response.status === 'not_authorized') {
        // not_authorized
        login();
    } else {
        // not_logged_in
        login();
    }
}
);
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






<!--('<img src="https://graph.facebook.com/"$test"/picture" />')

https://graph.facebook.com/deguwe?fields=id,name,picture -->
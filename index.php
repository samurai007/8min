<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>8 Min App for mix news on Facebook</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:url"                content="http://manishbisht.github.io/8-Min/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="8 Min App for Mix News on Facebook" />
<meta property="og:description"        content="Designed, Developed and Maintained by Manish Bisht" />
<meta property="og:image"              content="http://manishbisht.github.io/8-Min/images/logo-large.jpg" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/design.css" rel="stylesheet">
<link rel="icon" 
      type="image/jpg"
      href="images/logo.jpg"
      sizes="16x16">
</head>

<body style="margin-top:20px;">
<div class="container">
   <center>
   <div class="col-md-12">
      <img src="images/logo-large.jpg">
   </div>
   <div class="col-md-12">
      <h1>8 Min App for Mix News on Facebook</h1>
   </div>
   <div class="col-md-12">
      <div id="Login">
      <fb:login-button scope="public_profile,publish_actions" onlogin="checkLoginState();">
      </fb:login-button>
      </div>
	  
<h3> Write a welcome message to post on facebook with our website link<br><INPUT type="text" placeholder=" Your Message " id="bahaa" value="" class="input" > <br><br>
<div class="bg-primary btn-lg" style="max-width:400px;" onClick="post();">Post to Facebook</div> <br>


      <div id="status">
      </div>
   </div>
   <div class="col-md-12 footer">
      <h4>&copy;2016 | <a href="Privacy Policy.html">Privacy Policy</a></h4>
   </div>
   </center>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.plugin.html2canvas.js"></script>
<script src="js/html2canvas.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>


<script>
function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
      testAPI();
    } else if (response.status === 'not_authorized') {
      document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
    } else {
      document.getElementById('status').innerHTML = 'Please log ' + 'into Facebook.';
    }
  }
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1696663380548542',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use version 2.2
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  function testAPI() {
console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + ' !!';
	  document.getElementById('Login').style.display="none";
    });
   FB.api('/me/feed', 'post', { link: "" }, function(response) {
  if (!response || response.error) {
    alert('Thanks for logging in');
  } else {
    alert('Thanks for logging in');
  }
});
}


function post()
{
    var bahaa = document.getElementById('bahaa').value;
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + ' !!';
	  document.getElementById('Login').style.display="none";
    });
   FB.api('/me/feed', 'post', { message: ''+bahaa+'' , link: 'Your Link' }, function(response) {
  if (!response || response.error) {
    alert('Error occured');
  } else {
    alert('Post ID: ' + response.id);
  }
});
}
</script>


</html>
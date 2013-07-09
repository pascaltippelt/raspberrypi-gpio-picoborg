<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();

      $username = $_POST['username'];
      $passwort = $_POST['passwort'];

      $hostname = $_SERVER['HTTP_HOST'];
      $path = dirname($_SERVER['PHP_SELF']);

      // Benutzername und Passwort werden überprüft
      if ($username == 'gpio' && $passwort == 'gpio') {
       $_SESSION['angemeldet'] = true;

       // Weiterleitung zur geschützten Startseite
       if ($_SERVER['SERVER_PROTOCOL'] == 'HTTP/1.1') {
        if (php_sapi_name() == 'cgi') {
         header('Status: 303 See Other');
         }
        else {
         header('HTTP/1.1 303 See Other');
         }
        }

       header('Location: http://'.$hostname.($path == '/' ? '' : $path).'/index.php');
       exit;
       }
      }
?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Raspberry Pi GPIO - Login</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="mobil.css" rel="stylesheet" type="text/css">

<script src="respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix" align="center">
	<div align="center"><h1>Raspberry Pi GPIO - Login</h1>
    </div>
  <div align="center">
  <form action="login.php" method="post">
    <p>Username:&nbsp;<input type="text" name="username" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
      Password:&nbsp;&nbsp;<input type="password" name="passwort" />&nbsp;
      <input type="submit" value="Login" />
    </p>
    <p>&nbsp;</p>
  </form>
  </div>
</div>
</body>
</html>

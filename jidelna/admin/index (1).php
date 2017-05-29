 <?php
session_start();

 /********Přihláení*******/
if (!empty ($_POST['submit'])){
$jmeno= $_POST["jmeno"];
$heslo= $_POST["heslo"];
if($jmeno=="admin" AND $heslo=="heslo")
{
if(!isset($jmeno))
 {
 $jmeno = "host";
 }
$_SESSION['admin'] = $jmeno;
 }
else 
 {
 echo "<center><b>Nesprávné jméno či heslo" ;
 
 }}     
  if (isset($_SESSION['admin'])):   ?>  
  <html>
<head>
<title>kolní jídelna - Gymnázium U Balvanu</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso-8859-2">
<meta name="author" content="těpán Picek">
<link rel="stylesheet" type="text/css" href="style.css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body> 
 
<div id="hlavicka">
<div id="hlava">
<div id="menu">  
<?php require "menu.php"; ?>
</div> 
<div id="logo">
<a href="index.php" ><img src="../obrazky/logo.png"></a>     
</div>  </div> </div>
<div id="prihlas"> <?  echo "Vítejte ADMINE! ";  ?>
Pro odhláení klikněte zde:<a href="index.php?p=odhlasit" > ODHLÁSIT</a>

</div>
<div id="stred">
 <?php
          $p=$_GET['p'];
					if($p==''){
					   $p='zmena';
					}
					if (file_exists($p.'.php')) {
					   require $p.'.php';
					} else {
					   require 'nenalezeno.php';
					}
            	?>
</div>

 </div> 

</body>

</html>
 <?else:?> 
  <html>
<head>
<title>kolní jídelna - Gymnázium U Balvanu</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso-8859-2">
<meta name="author" content="těpán Picek">
<link rel="stylesheet" type="text/css" href="admin.css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body> 
<div id="hlavicka">
<a href="index.php" ><img src="../obrazky/logo.png"></a>
</div>
<div id="stred">
<div id="formular">
Administrátor <img src="../obrazky/panak.png">
<form method="post" action="">
  <fieldset class="form">
  <label>
    <input type="text" name="jmeno" placeholder="uivatelské jméno">
    </label>
    <label>
     <input type="password" name="heslo" placeholder="heslo">
    </label></fieldset>
    <fieldset class="tlac">
    <input class="tlacitko" type="submit" name="submit" value="Přihlásit">
    </fieldset>
    </form> 
    
    </div>  </div>
    
    </body>
    </html>  
    <?endif?>  
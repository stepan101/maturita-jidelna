<?php session_start(); $jmeno = $_SESSION['username'];?>
<a href="index.php?p=nabidka" > NAB�DKA OB�D�</a>|<a href="index.php?p=napoveda" >N�POV�DA</a>|<a href="index.php?p=kontakt" > NAPI�TE N�M</a>
<?php $celejmeno = mysql_query("SELECT jmeno, prijmeni, rocnik FROM uzivatele WHERE login= '".$_SESSION['username']."'", $link);
$row = mysql_fetch_array($celejmeno);?> 
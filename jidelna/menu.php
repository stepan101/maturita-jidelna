<?php session_start(); $jmeno = $_SESSION['username'];?>
<a href="index.php?p=nabidka" > NABÍDKA OBÌDÙ</a>|<a href="index.php?p=napoveda" >NÁPOVÌDA</a>|<a href="index.php?p=kontakt" > NAPIŠTE NÁM</a>
<?php $celejmeno = mysql_query("SELECT jmeno, prijmeni, rocnik FROM uzivatele WHERE login= '".$_SESSION['username']."'", $link);
$row = mysql_fetch_array($celejmeno);?> 
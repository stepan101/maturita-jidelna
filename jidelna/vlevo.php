<?php 
$celejmeno = mysql_query("SELECT jmeno, prijmeni, rocnik FROM uzivatele WHERE login= '".$_SESSION['username']."'", $link);
$row = mysql_fetch_array($celejmeno);
session_start(); $jmeno = $_SESSION['username'];?>
Vítejte na stránce školní jídelny!
<br>
Tato webová stránka slouží k odhlašování a
zmìnì obìdù. 
<br>
Na pravé stranì se pøihlašte a vybírejte obìdy 
podle svého úvážení. 
<br>Vaše uživatelské jméno 
a heslo jste dostali na poèátku roku ve školní
jídelnì. 
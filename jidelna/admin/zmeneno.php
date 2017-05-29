<?php
//pondìlí
$podatum = $_POST["podatum"];
$popolevka = $_POST["popolevka"];
$po1 = $_POST["po1"];
$po2 = $_POST["po2"];
//úterý
$utdatum = $_POST["utdatum"];
$utpolevka = $_POST["utpolevka"];
$ut1 = $_POST["ut1"];
$ut2 = $_POST["ut2"];
//støeda
$stdatum = $_POST["stdatum"];
$stpolevka = $_POST["stpolevka"];
$st1 = $_POST["st1"];
$st2 = $_POST["st2"];
//ètvrtek
$ctdatum = $_POST["ctdatum"];
$ctpolevka = $_POST["ctpolevka"];
$ct1 = $_POST["ct1"];
$ct2 = $_POST["ct2"];
//pátek
$padatum = $_POST["padatum"];
$papolevka = $_POST["papolevka"];
$pa1 = $_POST["pa1"];
$pa2 = $_POST["pa2"];

$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);

//vložení do databáze
mysql_query("UPDATE obedy SET datum='$podatum', polevka='$popolevka', jedna='$po1', dva='$po2' WHERE id='1'", $link);
mysql_query("UPDATE obedy SET datum='$utdatum', polevka='$utpolevka', jedna='$ut1', dva='$ut2' WHERE id='2'", $link);
mysql_query("UPDATE obedy SET datum='$stdatum', polevka='$stpolevka', jedna='$st1', dva='$st2' WHERE id='3'", $link);
mysql_query("UPDATE obedy SET datum='$ctdatum', polevka='$ctpolevka', jedna='$ct1', dva='$ct2' WHERE id='4'", $link);
mysql_query("UPDATE obedy SET datum='$padatum', polevka='$papolevka', jedna='$pa1', dva='$pa2' WHERE id='5'", $link);

?>
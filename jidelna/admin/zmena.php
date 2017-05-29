<?php if (!empty ($_POST['odeslat'])){
//pondìlí
$podatum = $_POST["podatum"];
$popolevka = $_POST["popolevka"];
$po1 = $_POST["po1"];
$po2 = $_POST["po2"];
$poj = $_POST["poj"];
//úterý
$utdatum = $_POST["utdatum"];
$utpolevka = $_POST["utpolevka"];
$ut1 = $_POST["ut1"];
$ut2 = $_POST["ut2"];
$utj = $_POST["utj"];
//støeda
$stdatum = $_POST["stdatum"];
$stpolevka = $_POST["stpolevka"];
$st1 = $_POST["st1"];
$st2 = $_POST["st2"];
$stj = $_POST["stj"];
//ètvrtek
$ctdatum = $_POST["ctdatum"];
$ctpolevka = $_POST["ctpolevka"];
$ct1 = $_POST["ct1"];
$ct2 = $_POST["ct2"];
$ctj = $_POST["ctj"];
//pátek
$padatum = $_POST["padatum"];
$papolevka = $_POST["papolevka"];
$pa1 = $_POST["pa1"];
$pa2 = $_POST["pa2"]; 
$paj = $_POST["paj"];

$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);

//vložení do databáze
mysql_query("UPDATE obedy SET datum='$podatum', polevka='$popolevka', jedna='$po1', dva='$po2', jine='$poj' WHERE id='1'", $link);
mysql_query("UPDATE obedy SET datum='$utdatum', polevka='$utpolevka', jedna='$ut1', dva='$ut2', jine='$utj' WHERE id='2'", $link);
mysql_query("UPDATE obedy SET datum='$stdatum', polevka='$stpolevka', jedna='$st1', dva='$st2', jine='$stj' WHERE id='3'", $link);
mysql_query("UPDATE obedy SET datum='$ctdatum', polevka='$ctpolevka', jedna='$ct1', dva='$ct2', jine='$ctj' WHERE id='4'", $link);
mysql_query("UPDATE obedy SET datum='$padatum', polevka='$papolevka', jedna='$pa1', dva='$pa2', jine='$paj' WHERE id='5'", $link);
echo "<center><b><font color='#29ABE2'>Data úspìšnì uložena do databáze!</font></center>";
 } 
$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);

$pondeli = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '1'", $link);
$po = mysql_fetch_array($pondeli);

$utery = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '2'", $link);
$ut = mysql_fetch_array($utery);

$streda = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '3'", $link);
$st = mysql_fetch_array($streda);

$ctvrtek = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '4'", $link);
$ct = mysql_fetch_array($ctvrtek);

$patek = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '5'", $link);
$pt = mysql_fetch_array($patek);

?> <h3>Zmìna obìdù</h3>
<form method="post" action="" >    
<table style="table-layout: fixed; border-collapse: collapse;" >
<tr><th>Pondìlí</th><td> <input class="datum" type="text" name="podatum" placeholder="datum" value="<? echo "{$po['datum']}";?>"></td></tr>
<tr><td>Polévka:</td><td> <input type="text" name="popolevka" placeholder="Polévka" value="<? echo "{$po['polevka']}";?>"></td></tr>
<tr><td class="td">1.</td><td> <input type="text" name="po1" placeholder="Obìd è. 1" value="<? echo "{$po['jedna']}";?>"></td></tr> 
<tr><td class="td">2. </td><td><input type="text" name="po2" placeholder="Obìd è. 2" value="<? echo "{$po['dva']}";?>"></td></tr> 
<tr><td class="td">ostatní:</td><td> <input type="text" name="poj" placeholder="ostatní" value="<? echo "{$po['jine']}";?>"> </td></tr>
<tr><th>Úterý </th><td> <input class="datum" type="text" name="utdatum" placeholder="datum" value="<? echo "{$ut['datum']}";?>"></td></tr>
<tr><td>Polévka:</td><td> <input type="text" name="utpolevka" placeholder="Polévka" value="<? echo "{$ut['polevka']}";?>"></td></tr>
<tr><td class="td">1.</td><td> <input type="text" name="ut1" placeholder="Obìd è. 1" value="<? echo "{$ut['jedna']}";?>"> </td></tr> 
<tr><td class="td">2.</td><td> <input type="text" name="ut2" placeholder="Obìd è. 2" value="<? echo "{$ut['dva']}";?>"></td></tr>
<tr><td class="td">ostatní:</td><td> <input type="text" name="utj" placeholder="ostatní" value="<? echo "{$ut['jine']}";?>"> </td></tr>
<tr><th>Støeda</th><td>  <input class="datum" type="text" name="stdatum" placeholder="datum" value="<? echo "{$st['datum']}";?>"></td></tr>
<tr><td>Polévka:</td><td>  <input type="text" name="stpolevka" placeholder="Polévka" value="<? echo "{$st['polevka']}";?>"></td></tr> 
<tr><td class="td">1.</td><td> <input type="text" name="st1" placeholder="Obìd è. 1" value="<? echo "{$st['jedna']}";?>"></td></tr> 
<tr><td class="td">2.</td><td> <input type="text" name="st2" placeholder="Obìd è. 2" value="<? echo "{$st['dva']}";?>"></td></tr>
<tr><td class="td">ostatní:</td><td> <input type="text" name="stj" placeholder="ostatní" value="<? echo "{$st['jine']}";?>"> </td></tr>
<tr><th>Ètvrtek</th><td>  <input class="datum" type="text" name="ctdatum" placeholder="datum" value="<? echo "{$ct['datum']}";?>"></td></tr>
<tr><td>Polévka:</td><td> <input type="text" name="ctpolevka" placeholder="Polévka" value="<? echo "{$ct['polevka']}";?>"></td></tr> 
<tr><td class="td">1.</td><td> <input type="text" name="ct1" placeholder="Obìd è. 1" value="<? echo "{$ct['jedna']}";?>"></td></tr>  
<tr><td class="td">2.</td><td> <input type="text" name="ct2" placeholder="Obìd è. 2" value="<? echo "{$ct['dva']}";?>"></td></tr> 
<tr><td class="td">ostatní:</td><td> <input type="text" name="ctj" placeholder="ostatní" value="<? echo "{$ct['jine']}";?>"> </td></tr>
<tr><th>Pátek </th><td> <input class="datum" type="text" name="padatum" placeholder="datum" value="<? echo "{$pt['datum']}";?>"></td></tr>
<tr><td>Polévka: </td><td><input type="text" name="papolevka" placeholder="Polévka" value="<? echo "{$pt['polevka']}";?>"></td></tr> 
<tr><td class="td">1.</td><td> <input type="text" name="pa1" placeholder="Obìd è. 1" value="<? echo "{$pt['jedna']}";?>"> </td></tr>  
<tr><td class="td">2.</td><td> <input type="text" name="pa2" placeholder="Obìd è. 2" value="<? echo "{$pt['dva']}";?>"> </td></tr>
<tr><td class="td">ostatní:</td><td>  <input type="text" name="paj" placeholder="ostatní" value="<? echo "{$pt['jine']}";?>"> </td></tr>
     
</table>

<input class="tlacitko" type="submit" name="odeslat" value="Odeslat">
 
</form>
 
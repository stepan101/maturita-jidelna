<?php if (!empty ($_POST['odeslat'])){
//pond�l�
$podatum = $_POST["podatum"];
$popolevka = $_POST["popolevka"];
$po1 = $_POST["po1"];
$po2 = $_POST["po2"];
$poj = $_POST["poj"];
//�ter�
$utdatum = $_POST["utdatum"];
$utpolevka = $_POST["utpolevka"];
$ut1 = $_POST["ut1"];
$ut2 = $_POST["ut2"];
$utj = $_POST["utj"];
//st�eda
$stdatum = $_POST["stdatum"];
$stpolevka = $_POST["stpolevka"];
$st1 = $_POST["st1"];
$st2 = $_POST["st2"];
$stj = $_POST["stj"];
//�tvrtek
$ctdatum = $_POST["ctdatum"];
$ctpolevka = $_POST["ctpolevka"];
$ct1 = $_POST["ct1"];
$ct2 = $_POST["ct2"];
$ctj = $_POST["ctj"];
//p�tek
$padatum = $_POST["padatum"];
$papolevka = $_POST["papolevka"];
$pa1 = $_POST["pa1"];
$pa2 = $_POST["pa2"]; 
$paj = $_POST["paj"];

$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);

//vlo�en� do datab�ze
mysql_query("UPDATE obedy SET datum='$podatum', polevka='$popolevka', jedna='$po1', dva='$po2', jine='$poj' WHERE id='1'", $link);
mysql_query("UPDATE obedy SET datum='$utdatum', polevka='$utpolevka', jedna='$ut1', dva='$ut2', jine='$utj' WHERE id='2'", $link);
mysql_query("UPDATE obedy SET datum='$stdatum', polevka='$stpolevka', jedna='$st1', dva='$st2', jine='$stj' WHERE id='3'", $link);
mysql_query("UPDATE obedy SET datum='$ctdatum', polevka='$ctpolevka', jedna='$ct1', dva='$ct2', jine='$ctj' WHERE id='4'", $link);
mysql_query("UPDATE obedy SET datum='$padatum', polevka='$papolevka', jedna='$pa1', dva='$pa2', jine='$paj' WHERE id='5'", $link);
echo "<center><b><font color='#29ABE2'>Data �sp�n� ulo�ena do datab�ze!</font></center>";
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

?> <h3>Zm�na ob�d�</h3>
<form method="post" action="" >    
<table style="table-layout: fixed; border-collapse: collapse;" >
<tr><th>Pond�l�</th><td> <input class="datum" type="text" name="podatum" placeholder="datum" value="<? echo "{$po['datum']}";?>"></td></tr>
<tr><td>Pol�vka:</td><td> <input type="text" name="popolevka" placeholder="Pol�vka" value="<? echo "{$po['polevka']}";?>"></td></tr>
<tr><td class="td">1.</td><td> <input type="text" name="po1" placeholder="Ob�d �. 1" value="<? echo "{$po['jedna']}";?>"></td></tr> 
<tr><td class="td">2. </td><td><input type="text" name="po2" placeholder="Ob�d �. 2" value="<? echo "{$po['dva']}";?>"></td></tr> 
<tr><td class="td">ostatn�:</td><td> <input type="text" name="poj" placeholder="ostatn�" value="<? echo "{$po['jine']}";?>"> </td></tr>
<tr><th>�ter� </th><td> <input class="datum" type="text" name="utdatum" placeholder="datum" value="<? echo "{$ut['datum']}";?>"></td></tr>
<tr><td>Pol�vka:</td><td> <input type="text" name="utpolevka" placeholder="Pol�vka" value="<? echo "{$ut['polevka']}";?>"></td></tr>
<tr><td class="td">1.</td><td> <input type="text" name="ut1" placeholder="Ob�d �. 1" value="<? echo "{$ut['jedna']}";?>"> </td></tr> 
<tr><td class="td">2.</td><td> <input type="text" name="ut2" placeholder="Ob�d �. 2" value="<? echo "{$ut['dva']}";?>"></td></tr>
<tr><td class="td">ostatn�:</td><td> <input type="text" name="utj" placeholder="ostatn�" value="<? echo "{$ut['jine']}";?>"> </td></tr>
<tr><th>St�eda</th><td>  <input class="datum" type="text" name="stdatum" placeholder="datum" value="<? echo "{$st['datum']}";?>"></td></tr>
<tr><td>Pol�vka:</td><td>  <input type="text" name="stpolevka" placeholder="Pol�vka" value="<? echo "{$st['polevka']}";?>"></td></tr> 
<tr><td class="td">1.</td><td> <input type="text" name="st1" placeholder="Ob�d �. 1" value="<? echo "{$st['jedna']}";?>"></td></tr> 
<tr><td class="td">2.</td><td> <input type="text" name="st2" placeholder="Ob�d �. 2" value="<? echo "{$st['dva']}";?>"></td></tr>
<tr><td class="td">ostatn�:</td><td> <input type="text" name="stj" placeholder="ostatn�" value="<? echo "{$st['jine']}";?>"> </td></tr>
<tr><th>�tvrtek</th><td>  <input class="datum" type="text" name="ctdatum" placeholder="datum" value="<? echo "{$ct['datum']}";?>"></td></tr>
<tr><td>Pol�vka:</td><td> <input type="text" name="ctpolevka" placeholder="Pol�vka" value="<? echo "{$ct['polevka']}";?>"></td></tr> 
<tr><td class="td">1.</td><td> <input type="text" name="ct1" placeholder="Ob�d �. 1" value="<? echo "{$ct['jedna']}";?>"></td></tr>  
<tr><td class="td">2.</td><td> <input type="text" name="ct2" placeholder="Ob�d �. 2" value="<? echo "{$ct['dva']}";?>"></td></tr> 
<tr><td class="td">ostatn�:</td><td> <input type="text" name="ctj" placeholder="ostatn�" value="<? echo "{$ct['jine']}";?>"> </td></tr>
<tr><th>P�tek </th><td> <input class="datum" type="text" name="padatum" placeholder="datum" value="<? echo "{$pt['datum']}";?>"></td></tr>
<tr><td>Pol�vka: </td><td><input type="text" name="papolevka" placeholder="Pol�vka" value="<? echo "{$pt['polevka']}";?>"></td></tr> 
<tr><td class="td">1.</td><td> <input type="text" name="pa1" placeholder="Ob�d �. 1" value="<? echo "{$pt['jedna']}";?>"> </td></tr>  
<tr><td class="td">2.</td><td> <input type="text" name="pa2" placeholder="Ob�d �. 2" value="<? echo "{$pt['dva']}";?>"> </td></tr>
<tr><td class="td">ostatn�:</td><td>  <input type="text" name="paj" placeholder="ostatn�" value="<? echo "{$pt['jine']}";?>"> </td></tr>
     
</table>

<input class="tlacitko" type="submit" name="odeslat" value="Odeslat">
 
</form>
 
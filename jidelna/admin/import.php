<?php
if (!empty ($_POST['import'])){
if($_FILES['soubor']['size'] < 102400)
 {
 move_uploaded_file($_FILES['soubor']['tmp_name'],  "uzivatel/soubor.txt");
 echo "<h4>Data úspìšnì nahrána a uložena do databáze!</h4>";
 }
 else
 {
 echo "Soubor nesmí být vìtší než 100 kb ";
 }
 

$soubor1 = file('uzivatel/soubor.txt');
foreach($soubor1 AS $vypis)
 {
 $rozloz = explode(";", $vypis);
 
$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);
mysql_query( "INSERT INTO uzivatele (login, heslo, jmeno, prijmeni, rocnik) VALUES ('$rozloz[0]', '$rozloz[1]', '$rozloz[2]', '$rozloz[3]', '$rozloz[4]')", $link);
}} ?>


<h3> Vložit uživatele pomocí importu:</h3>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
  Vyberte soubor: <br /> 
  <input name="soubor" type="file" id="csv" /> 
  <input type="submit" class="odesl" name="import" value="Odeslat" /> 
</form> 

<?php 
if (!empty ($_POST['rucne'])){
$jmeno1=$_POST["jmeno"];
$prijmeni1=$_POST["prijmeni"];
$rocnik1=$_POST["rocnik"];
$login1=$_POST["login1"];
$heslo1=$_POST["heslo2"];
$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);
mysql_query( "INSERT INTO uzivatele (login, heslo, jmeno, prijmeni, rocnik) VALUES ('$login1', '$heslo1', '$jmeno1', '$prijmeni1', '$rocnik1')", $link);
echo "<h4>Data úspìšnì uložena do databáze!</h4>";}?>
<form action="" method="post"> 
<h3>Vložit uživatele ruènì: </h3>
  <input type="text" name="jmeno" placeholder="Jméno">
  <input type="text" name="prijmeni" placeholder="Pøíjmení">
  <input type="text" name="rocnik" placeholder="Roèník">
  <input type="text" name="login1" placeholder="login (petr.novak)">
  <input type="text" name="heslo2" placeholder="heslo"> <br>
  <input type="submit" class="odesl" name="rucne" value="Odeslat" /> 
</form> 
<?php 
$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);
$uzivatelevsichni = mysql_query("SELECT * FROM uzivatele", $link);
?>

<h3>Seznam uživatelù: </h3> <div style="width: 830px; height: 350px; overflow: auto">
<table style="table-layout: fixed; border-collapse: collapse;" width="800px" >
<tr><th width="130px">Jméno</th><th width="130px">Pøijmení</th><th width="70px">roèník</th><th>login</th><th width="90px">heslo</th></tr>    
<tr><?  while ($uz=MySQL_Fetch_Array($uzivatelevsichni)):
       echo "<td>".$uz["jmeno"]."</td><td>".$uz["prijmeni"]."</td><td>".$uz["rocnik"]."</td><td>".$uz["login"]."</td><td>".$uz["heslo"]."</td><td><form action='' method='post'><input type='hidden' name='smazat' value='".$uz["login"]."' /> <input type='submit' class='odes' name='uzi' value='Odstranit'/></form></td><tr>";
      endwhile;?>   
</table>
</div>
<?php if (!empty ($_POST['uzi']) ){
$smazat = $_POST['smazat'];
mysql_query("DELETE FROM uzivatele WHERE login = '$smazat'", $link);
echo "<meta http-equiv='refresh' content='0;'>";
} 
?>
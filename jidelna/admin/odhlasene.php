<?php $link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);

$dvpondeli = mysql_query("SELECT * FROM poodhlas", $link);
$pocet1=mysql_num_rows($dvpondeli);
$dvutery = mysql_query("SELECT * FROM utodhlas ", $link);
$pocet2=mysql_num_rows($dvutery);
$dvstreda = mysql_query("SELECT * FROM stodhlas ", $link);
$pocet3=mysql_num_rows($dvstreda);
$dvctvrtek = mysql_query("SELECT * FROM ctodhlas ", $link);
$pocet4=mysql_num_rows($dvctvrtek);
$dvpatek = mysql_query("SELECT * FROM paodhlas ", $link);
$pocet5=mysql_num_rows($dvpatek);
?>
<h3>Odhlášené obìdy</h3>
<table style="table-layout: fixed; border-collapse: collapse;" width="500px" >
<tr><th class="th">Pondìlí </th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"> <?   while ($podv=MySQL_Fetch_Array($dvpondeli)):
       echo $podv["jmeno"]." ".$podv["prijmeni"].",".$podv["rocnik"]."<BR>";
      endwhile;?> </div>
      <hr width="500px" size="1" color=#808080 align="center"> Celkový poèet: <? echo $pocet1 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="pon" value="Smazat pondìlí"></form> 
</td></tr>
<tr><th class="th">Úterý</th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"><? while ($utdv=MySQL_Fetch_Array($dvutery)):
       echo $utdv["jmeno"]." ".$utdv["prijmeni"].",".$utdv["rocnik"]."<br>";
      endwhile;?> </div> 
       <hr width="500px" size="1" color=#808080 align="center"> Celkový poèet: <? echo $pocet2 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="ut" value="Smazat úterý"></form> 
</td></tr>
<tr><th class="th">Støeda</th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"><?   while ($stdv=MySQL_Fetch_Array($dvstreda)):
       echo $stdv["jmeno"]." ".$stdv["prijmeni"].",".$stdv["rocnik"]."<BR>";
      endwhile;?>  </div>
       <hr width="500px" size="1" color=#808080 align="center"> Celkový poèet: <? echo $pocet3 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="st" value="Smazat støedu"></form> 
</tr></td>
<tr><th class="th">Ètvrtek</th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"><?   while ($ctdv=MySQL_Fetch_Array($dvctvrtek)):
       echo $ctdv["jmeno"]." ".$ctdv["prijmeni"].",".$ctdv["rocnik"]."<BR>";
      endwhile;?> </div>
       <hr width="500px" size="1" color=#808080 align="center"> Celkový poèet: <? echo $pocet4 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="ct" value="Smazat ètvrtek"></form> 
</td> </tr>                                           
<tr><th class="th">Pátek</th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"><?   while ($patdv=MySQL_Fetch_Array($dvpatek)):
       echo $patdv["jmeno"]." ".$patdv["prijmeni"].",".$patdv["rocnik"]."<BR>";
      endwhile;?> </div>
       <hr width="500px" size="1" color=#808080 align="center"> Celkový poèet: <? echo $pocet5 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="pa" value="Smazat pátek"></form> 
</td></tr> </table>       
 
<?php if (!empty ($_POST['pon']) ){

mysql_query("DELETE FROM poodhlas", $link);
echo "<meta http-equiv='refresh' content='0;'>";
} 
if (!empty ($_POST['ut']) ){

mysql_query("DELETE FROM utodhlas", $link);
echo "<meta http-equiv='refresh' content='0;'>";
} 
if (!empty ($_POST['st']) ){

mysql_query("DELETE FROM stodhlas", $link);
echo "<meta http-equiv='refresh' content='0;'>";

} 
if (!empty ($_POST['ct']) ){

mysql_query("DELETE FROM ctodhlas", $link);
echo "<meta http-equiv='refresh' content='0;'>";

} 
if (!empty ($_POST['pa']) ){

mysql_query("DELETE FROM paodhlas", $link);
echo "<meta http-equiv='refresh' content='0;'>";

} 

?>
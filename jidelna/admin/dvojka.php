<?php $link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);

$dvpondeli = mysql_query("SELECT * FROM dvapo", $link);
$pocet1=mysql_num_rows($dvpondeli);
$dvutery = mysql_query("SELECT * FROM dvaut ", $link);
$pocet2=mysql_num_rows($dvutery);
$dvstreda = mysql_query("SELECT * FROM dvast ", $link);
$pocet3=mysql_num_rows($dvstreda);
$dvctvrtek = mysql_query("SELECT * FROM dvact ", $link);
$pocet4=mysql_num_rows($dvctvrtek);
$dvpatek = mysql_query("SELECT * FROM dvapat ", $link);
$pocet5=mysql_num_rows($dvpatek);
?>
<h3>Ob�d �. 2</h3>
<table style="table-layout: fixed; border-collapse: collapse;" width="500px" >
<tr><th class="th">Pond�l� </th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"> <?   while ($podv=MySQL_Fetch_Array($dvpondeli)):
       echo $podv["jmeno"]." ".$podv["prijmeni"].",".$podv["rocnik"]."<BR>";
      endwhile;?></div> 
      <hr width="500px" size="1" color=#808080 align="center"> Celkov� po�et: <? echo $pocet1 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="podva" value="Smazat pond�l�"></form> 
</td></tr>
<tr><th class="th">�ter�</th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"><? while ($utdv=MySQL_Fetch_Array($dvutery)):
       echo $utdv["jmeno"]." ".$utdv["prijmeni"].",".$utdv["rocnik"]."<br>";
      endwhile;?> </div> 
       <hr width="500px" size="1" color=#808080 align="center"> Celkov� po�et: <? echo $pocet2 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="utdva" value="Smazat �ter�"></form><br> 
</td></tr>
<tr><th class="th">St�eda</th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"><?   while ($stdv=MySQL_Fetch_Array($dvstreda)):
       echo $stdv["jmeno"]." ".$stdv["prijmeni"].",".$stdv["rocnik"]."<BR>";
      endwhile;?> </div>
       <hr width="500px" size="1" color=#808080 align="center"> Celkov� po�et: <? echo $pocet3 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="stdva" value="Smazat st�edu"></form> 
</td></tr>
<tr><th class="th">�tvrtek</th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"><?   while ($ctdv=MySQL_Fetch_Array($dvctvrtek)):
       echo $ctdv["jmeno"]." ".$ctdv["prijmeni"].",".$ctdv["rocnik"]."<BR>";
      endwhile;?></div>
       <hr width="500px" size="1" color=#808080 align="center"> Celkov� po�et: <? echo $pocet4 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="ctdva" value="Smazat �tvrtek"></form> 
</td></tr>                                            
<tr><th class="th">P�tek</th></tr>
<tr><td><div style="width: 500px; max-height: 190px; overflow: auto"><?   while ($patdv=MySQL_Fetch_Array($dvpatek)):
       echo $patdv["jmeno"]." ".$patdv["prijmeni"].",".$patdv["rocnik"]."<BR>";
      endwhile;?> </div>
       <hr width="500px" size="1" color=#808080 align="center"> Celkov� po�et: <? echo $pocet5 ?>
      <form method="post" action=""><input type="submit"  class="odes"  name="ptdva" value="Smazat p�tek"></form> 
</td></tr> </table>       
 
<?php if (!empty ($_POST['podva']) ){

mysql_query("DELETE FROM dvapo", $link);
echo "<meta http-equiv='refresh' content='0;'>";
} 
if (!empty ($_POST['utdva']) ){

mysql_query("DELETE FROM dvaut", $link);
echo "<meta http-equiv='refresh' content='0;'>";
} 
if (!empty ($_POST['stdva']) ){

mysql_query("DELETE FROM dvast", $link);
echo "<meta http-equiv='refresh' content='0;'>";

} 
if (!empty ($_POST['ctdva']) ){

mysql_query("DELETE FROM dvact", $link);
echo "<meta http-equiv='refresh' content='0;'>";

} 
if (!empty ($_POST['ptdva']) ){

mysql_query("DELETE FROM dvapat", $link);
echo "<meta http-equiv='refresh' content='0;'>";

} 

?>
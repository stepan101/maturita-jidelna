<?php
if (!empty ($_POST['stare']) ){
$stare= $_POST["stare"];
$nove= $_POST["nove"];
$znovu= $_POST["znovu"];

$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);
$celeheslo = mysql_query("SELECT heslo FROM uzivatele WHERE login= '".$_SESSION['username']."'", $link);
$row1 = mysql_fetch_array($celeheslo);
$heslo= $row1['heslo'];
if($heslo==$stare)
{ if($nove==$znovu)
  {mysql_query("UPDATE uzivatele SET heslo='$nove' WHERE login= '".$_SESSION['username']."'", $link);
  echo "Heslo �sp�n� zm�n�no!";}
 else{echo "Hesla se neshoduj�!";}
}
else { echo "P�vodn� heslo nen� spr�vn�";}
}

if (isset($_SESSION['username'])):
?>
<center><h3>Zm�na hesla </h3>
<hr width="600" size="1" color=#808080 align="center"> 
<form method="post" action="">
 <fieldset class="pass">
 <input type="password" name="stare" placeholder="Star� heslo"><br>
 <input type="password" name="nove" placeholder="Nov� heslo"><br>
 <input type="password" name="znovu" placeholder=" Znovu nov� heslo"><br>
  
   </fieldset><input class="odes" type="submit" name="submit" value="Zm�nit">                                         
    </form>  

<? else:?>


<? endif?>
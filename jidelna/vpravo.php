  <?php
  session_start();
if (!empty ($_POST['login']) ){
$jmeno= $_POST["login"];
$heslo= $_POST["heslo"]; 

$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);
mysql_query("SET CHARACTER SET iso-8859-2");
$vysledek = mysql_query("SELECT * FROM uzivatele WHERE login= '$jmeno' AND heslo= '$heslo'", $link);
$pocetradku = mysql_num_rows($vysledek);
$celejmeno = mysql_query("SELECT jmeno, prijmeni, rocnik FROM uzivatele WHERE login= '".$jmeno."'", $link);
$row = mysql_fetch_array($celejmeno);
if($pocetradku==1)
{
if(!isset($jmeno))                      
 {
 $jmeno = "host";
 }
$_SESSION['username'] = $jmeno;
}
else 
 {
 echo "<font size='4px' color='black'>�patn� u�ivatelsk� jm�no nebo heslo</font> <br>" ;
 
 }  }    
?>  
<?  if (isset($_SESSION['username'])):   ?>              
<? 
    
    echo "V�tejte p�ihl�en� u�ivateli <br> <center><b><font color='#666666'> {$row['jmeno']} "."{$row['prijmeni']} <br> ".
         "{$row['rocnik']}</font></b><br>";
     
      ?>  
  
 <center> <a href="index.php?p=odhlasit" > ODHL�SIT</a> <br>
          <a href="index.php?p=noveheslo" >ZM�NA HESLA</a>
     
                                            
     
  <?else:?>    

   P�ihl�en� <img src="obrazky/panak.png">
<form method="post" action="">
  <fieldset class="form">
  <input type="text" name="login" placeholder="u�ivatelsk� jm�no">
  <input type="password" name="heslo" placeholder="heslo">
    </fieldset>
    <fieldset class="tlac">
    <input class="tlacitko" type="submit" name="submit" value="P�ihl�sit">
    </fieldset>
    </form>  

    <?endif?>    

     
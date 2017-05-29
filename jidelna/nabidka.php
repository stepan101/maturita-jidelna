
<script type='text/javascript'>
//skript pro serverový èas
  
  var serverTime = <?php echo time()*1000; ?>,
      offset = serverTime - clientTime,
      serverTimeSpan, clientTimeSpan;
  
  function time() {
    if(!serverTimeSpan || clientTimeSpan) {
      serverTimeSpan = document.getElementById("server-time");
       }
    var timeObject = new Date();
    var serverTime = [String(timeObject.getHours()), String(timeObject.getMinutes()), String(timeObject.getSeconds())];
    for(var count = 0; count < 3; count++) {
         if(serverTime[count].length < 2) serverTime[count] = "0" + serverTime[count];
    }
    serverTimeSpan.innerHTML = serverTime.join(":");
     }
   
</script>



<?php session_start(); $jmeno = $_SESSION['username'];

/************ Podmínky pro urèení data   ***************/

if (date ('D', time() ) == "Sun" or date ('D', time() ) == "Mon" or date ('D', time() ) == "Tue" or date ('D', time() ) == "Wed" or date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
  if(date( 'D', time() ) == "Sun" )
  {
    if(date( 'Hi', time() ) >= 1412 )
    { $casne=0; } else {$casne=1;};
    
    } else { if (date ('D', time() ) == "Mon" or date ('D', time() ) == "Tue" or date ('D', time() ) == "Wed" or date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
                      $casne=0;}else{$casne=1;};
 } }
else {$casne=1;};

if ( date ('D', time() ) == "Mon" or date ('D', time() ) == "Tue" or date ('D', time() ) == "Wed" or date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
  if(date( 'D', time() ) == "Mon" )
  {
    if(date( 'Hi', time() ) >= 1412 )
    { $caspo=0; } else {$caspo=1;};
    
    } else { if (date ('D', time() ) == "Tue" or date ('D', time() ) == "Wed" or date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
                      $caspo=0;}else{$caspo=1;};
 } }
else {$caspo=1;};

if (date ('D', time() ) == "Tue" or date ('D', time() ) == "Wed" or date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
  if(date( 'D', time() ) == "Tue" )
  {
    if(date( 'Hi', time() ) >= 1412 )
    { $casut=0; } else {$casut=1;};
    
    } else {if (date ('D', time() ) == "Wed" or date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
                      $casut=0;}else{$casut=1;};
 }}
else {$casut=1;};

if (date ('D', time() ) == "Wed" or date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
  if(date( 'D', time() ) == "Wed" )
  {
    if(date( 'Hi', time() ) >= 1412 )
    { $casst=0; } else {$casst=1;};
    
    } else { if (date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
                      $casst=0;}else{$casst=1;};
 }}
else {$casst=1;};

if (date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
  if(date( 'D', time() ) == "Thu" )
  {
    if(date( 'Hi', time() ) >= 1412 )
    { $casct=0; } else {$casct=1;};
    
    } else {if(date ('D', time() ) == "Fri") {
                      $casct=0;}else{$casct=1;};
 } } 
else {$casct=1;};

/*********** Vypsání obìdù*************/

$link = mysql_connect("localhost", "jmeno", "heslo");
mysql_select_db("jidelna", $link);

$pondeli = mysql_query("SELECT datum, polevka, jedna, jine, dva FROM obedy WHERE id= '1'", $link);
$po = mysql_fetch_array($pondeli);

$utery = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '2'", $link);
$ut = mysql_fetch_array($utery);

$streda = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '3'", $link);
$st = mysql_fetch_array($streda);

$ctvrtek = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '4'", $link);
$ct = mysql_fetch_array($ctvrtek);

$patek = mysql_query("SELECT datum, polevka, jedna, dva, jine FROM obedy WHERE id= '5'", $link);
$pt = mysql_fetch_array($patek);

$celejmeno = mysql_query("SELECT jmeno, prijmeni, rocnik FROM uzivatele WHERE login= '".$_SESSION['username']."'", $link);
$row = mysql_fetch_array($celejmeno);
$jmeno= $row['jmeno'] ;
$prijmeni=$row['prijmeni'];
$rocnik= $row['rocnik'] ;

/*************kontrola pondìlí*************/
$p1 = mysql_query("SELECT * FROM dvapo WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$r1 = mysql_num_rows($p1);
if($r1>=1)
{
$radek1="checked";
$radio1="hidden";
$nelze1=1;
} 
else {
$radek2="checked";
$radio1="radio";};

/*************kontrola úterý*************/
$p2 = mysql_query("SELECT * FROM dvaut WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$r2 = mysql_num_rows($p2);
if($r2>=1)
{
$radek3="checked";
$radio2="hidden";
$nelze2=1;
} 
else {
$radek4="checked";
$radio2="radio";};

/*************kontrola støeda*************/
$p3 = mysql_query("SELECT * FROM dvast WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$r3 = mysql_num_rows($p3);
if($r3>=1)
{
$radek5="checked";
$radio3="hidden";
$nelze3=1;
} 
else {
$radek6="checked";
$radio3="radio";};

/*************kontrola èvtrtek*************/
$p4 = mysql_query("SELECT * FROM dvact WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$r4 = mysql_num_rows($p4);
if($r4>=1)
{
$radek7="checked";
$radio4="hidden";
$nelze4=1;
} 
else {
$radek8="checked";
$radio4="radio";};

/*************kontrola pátek*************/
$p5 = mysql_query("SELECT * FROM dvapat WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$r5 = mysql_num_rows($p5);
if($r5>=1)
{
$radek9="checked";
$radio5="hidden";
$nelze5=1;
} 
else {
$radek10="checked";
$radio5="radio";};
  
/*************odhlášené obìdy kontrola *************/

/*************kontrola pondìlí*************/
$s1 = mysql_query("SELECT * FROM poodhlas WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$t1 = mysql_num_rows($s1);
if($t1>=1)
{
$checkbox1="hidden";
$skryto1="<img src='obrazky/checkbox.png' alt='Nelze již vybírat'>";
$radio6="hidden";
} 
else {
$checkbox1="checkbox";}

/*************kontrola úterý*************/
$s2 = mysql_query("SELECT * FROM utodhlas WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$t2 = mysql_num_rows($s2);
if($t2>=1)
{
$checkbox2="hidden";
$skryto2="<img src='obrazky/checkbox.png' alt='Nelze již vybírat'>";
$radio7="hidden";
} 
else {
$checkbox2="checkbox";}

/*************kontrola støeda*************/
$s3 = mysql_query("SELECT * FROM stodhlas WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$t3 = mysql_num_rows($s3);
if($t3>=1)
{
$checkbox3="hidden";
$skryto3="<img src='obrazky/checkbox.png' alt='Nelze již vybírat'>";
$radio8="hidden";
} 
else {
$checkbox3="checkbox";}

/*************kontrola ètvrtek*************/
$s4 = mysql_query("SELECT * FROM ctodhlas WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$t4 = mysql_num_rows($s4);
if($t4>=1)
{
$checkbox4="hidden";
$skryto4="<img src='obrazky/checkbox.png' alt='Nelze již vybírat'>";
$radio9="hidden";
} 
else {
$checkbox4="checkbox";}

/*************kontrola pátek*************/
$s5 = mysql_query("SELECT * FROM paodhlas WHERE jmeno= '$jmeno' AND prijmeni= '$prijmeni'", $link);
$t5 = mysql_num_rows($s5);
if($t5>=1)
{
$checkbox5="hidden";
$skryto5="<img src='obrazky/checkbox.png' alt='Nelze již vybírat'>";
$radio10="hidden";
}                                    
else {
$checkbox5="checkbox";}
$nelze6="<img src='obrazky/radio2.png' alt='Nelze již vybírat'>";

 if (isset($_SESSION['username'])):
 
?>  

<!--  Formuláø po pøihlášení s podmínkami  //-->   

<center> Nabídka obìdù
<form method="post" action="index.php?p=nabidka2" >    
<table style="table-layout: fixed; border-collapse: collapse;" width="600px" >
<tr><th>Pondìlí <? echo "{$po['datum']}";?> </th></tr>
<tr><td>Polévka: <? echo "{$po['polevka']}";?> <br><br> 

<? if($t1>=1 or $casne==0 or $nelze1==1):echo $nelze6; else:?><input type="<?echo $radio1;?>" name="pondeli"  id="radio4"  value="první1"<? echo $radek2;?>> <label for='radio4'></label><?endif;?> 1. <? echo "{$po['jedna']}";?> <br><br>
<? if($t1>=1 or $casne==0):echo $nelze6; else:?><input type="radio" name="pondeli"  id="radio3"  value="druhé1"<?echo $radek1;?>><label for="radio3"> </label><?endif;?>         2. <? echo "{$po['dva']}";?>  <br><br> 
        <? echo "{$po['jine']}";?><hr width="600" size="1" color=#808080 align="center"> <p style="text-align: right"> Odhlásit obìd<?echo $skryto1;?><input type="<?echo $checkbox1;?>" id="1" name="odhlaspo"> <label for="1"></label></td></tr>
<tr><th>Úterý <? echo "{$ut['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$ut['polevka']}";?><br><br>            
<? if($t2>=1 or $caspo==0 or $nelze2==1):echo $nelze6; else:?><input type="<?echo $radio2;?>" name="utery" id="radio1" value="první2" <?echo $radek4;?>><label for="radio1"></label><?endif;?>  1. <? echo "{$ut['jedna']}";?> <br><br>  
<? if($t2>=1 or $caspo==0):echo $nelze6; else:?><input type="radio" name="utery" id="radio2" value="druhé2" <?echo $radek3;?>><label for="radio2"></label><?endif;?>                    2. <? echo "{$ut['dva']}";?>  <br><br> 
        <? echo "{$ut['jine']}";?> <hr width="600" size="1" color=#808080 align="center"> <p style="text-align: right"> Odhlásit obìd<?echo $skryto2;?> <input type="<?echo $checkbox2;?>" id="2" name="odhlasut"> <label for="2"> </td></tr>
<tr><th>Støeda <? echo "{$st['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$st['polevka']}";?><br><br> 
<? if($t3>=1 or $casut==0 or $nelze3==1):echo $nelze6; else:?><input type="<?echo $radio3;?>" name="streda" id="radio5" value="první3" <?echo $radek6;?>><label for="radio5"></label><?endif;?>  1. <? echo "{$st['jedna']}";?> <br><br>  
<? if($t3>=1 or $casut==0):echo $nelze6; else:?><input type="radio" name="streda" id="radio6" value="druhé3" <?echo $radek5;?>>  <label for="radio6"></label><?endif;?>                 2. <? echo "{$st['dva']}";?>  <br><br> 
        <? echo "{$st['jine']}";?><hr width="600" size="1" color=#808080 align="center"> <p style="text-align: right"> Odhlásit obìd<?echo $skryto3;?> <input type="<?echo $checkbox3;?>" id="3" name="odhlasst"> <label for="3"> </td></tr>
<tr><th>Ètvrtek <? echo "{$ct['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$ct['polevka']}";?><br><br> 
<? if($t4>=1 or $casst==0 or $nelze4==1):echo $nelze6; else:?><input type="<?echo $radio4;?>" name="ctvrtek" id="radio7" value="první4" <?echo $radek8;?>><label for="radio7"></label><?endif;?>  1. <? echo "{$ct['jedna']}";?> <br><br>  
<? if($t4>=1  or $casst==0):echo $nelze6; else:?><input type="radio" name="ctvrtek" id="radio8" value="druhé4" <?echo $radek7;?>><label for="radio8"></label><?endif;?>                    2. <? echo "{$ct['dva']}";?>  <br><br> 
        <? echo "{$ct['jine']}";?> <hr width="600" size="1" color=#808080 align="center"> <p style="text-align: right"> Odhlásit obìd<?echo $skryto4;?><input type="<?echo $checkbox4;?>" id="4" name="odhlasct"> <label for="4"> </td></tr>
<tr><th>Pátek <? echo "{$pt['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$st['polevka']}";?><br> <br> 
<?  if($t5>=1 or $casct==0 or $nelze5==1):echo $nelze6; else:?><input type="<?echo $radio5;?>" name="patek" id="radio9" value="první5" <?echo $radek10;?> ><label for="radio9"></label><?endif;?>    1. <? echo "{$pt['jedna']}";?> <br><br>  
<? if($t5>=1 or $casct==0):echo $nelze6; else:?><input type="radio" name="patek" id="radio10" value="druhé5" <?echo $radek9;?>> <label for="radio10"></label><?endif;?>                   2. <? echo "{$pt['dva']}";?>  <br><br> 
        <? echo "{$pt['jine']}";?>  <hr width="600" size="1" color=#808080 align="center"> <p style="text-align: right"> Odhlásit obìd<?echo $skryto5;?><input type="<?echo $checkbox5;?>" id="5" name="odhlaspt"> <label for="5"> </td></tr>
</table>

<fieldset class="tlac">
    <input class="tlacitko" type="submit" name="submit" value="Odeslat">
    </fieldset>
 
 <?else:?> 
 
 <!--  Vypsání obìdu, když uživatel není pøihlášený  //-->  
<center> Nabídka obìdù
<table style="table-layout: fixed; border-collapse: collapse;" width="600px" >
<tr><th>Pondìlí <? echo "{$po['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$po['polevka']}";?> <br> <br> 
        1. <? echo "{$po['jedna']}";?> <br><br>  
        2. <? echo "{$po['dva']}";?>  <br><br> 
        <? echo "{$po['jine']}";?>   </td></tr>
<tr><th>Úterý <? echo "{$ut['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$ut['polevka']}";?><br><br> 
        1. <? echo "{$ut['jedna']}";?> <br><br>  
        2. <? echo "{$ut['dva']}";?>  <br><br> 
        <? echo "{$ut['jine']}";?>   </td></tr>
<tr><th>Støeda <? echo "{$st['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$st['polevka']}";?><br><br> 
        1. <? echo "{$st['jedna']}";?> <br><br>  
        2. <? echo "{$st['dva']}";?>  <br><br> 
        <? echo "{$st['jine']}";?>   </td></tr>
<tr><th>Ètvrtek <? echo "{$ct['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$ct['polevka']}";?><br><br> 
        1. <? echo "{$ct['jedna']}";?> <br><br>  
        2. <? echo "{$ct['dva']}";?>  <br><br> 
        <? echo "{$ct['jine']}";?>   </td></tr>
<tr><th>Pátek <? echo "{$pt['datum']}";?></th></tr>
<tr><td>Polévka: <? echo "{$st['polevka']}";?><br> <br> 
        1. <? echo "{$pt['jedna']}";?> <br><br>  
        2. <? echo "{$pt['dva']}";?>  <br><br> 
        <? echo "{$pt['jine']}";?>   </td></tr>
</table> 
  
  <?endif?>





     
<?php session_start(); $jmeno = $_SESSION['username'];?>
<center>
<h3>Kontakt</h3> 
<b>telefon kancel��:</b> 722 657 867 <br>
<b>telefon kuchy�:</b> 722 657 866 <br>
<a href="mailto:sjgym@seznam.cz"> sjgym@seznam.cz </a>
<hr width="600" size="1" color=#808080 align="center">
<?
 if (!empty ($_POST['odes'])){
 $jme=$_POST["jmen"]; 
 $mail=$_POST["mail"]; 
 $text=$_POST["text"]; 
 $datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
 $zprava="<center><b>Dotaz z webu �koln� j�delny</b></center><br>
         Jm�no a p�ijmen�: ".$jme."<br>
         E-mail: ".$mail. "<br>
         Text: ".$text. " <br>
         Odesl�no: ".$datum. "<br><br>
         <b>S pozdravem Admin<br><br>";
         
/***** Nastaven� p��jemce atd... *******/         
$mujmail="stepan101@volny.cz";                             
$predmet="Dotaz z webu �koln� j�delny ";
$headers = 'From:'.$mujmail."\r\n"; 
$headers .= 'Content-type: text/html; charset=Windows-1250'."\r\n"; 
  
 if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    mail($mujmail, $predmet , $zprava, $headers);
    echo"Dotaz odesl�n.";
} 
 else {echo"�patn� zadan� email.";} 
  }
?>
<form method="post" action="">
 <fieldset class="pass">
 <input type="text" name="jmen" placeholder="Va�e jm�no"><br>
 <input type="text" name="mail" placeholder="V� email"><br>
 <textarea name="text" placeholder=" V� dotaz"></textarea><br>
  
   </fieldset><input class="odes" type="submit" name="odes" value="Odeslat">                                         
    </form>  
<?php session_start(); $jmeno = $_SESSION['username'];?>
<center>
<h3>Kontakt</h3> 
<b>telefon kanceláø:</b> 722 657 867 <br>
<b>telefon kuchyò:</b> 722 657 866 <br>
<a href="mailto:sjgym@seznam.cz"> sjgym@seznam.cz </a>
<hr width="600" size="1" color=#808080 align="center">
<?
 if (!empty ($_POST['odes'])){
 $jme=$_POST["jmen"]; 
 $mail=$_POST["mail"]; 
 $text=$_POST["text"]; 
 $datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
 $zprava="<center><b>Dotaz z webu Školní jídelny</b></center><br>
         Jméno a pøijmení: ".$jme."<br>
         E-mail: ".$mail. "<br>
         Text: ".$text. " <br>
         Odesláno: ".$datum. "<br><br>
         <b>S pozdravem Admin<br><br>";
         
/***** Nastavení pøíjemce atd... *******/         
$mujmail="stepan101@volny.cz";                             
$predmet="Dotaz z webu Školní jídelny ";
$headers = 'From:'.$mujmail."\r\n"; 
$headers .= 'Content-type: text/html; charset=Windows-1250'."\r\n"; 
  
 if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    mail($mujmail, $predmet , $zprava, $headers);
    echo"Dotaz odeslán.";
} 
 else {echo"Špatnì zadaný email.";} 
  }
?>
<form method="post" action="">
 <fieldset class="pass">
 <input type="text" name="jmen" placeholder="Vaše jméno"><br>
 <input type="text" name="mail" placeholder="Váš email"><br>
 <textarea name="text" placeholder=" Váš dotaz"></textarea><br>
  
   </fieldset><input class="odes" type="submit" name="odes" value="Odeslat">                                         
    </form>  
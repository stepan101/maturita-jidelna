<?php 
$celejmeno = mysql_query("SELECT jmeno, prijmeni, rocnik FROM uzivatele WHERE login= '".$_SESSION['username']."'", $link);
$row = mysql_fetch_array($celejmeno);
session_start(); $jmeno = $_SESSION['username'];?>
V�tejte na str�nce �koln� j�delny!
<br>
Tato webov� str�nka slou�� k odhla�ov�n� a
zm�n� ob�d�. 
<br>
Na prav� stran� se p�ihla�te a vyb�rejte ob�dy 
podle sv�ho �v�en�. 
<br>Va�e u�ivatelsk� jm�no 
a heslo jste dostali na po��tku roku ve �koln�
j�deln�. 
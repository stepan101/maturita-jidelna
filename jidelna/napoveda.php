<?php session_start(); $jmeno = $_SESSION['username'];?>
 
  <center><h3>N�pov�da </h3> </center>
<hr width="600" size="1" color=#808080 align="center"> 
  <input type="checkbox" class="rozbalovac" id="box2">
  <div class="rozbalovaci">
  <label for="box2">Kde se dozv�m sv� p�ihla�ovac� �daje?</label>
  <div class="obsah">
   <i>Sv� p�ihla�ovac� �daje jsi dostal za��tkem roku ve �koln� j�deln�. Pokud jsi je zapomn�l, zajdi si do �koln� j�delny pro nov�.</i>
  </div> </div>
 
  <input type="checkbox" class="rozbalovac" id="box1">
<div class="rozbalovaci">
  <label for="box1">Jak se p�ihl�sit?</label>
  <div class="obsah">
   <i>Vprav� ��sti t�to str�nky se nach�z� formul�� pro p�ihl�en�. Zadej tam sv� �daje, kter� jsi dostal po��tkem roku ve �koln� j�deln�</i>
  </div> </div>
  
  <input type="checkbox" class="rozbalovac" id="box7">
<div class="rozbalovaci">
  <label for="box7">Nemohu se p�ihl�sit, pro�?</label>
  <div class="obsah">
   <i>Je�t� jednou si zkontroluj sv� �daje. Pokud je v�e spr�vn� a st�le se nem��e� p��hl�sit, zajdi do �koln� j�delny, nebo n�m napi�  <a href="mailto:sjgym@seznam.cz"> e-mail</a>.</i>
  </div> </div>
  
  <input type="checkbox" class="rozbalovac" id="box3">
  <div class="rozbalovaci">
  <label for="box3">Jak si mohu vybrat ob�d?</label>
  <div class="obsah">
  <i>Po p�ihl�en� klikni v horn�m menu na NAB�DKA OB�D�.<br> Zobraz� se aktu�ln� seznam ob�d�. 
  <img src="obrazky/bok.png" width="70%"><br> Pomoc� za�krt�vac�ch pol��ek si vyberte ob�d. <br>
  <img src="obrazky/radio1.png" > - za�krtnuto   <img src="obrazky/radio.png" > - neza�krtnuto <br>
  Pokud sis vybrali na cel� t�den ob�dy, klikni pod seznamen ob�d� na tla��tko Odeslat.<img src="obrazky/tlac.png" width="70px"><br> 
  <font color="red">Pozor! Ob�d si m��e� vybrat pouze jednou! Po odkliknut� tla��tka odeslat se jedn� o nen�vratnou v�c.</font></i>
  </div> </div>

  <input type="checkbox" class="rozbalovac" id="box4">
  <div class="rozbalovaci">
  <label for="box4">Jak si odhl�s�m ob�d?</label>
  <div class="obsah">
  <i> Sejn� jako p�i vyb�r�n� ob�d� pouze s t�m rozd�lem, �e pod v�b�rem ob�d� se nach�z� klikaj�c� pol��ko s odhl�en�m ob�d�.<br>
   <img src="obrazky/checkbox.png" >  - za�krtnuto  <img src="obrazky/checkbox1.png" >  - neza�krtnuto  <br>
   Stejn�m zp�sobem zase po za�krtnut� klikni na tla��tko Odeslat.<img src="obrazky/tlac.png" width="70px"><br> 
   <font color="red">Pozor! Ob�d si m��e� odhl�sit pouze jednou! Po odkliknut� tla��tka odeslat se jedn� o nen�vratnou v�c.</font></i>
  </div> </div>
  
  <input type="checkbox" class="rozbalovac" id="box5">
  <div class="rozbalovaci">
  <label for="box5">Jak se dozv�m, �e m�m ob�d zm�n�n�/odhl�en�?</label>
  <div class="obsah">
   <i> Pokud se ti p�i kliknut� na NAB�DKA OB�D� objev� tento obrazek:<br> <font color="red"> Ob�d u� m� vybran�, nelze si vybrat ob�d �.1:</font><br><img src="obrazky/vyber.png" width="60%" >
   <br> <font color="red"> Ob�d u� m� odhl�en� nebo vypr�el �as pro jeho zm�nu,<br> nelze si vyb�rat ob�d:</font><br><img src="obrazky/odhlase.png" width="60%" >
    </i>
  </div> </div>
  
  <input type="checkbox" class="rozbalovac" id="box6">
  <div class="rozbalovaci">
  <label for="box6">Jak si zm�n�m sv� �daje?</label>
  <div class="obsah">
  <i>Zm�nit si m��e� pouze heslo. V prav�m sloupci klikni na tla��tko Zm�na hesla.<br>
  Objev� se tento formul��:<img src="obrazky/zmen.png" width="70%" > <br>
  Zde si m��e� sv� heslo zm�nit.</i>
  </div> </div>
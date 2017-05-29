<?php session_start(); $jmeno = $_SESSION['username'];?>
 
  <center><h3>Nápovìda </h3> </center>
<hr width="600" size="1" color=#808080 align="center"> 
  <input type="checkbox" class="rozbalovac" id="box2">
  <div class="rozbalovaci">
  <label for="box2">Kde se dozvím své pøihlašovací údaje?</label>
  <div class="obsah">
   <i>Své pøihlašovací údaje jsi dostal zaèátkem roku ve školní jídelnì. Pokud jsi je zapomnìl, zajdi si do školní jídelny pro nové.</i>
  </div> </div>
 
  <input type="checkbox" class="rozbalovac" id="box1">
<div class="rozbalovaci">
  <label for="box1">Jak se pøihlásit?</label>
  <div class="obsah">
   <i>Vpravé èásti této stránky se nachází formuláø pro pøihlášení. Zadej tam své údaje, které jsi dostal poèátkem roku ve školní jídelnì</i>
  </div> </div>
  
  <input type="checkbox" class="rozbalovac" id="box7">
<div class="rozbalovaci">
  <label for="box7">Nemohu se pøihlásit, proè?</label>
  <div class="obsah">
   <i>Ještì jednou si zkontroluj své údaje. Pokud je vše správnì a stále se nemùžeš pøíhlásit, zajdi do školní jídelny, nebo nám napiš  <a href="mailto:sjgym@seznam.cz"> e-mail</a>.</i>
  </div> </div>
  
  <input type="checkbox" class="rozbalovac" id="box3">
  <div class="rozbalovaci">
  <label for="box3">Jak si mohu vybrat obìd?</label>
  <div class="obsah">
  <i>Po pøihlášení klikni v horním menu na NABÍDKA OBÌDÙ.<br> Zobrazí se aktuální seznam obìdù. 
  <img src="obrazky/bok.png" width="70%"><br> Pomocí zaškrtávacích políèek si vyberte obìd. <br>
  <img src="obrazky/radio1.png" > - zaškrtnuto   <img src="obrazky/radio.png" > - nezaškrtnuto <br>
  Pokud sis vybrali na celý týden obìdy, klikni pod seznamen obìdù na tlaèítko Odeslat.<img src="obrazky/tlac.png" width="70px"><br> 
  <font color="red">Pozor! Obìd si mùžeš vybrat pouze jednou! Po odkliknutí tlaèítka odeslat se jedná o nenávratnou vìc.</font></i>
  </div> </div>

  <input type="checkbox" class="rozbalovac" id="box4">
  <div class="rozbalovaci">
  <label for="box4">Jak si odhlásím obìd?</label>
  <div class="obsah">
  <i> Sejné jako pøi vybírání obìdù pouze s tím rozdílem, že pod výbìrem obìdù se nachází klikající políèko s odhlášením obìdù.<br>
   <img src="obrazky/checkbox.png" >  - zaškrtnuto  <img src="obrazky/checkbox1.png" >  - nezaškrtnuto  <br>
   Stejným zpùsobem zase po zaškrtnutí klikni na tlaèítko Odeslat.<img src="obrazky/tlac.png" width="70px"><br> 
   <font color="red">Pozor! Obìd si mùžeš odhlásit pouze jednou! Po odkliknutí tlaèítka odeslat se jedná o nenávratnou vìc.</font></i>
  </div> </div>
  
  <input type="checkbox" class="rozbalovac" id="box5">
  <div class="rozbalovaci">
  <label for="box5">Jak se dozvím, že mám obìd zmìnìný/odhlášený?</label>
  <div class="obsah">
   <i> Pokud se ti pøi kliknutí na NABÍDKA OBÌDÙ objeví tento obrazek:<br> <font color="red"> Obìd už máš vybraný, nelze si vybrat obìd è.1:</font><br><img src="obrazky/vyber.png" width="60%" >
   <br> <font color="red"> Obìd už máš odhlášený nebo vypršel èas pro jeho zmìnu,<br> nelze si vybírat obìd:</font><br><img src="obrazky/odhlase.png" width="60%" >
    </i>
  </div> </div>
  
  <input type="checkbox" class="rozbalovac" id="box6">
  <div class="rozbalovaci">
  <label for="box6">Jak si zmìním své údaje?</label>
  <div class="obsah">
  <i>Zmìnit si mùžeš pouze heslo. V pravém sloupci klikni na tlaèítko Zmìna hesla.<br>
  Objeví se tento formuláø:<img src="obrazky/zmen.png" width="70%" > <br>
  Zde si mùžeš své heslo zmìnit.</i>
  </div> </div>
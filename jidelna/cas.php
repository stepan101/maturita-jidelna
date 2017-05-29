<script type='text/javascript'>
  
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

<b><span id="server-time"><?php echo date( 'D H:i', time() ) ?></span></b>    

<?php
if ( date ('D', time() ) == "Mon" or date ('D', time() ) == "Tue" or date ('D', time() ) == "Wen" or date ('D', time() ) == "Thu" or date ('D', time() ) == "Fri") {
  if(date( 'D', time() ) == "Tue" )
  {
    if(date( 'Hi', time() ) >= 1412 )
    { echo "Je úterý a je více jak 14:00"; } else { echo "Je úterý, ale je ménì než 14:00";};
    
    } else { echo "Není úterý!";};
 }
else { echo "Není pondìlí!";};


?>




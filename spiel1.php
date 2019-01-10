<?php
session_start();
  if (! isset($_SESSION['zz']))
    $_SESSION['zz']=    mt_rand(0, 100);

  
?>
<html>
    <head>
 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Spiel</title>
    </head>
    <body>
            <form action="spiel1.php" method="post">
            <p>Dein Tipp: <input size="10" maxlength="3" name="wert"/></p>
            <p><input type="submit" value="Tipp" name="send"/></p>
        </form>
       <?php
      
      
  $tipp=$_POST["wert"];
    echo "<br/>Dein Tipp war: $tipp <br/>";
     if($tipp>100 || $tipp<0)
        echo "Dein Tipp ist außerhalb der gesuchten Zahl";
    elseif($tipp<$_SESSION['zz'])
        echo "Dein Tipp war zu klein";
    elseif($tipp>$_SESSION['zz'])
        echo "Dein war zu groß";
    else
        echo "100 Punkte für den Kandidaten<br/> Einfach neue Zahl oben eingeben und weiter gehts.";

    if($tipp==$_SESSION['zz'])
        $_SESSION['zz']=    mt_rand(0, 100);
   
    
              ?>
    </body>
</html>

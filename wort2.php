<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Worteingabe mit Auslesen</title>
    </head>
    <body>
        <?php
        //Eingabe auslesen und wiedergeben
      $a=$_POST["satz"];
      echo "Dein Eingabesatz: $a <br/>";

      //Länge von Eingabe
      $langa=strlen($a);
      echo "Es sind $langa Zeichen in dem Satz <br/>";

      //Anzahl der Wörter
      $worte=explode(" ", $a);
      $lg=sizeof($worte);
     
      for ($i=0; $i<$lg; $i++)
      {
           
         echo "Wort ". ($i+1) .": $worte[$i] <br/>";
      }
      echo "<br/>"
?>


    
        <table width="50%" border="1">
          <tr>
            <td>Sortierung von A-Z(Ohne Berücksichtigung Groß- und Klein) </td>
            <td>Sortierung von Z-A(Ohne Berücksichtigung Groß- und Klein)  </td>
          </tr>
          <tr>
            <td><?php
            //Worte sortieren von A-Z ohne Berücksichtigung von Groß- und Kleinschreibung
            sort($worte);
        foreach($worte as $teil)
 echo "$teil <br/>";
			?></td>
            <td><?php
            //Worte sortieren von Z-A ohne Berücksichtigung von Groß- und Kleinschreibung
            rsort($worte);
        foreach($worte as $teil)
 echo "$teil <br/>";
			?></td>
          </tr>
        </table>


        





        <?php
        /*Array vergleichen
        //alles klein schreiben
        $klein=strtolower($a);
        echo "$klein <br/>";
       //Anzahl der Worte von $klein
        $kleinworte=explode(" ", $klein);
        $lgklein=sizeof($kleinworte);
        for ($j=0; $j<$lgklein; $j++)
        {
           
         echo "Wort ". ($j+1) .": $kleinworte[$j] <br/>";
      }
      echo "<br/>";
        sort($worte);
      if ($worte[$i]==$kleinworte[$j])
        
          foreach($worte as $teil)
              echo "$teil ";
      else{
          foreach($kleinworte as $kleinteil) 
          echo "$kleinworte ";
      }

	*/
        
        ?>
        
        
        
        
        
        

       
</body>
</html> 

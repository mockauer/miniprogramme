<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Worteingabe mit Auslesen</title>
    </head>
    <body>
        <?php
        //Eingabe auslesen und wiedergeben
      $a=$_POST["satz"];
      $b=$_POST["satz"];
      echo "$a <br/>";

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
            <td>Sortierung von A-Z</td>
            <td><p>Sortierung von Z-A</p>
            </td>
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
        //alles klein schreiben
        $klein=strtolower($a);
        echo "$klein <br/>";
         //Anzahl der Wörter
      $kleineworte=explode(" ", $klein);

      //Simple Variante Array vergleichen: Sortieren der Wörter, aber alle klein --> funktioniert nicht
      sort($worte);
        foreach($worte as $teil)
              for ($i=0; $i<$lg; $i++)
              {
                  if($kleineworte==$worte)
                      echo "$worte[$i] <br/>";
              }
        echo "<br/>";


 echo "$teil <br/>";

 //schicke Variante --> Mehrdimensional Array


        ?>
</body>
</html>

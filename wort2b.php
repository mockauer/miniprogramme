<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Worteingabe mit Auslesen</title>
    </head>
    <body>
        <?php
      $a=$_POST["satz"];
      echo "$a <br/>";
      $anfang=1;
      $langa=strlen($a);
      echo "Es sind $langa Zeichen in dem Satz <br/>";
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
            natcasesort($worte);
        foreach($worte as $teil)
 echo "$teil <br/>";
			?></td>
            <td> </td>
          </tr>
        </table>
        
        <?php
            rsort($worte);
        foreach($worte as $teil)
 echo "$teil <br/>";
	
        
        //alles klein schreiben
        $klein=strtolower($a);
        echo "$klein <br/>";
         //Anzahl der Wörter
      $kleineworte=explode(" ", $klein);
      echo "<br/>";
//array_diff
      $result =  array_diff($worte, $kleineworte);

while ( list ( $key, $val ) = each ( $result ) )
{
    echo $key . ': ' . $val . '<br/>';
       
    


}
   
        ?>
           
</body>
</html> 

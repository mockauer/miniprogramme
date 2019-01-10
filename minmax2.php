<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kleine Programme</title>
    </head>
    <body>
        <?php
        if(isset($_POST["minmax"]))
       $zahl1=$_POST["zahl1"];
       $zahl2=$_POST["zahl2"];
       $zahl3=$_POST["zahl3"];
       $zahl4=$_POST["zahl4"];
       if ($zahl1 > $zahl2)
       {
           $max=$zahl1;
           $min=$zahl2;
       }
       else {
           $max=$zahl2;
           $min=$zahl1;
       }
       if($zahl3 > $max)
       {$max=$zahl3;}
       else {
           $zahl3 < $min;
           $min=$zahl3;
       }
       if ($zahl4>$max)
       {$max=$zahl4;}
       else {
           $zahl4 < $min;
           $min=$zahl4;
           
       }

       echo "Höchstwert ist: $max <br/>Der kleinste Wert ist: $min <br/>";
        
       if(isset($_POST["fakultaet"]))
           $wert=$_POST["zahl1"];
           $fak=1;
       for ($i=$wert; $i>0; $i--){
          
        $fak=$i*$fak;
      }
      echo "$wert! = $fak";
        ?>
    </body>
</html>

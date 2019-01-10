<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kleine Programme</title>
        <?php
        function add($x,$y){
                $erg=$x+$y;
        return $erg; }
               function sub($x,$y){
                $erg=$x-$y;
        return $erg; }
               function mul($x,$y){
                $erg=$x*$y;
        return $erg; }
               function div($x,$y){
                $erg=$x/$y;
        return $erg; }
        ?>
    </head>
    <body>
        <?php
       $a=$_POST["zahl1"];
       $b=$_POST["zahl2"];
       if($_POST["op"] == "+")
           $c=add($a=$_POST["zahl1"], $b=$_POST["zahl2"]);
       
       if($POST["op"] == "-")
              $c=sub($a=$_POST["zahl1"], $b=$_POST["zahl2"]);
         
       if($POST["op"] == "*")
              $c=mul($a=$_POST["zahl1"], $b=$_POST["zahl2"]);
         
       if($POST["op"] == "/")
              $c=div($a=$_POST["zahl1"], $b=$_POST["zahl2"]);
        
       echo "$a ". $_POST["op"] ." $b = $c<br/>";
       /* if(isset($_POST["plus"]))
           $c=$a+$b;
      if(isset($_POST["minus"]))
           $c=$a-$b;
      if(isset($_POST["mal"]))
           $c=$a*$b;
      if(isset($_POST["durch"]))
           $c=$a/$b;
      if(isset($_POST["wurzel"]))
          $c=sqrt($a);
      if(isset($_POST["hoch"]))
          $c=pow($a,$b);
      if(isset($_POST["quad"]))
          $c=pow($a,2);
     echo "Das Ergebnis lautet: <br/>$a  $b=$c <br/>";*/
        ?>
    </body>
</html>

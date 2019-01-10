<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
           <?php
      $a=$_GET["satz"];
      echo "$a <br/>";
      $langa=strlen($a);
      echo "Es sind $langa Zeichen in dem Satz <br/>";
      $worte=explode(" ", $a);
      $lg=sizeof($worte);

      for ($i=0; $i<$lg; $i++)
      {

         echo "Wort $i: $worte[$i] <br/>";
      }
        ?>
    </body>
</html>

<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Altersrechner</title>
    </head>
    <body>
        Hier wird dein Alter berechnet in Jahre, Tage, Minuten und Sekunden
        <form action="alter.php" method="post">
            <p><input name="tag" size="1" maxlength="2"/><b>.</b><input name="monat" size="1" maxlength="2"/><b>.</b><input name="jahr" size="2" maxlength="4"/> Eingabe des Alter (Schreibweise: TT-MM-JJJJ)</p>
            <p><input name="stunde" size="1" maxlength="2"/><b>:</b><input name="minute" size="1" maxlength="2"/> Eingabe der Uhrzeit (Schreibweise: hh:mm)</p>
            <input type="submit" value="berechnen"/>
        </form>
        <?php
        $tag=$_POST["tag"];
        $monat=$_POST["monat"];
        $jahr=$_POST["jahr"];
        $stunde=$_POST["stunde"];
        $minute=$_POST["minute"];
        $jetzt=time();
        
        if($_POST["tag"]>31 || $_POST["monat"]>12 || $_POST["stunde"]>23 || $_POST["minute"]>59)
            echo "Die Eingabe war fehlerhaft.<br/>";
        else 
    echo "Du bist am $tag.$monat.$jahr um $stunde:$minute Uhr geboren.<br/><br/>";


        $bday=  mktime($stunde, $minute, 0, $monat, $tag, $jahr, -1);
        $alter=$jetzt-$bday;
        echo "Du bist $alter Sekunden alt. <br/>";
        $alter=round($alter/60);
        echo "Du bist $alter Minuten alt. <br/>";
        $alter=round($alter/60);
        echo "Du bist $alter Stunden alt. <br/>";
        $alter=round($alter/24);
        echo "Du bist $alter Tage alt. <br/>";
        $alter=round($alter/365,2);
        echo "Du bist $alter Jahre alt. <br/>";
        



        ?>
    </body>
</html>

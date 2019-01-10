<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Worteingabe mit Auslesen</title>
    </head>
    <body>
        <h2>Wortauslese</h2>
        <p>Hier gibt du einen Satz mit max. 35 Zeichen ein.
            <p>POST-Variante</p>
        <form action="wort2.php" method="post">
            <p><input size="35" maxlength="35" name="satz"/></p>
            <p><input type="submit" value="Abschicken"/></p>
        </form>
            <p>Test-Variante</p>
        <form action="wort2b.php" method="post">
            <p><input size="35" maxlength="35" name="satz"/></p>
            <p><input type="submit" value="Abschicken"/></p>
        </form>
    </body>
</html>

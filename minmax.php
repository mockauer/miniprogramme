<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Kleine Programme</title>
</head>
<body><p> Geben Sie hier 4 Zahlen ein und es wird Ihnen die größte und die kleinste Zahl ausgegeben. Desweiteren kann man von Zahl 1 die Falkultät berechnen lassen.</p>
	<form action="minmax2.php" method="post">
		<p>Zahl 1: <input name="zahl1" /></p>
                <p>Zahl 2: <input name="zahl2" /></p>
                <p>Zahl 3: <input name="zahl3" /></p>
                <p>Zahl 4: <input name="zahl4" /></p>
                <p><input type="submit" value="Minimum/Maximum" name="minmax"/>&nbsp;<input type="submit" value="Falkultät" name="fakultaet" /></p>
        </form>
    <p>Taschenrechner</p>
    <form action="taschenrechner.php" method="post">
        <p>Zahl 1: <input name="zahl1"/></p>
        <p>Zahl 2: <input name="zahl2"/></p>
        <p><input type="radio" name="op" value="+" /> Plus
            <input type="radio" name="op" value="-"/>Minus
            <input type="radio" name="op" value="*" />Mal
            <input type="radio" name="op" value="/"/>Durch

           <p><input type="submit" value="Rechnen" />


          <p> <input type="submit" value="plus" name="+"/>
            &nbsp;<input type="submit" value="minus" name="-"/>
            &nbsp;<input type="submit" value="mal" name="*"/>
            &nbsp;<input type="submit" value="durch" name="/"/></p>
        <p>
            <input type="submit" value="&radic;" name="wurzel"/>
            &nbsp;<input type="submit" value="²" name="quad"/>
            &nbsp;<input type="submit" value="^" name="hoch"/></p>
    </form>



</body>
</html>
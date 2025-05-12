<?php declare(strict_types=1); ?>
<!doctype html>


<html>

<head>

    <link rel="stylesheet" href="styles/mainstyle.css">
    <title>dev.audiomixing.de - Enums mit useState verwenden</title>
</head>

<body>
    <h3><a href="?article=0001">OpenUI5: Refresh Custom Control / Rerender Alternative
            invalidate()</a>
        <img src="./images/logo_openui5.png" class="logo" />
    </h3>
    Der Befehl &quot;rerender()&quot; wurde seitens der Entwickler als deprecated gekennzeichnet. Das hat
    haupts&auml;chlich den
    Grund,
    dass rerender inperformant ist. Jeder Aufruf f&uuml;hrt dazu, dass ein komplettes Rerendering durchgef&uuml;hrt wird
    und zwar
    f&uuml;r jedes Custom Control, welches ein Rerender anfordert. Daher wurde der Befehl &quot;invalidate()&quot;
    eingef&uuml;hrt.
    <pre><code>control.invalidate();</code></pre>
    Dieser Befehl sorgt daf&uuml;r, dass sich das Custom Control f&uuml;r ein Rerender anmeldet. Mehrere Anmeldungen
    werden dann
    gemeinsam in einem Zyklus durchgef&uuml;hrt, welches wesentlich performanter ist, als wenn jedes Custom Control ein
    eigenes Rerender durchf&uuml;hren w&uuml;rde.
</body>

</html>
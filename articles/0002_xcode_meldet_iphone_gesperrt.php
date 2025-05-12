<?php declare(strict_types=1); ?>
<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="styles/mainstyle.css">
    <title>dev.audiomixing.de - XCode meldet iPhone sei gesperrt</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body>

    <h3><a href="?article=0002">XCode meldet iPhone sei gesperrt</a>
        <img src="./images/logo_xcode.png" class="logo" />
    </h3>
    <p>Wenn XCode nach dem Build meldet, dass das iPhone noch gesperrt sei und der Transfer des Builds erst nach der
        Entsperrung durchgeführt wird, dann hast du evtl. ein Update deines iPhones installiert und im XCode ist
        dein
        iPhone noch mit der alten iOS Version konfiguriert. Gehe in XCode -> Window -> Devices and Simulators und
        lösche
        dort den Eintrag vom iPhone mit der alten iOS Version und trage anschließend dein iPhone mit neuer iOS
        Version
        ein.</p>
    <img src="./images/iphone_gesperrt.png" class="fullscreen_image" />

</body>

</html>
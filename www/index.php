<?php date_default_timezone_set('Europe/Paris'); ?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>unixtime.fr - conversion temps unix</title>
    <meta name="description" content="Conversion en temps réel de temps Unix"/>
    <link rel="stylesheet" media="screen" type="text/css" href="/style.css"/>
</head>
<body>

<div id="header"></div>

<div id="contenu">

    <input type="text" name="timestamp" class="timestamp" value="<?php echo time(); ?>"/>

    <div id="resultat-timestamp"><?php echo date("d/m/Y @ H:i:s"); ?></div>

    <div id="form-convert">
        <select name="dd"><?php for ($i = 1; $i <= 31; $i++) {
            echo '<option value="' . $i . '"';
            if ($i == date("d")) {
                echo ' SELECTED';
            }
            echo '>' . $i . '</option>';
        } ?></select> /
        <select name="mm"><?php for ($i = 1; $i <= 12; $i++) {
            echo '<option value="' . $i . '"';
            if ($i == date("m")) {
                echo ' SELECTED';
            }
            echo '>' . $i . '</option>';
        } ?></select> /
        <select name="yyyy"><?php for ($i = 1980; $i <= 2030; $i++) {
            echo '<option value="' . $i . '"';
            if ($i == date("Y")) {
                echo ' SELECTED';
            }
            echo '>' . $i . '</option>';
        } ?></select> @
        <select name="h"><?php for ($i = 0; $i <= 23; $i++) {
            echo '<option value="' . $i . '"';
            if ($i == date("H")) {
                echo ' SELECTED';
            }
            echo '>' . sprintf('%02d', $i) . '</option>';
        } ?></select> :
        <select name="m"><?php for ($i = 0; $i <= 59; $i++) {
            echo '<option value="' . $i . '"';
            if ($i == date("i")) {
                echo ' SELECTED';
            }
            echo '>' . sprintf('%02d', $i) . '</option>';
        } ?></select> :
        <select name="s"><?php for ($i = 0; $i <= 59; $i++) {
            echo '<option value="' . $i . '"';
            if ($i == date("s")) {
                echo ' SELECTED';
            }
            echo '>' . sprintf('%02d', $i) . '</option>';
        } ?></select>
    </div>

    <input type="submit" name="goconvert" class="goconvert" value="Convertir"/>

    <div id="resultat-convert">
        <?php echo time(); ?>
    </div>

</div>

<div id="footer">
    <select name="timezone" id="timezone">
        <option value="Europe/Paris">Europe/Paris</option>
        <option value="UTC">UTC</option>
    </select>
    <a href="http://www.betacie.com"><img src="/betacie.png"/></a>
</div>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="/unixtime.js"></script>

</body>
</html>

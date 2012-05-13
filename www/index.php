<?php date_default_timezone_set('Europe/Paris'); ?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>unixtime.fr - conversion temps unix</title>
	<meta name="description" content="Conversion gratuite et en temps réel de temps UNIX" />
	<link rel="stylesheet" media="screen" type="text/css" href="/style.css" />
	<script type="text/javascript" src="/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="/unixtime.js"></script>
</head>
<body>

<div id="header"></div>

<div id="contenu">

	<input type="text" name="timestamp" class="timestamp" value="<?=time()?>" />
	
	<div id="resultat_timestamp"><?=date("d/m/Y @ H:i:s")?></div>
	
	<div id="form_convert">
	<select name="dd"><?php for ($i=1;$i<=31;$i++) { echo "<option value=\"".$i."\""; if ($i == date("d")) { echo " SELECTED"; } echo ">".$i."</option>"; } ?></select> /
	<select name="mm"><?php for ($i=1;$i<=12;$i++) { echo "<option value=\"".$i."\""; if ($i == date("m")) { echo " SELECTED"; } echo ">".$i."</option>"; } ?></select> /
	<select name="yyyy"><?php for ($i=1980;$i<=2030;$i++) { echo "<option value=\"".$i."\""; if ($i == date("Y")) { echo " SELECTED"; } echo ">".$i."</option>"; } ?></select> @
	<select name="h"><?php for ($i=0;$i<=23;$i++) { echo "<option value=\"".$i."\""; if ($i == date("H")) { echo " SELECTED"; } echo ">".sprintf("%02d",$i)."</option>"; } ?></select> :
	<select name="m"><?php for ($i=0;$i<=59;$i++) { echo "<option value=\"".$i."\""; if ($i == date("i")) { echo " SELECTED"; } echo ">".sprintf("%02d",$i)."</option>"; } ?></select> :
	<select name="s"><?php for ($i=0;$i<=59;$i++) { echo "<option value=\"".$i."\""; if ($i == date("s")) { echo " SELECTED"; } echo ">".sprintf("%02d",$i)."</option>"; } ?></select>
	</div>
	
	<input type="submit" name="goconvert" class="goconvert" value="Convertir" />
	
	<div id="resultat_convert">
	<?php echo time(); ?>
	</div>

</div>

<div id="footer">
	<a href="http://www.betacie.com"><img src="/betacie.png" /></a>
</div>

</body>
</html>

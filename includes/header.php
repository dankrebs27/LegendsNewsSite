<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" type="text/css" href="legendsstyle.css">
<link href='https://fonts.googleapis.com/css?family=Poiret+One|Kaushan+Script|Lobster+Two:700italic|Alfa+Slab+One|Cinzel:700|Courgette' rel='stylesheet' type='text/css'>
<link href="favicon.ico" rel="icon" type="image/x-icon" />

<title><?php echo htmlspecialchars( $pageTitle )?></title>

</head>

<body>

	<div id="topNav">
		<div id="logo"></div>
		<!--Dropdown panel-->
		<div id="panel">
			<a href=".?action=position&amp;position=top"><div class="roleChoose">Top</div></a>
			<a href=".?action=position&amp;position=jungle"><div class="roleChoose">Jungle</div></a>
			<a href=".?action=position&amp;position=mid"><div class="roleChoose">Mid</div></a>
			<a href=".?action=position&amp;position=adc"><div class="roleChoose">ADC</div></a>
			<a href=".?action=position&amp;position=support"><div class="roleChoose">Support</div></a>
		</div>
		<div id="roleBtn"></div>
		
		<div id="lcsCon"></div>
		<div id="gameCon"></div>
		<div id="communCon"></div>
		
		<div id="linksContain">
			<span class="topLinks">ESPORTS</span>
			<span class="topLinks">GAME</span>
			<span class="topLinks">COMMUNITY</span>
			<span class="topLinks">ROLE CHOOSER</span>
		</div>
		<form>
			<input type="text" value="   Search"></input>
			<input type="submit" value=""></input>
		</form>
	</div>
	
	<div id="banner">
		
	</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<title>xNovaOne - Universum 1</title>
<meta http-equiv="content-language" content="en" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<link rel="stylesheet" type="text/css" href="./styles/css/jquery.css" />
<link rel="icon" href="favicon.ico" />
</head>
<body style="background:#000000;">
<div id="tooltip" class="tip"></div>
<table align="center">
<tr>
<td><font color="#FFFFFF" size="1" face="Arial"><center>Session ended</center></font></td>
</tr>
<tr>
<td><center><font color="#FFFFFF" size="1" face="Arial">You will be redirected in <span id="seconds"> 5 </ span> s</font></center></td>
</tr>
</table>
<script type="text/javascript">
    var second = 5;
	function Countdown(){
		if(second == 0)
			return;
			
		second--;
		$('#seconds').text(second);
	}
	window.setTimeout("window.location.href='./index.php'", 5000);
	window.setInterval("Countdown()", 1000);
</script>
<img src="./cronjobs.php?cron=teamspeak" alt="" height="1" width="1">
<script type="text/javascript">
var serverTime = new Date(2015, 2, 26, 8, 53, 31);
var localTime = new Date();
localTS = localTime.getTime();
var ServerTimezoneOffset = 3600 + localTime.getTimezoneOffset()*60;
var Gamename	= document.title;
var Ready		= "Ready";
var Skin		= "./styles/theme/gultra/";
var Lang		= "en";
var head_info	= "Information";
var auth		= 0;
</script>
<script type="text/javascript" src="scripts/jQuery.js?v=6.0"></script>
<script type="text/javascript" src="scripts/base.js?v=6.0"></script>
<script type="text/javascript">
var timerHandler = new TimerHandler();
function UhrzeitAnzeigen()
{
    var Sekunden = serverTime.getSeconds();
    serverTime.setSeconds(Sekunden+1);
    if(document.getElementById("servertime"))
		document.getElementById("servertime").innerHTML = getFormatedDate(serverTime.getTime(), '[M] [D] [d] [H]:[i]:[s]');
}
UhrzeitAnzeigen();
setInterval("UhrzeitAnzeigen()", 1000);



</script>
<script type="text/javascript" src="./scripts/gate.js"></script>
</div>
</body>
</html>
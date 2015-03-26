//topnav.js
//RealTimeRessisanzeige for 2Moons
// @version 1.0
// @copyright 2010 by ShadoX

function resourceTicker(res, init) {
	if(typeof init !== "undefined" && init === true)
		window.setInterval(function(){resourceTicker(res)}, 1000);
		
	var element	= document.getElementById(res.elem);

	var nrResource = Math.round(res.cur + res.hr / 3600 * (serverTime.getTime() - res.startTime) / 1000);
	if (nrResource < res.limit) 
	{
		element.innerHTML = "<b>"+NumberGetHumanReadable(nrResource)+"</b>";
	} else {
		element.innerHTML = "<b><span style='color:#ff0000'>"+NumberGetHumanReadable(res.cur)+"</span></b>";
	}
}

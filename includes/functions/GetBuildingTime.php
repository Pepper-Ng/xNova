<?php

/**
 _  \_/ |\ | /¯¯\ \  / /\    |¯¯) |_¯ \  / /¯¯\ |  |   |´¯|¯` | /¯¯\ |\ |5
 ¯  /¯\ | \| \__/  \/ /--\   |¯¯\ |__  \/  \__/ |__ \_/   |   | \__/ | \|Core.
 * @author: Copyright (C) 2011 by Brayan Narvaez (Prinick) developer of xNova Revolution
 * @author web: http://www.bnarvaez.com
 * @link: http://www.xnovarev.com

 * @package 2Moons
 * @author Slaver <slaver7@gmail.com>
 * @copyright 2009 Lucky <douglas@crockford.com> (XGProyecto)
 * @copyright 2011 Slaver <slaver7@gmail.com> (Fork/2Moons)
 * @copyright 2015 Pepper <pepper_ng@hotmail.com>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.4 (2015-03-11)
 * @link http://code.google.com/p/2moons/

 * Please do not remove the credits
*/
//editbypepper
if(!defined('INSIDE')) die('Hacking attempt!');

	function GetBuildingTime ($USER, $PLANET, $Element, $Destroy = false)
	{
		global $pricelist, $resource, $reslist, $requeriments;
		
		$CONF	= getConfig($USER['universe']);
		$level = isset($PLANET[$resource[$Element]]) ? $PLANET[$resource[$Element]] : $USER[$resource[$Element]];
				
		$Cost   = floor($pricelist[$Element]['metal'] * pow($pricelist[$Element]['factor'], $level)) + floor($pricelist[$Element]['crystal'] * pow($pricelist[$Element]['factor'], $level));
	
		if (in_array($Element, $reslist['build'])) {
			// BUILDINGS t = ( Metal + Crystal ) / ( game_speed * (1 + robotics) * 2^nanites )
			$time = $Cost / ($CONF['game_speed'] * (1 + $PLANET[$resource[14]]) * pow(2, $PLANET[$resource[15]]));
			if($USER['commander'] >= 1 xor $USER['raza'] == 0) {		
				$time -= ($time * 10/100);	
			} elseif($USER['commander'] >= 1 and $USER['raza'] == 0) {
				$time -= ($time * 20/100);
			}
		} elseif (in_array($Element, $reslist['fleet'])) {
			// SHIPS t = ( Metal + Crystal ) / ( game_speed * (1 + shipyard + robotics) * 2^nanites )
			@$time = $Cost / ($CONF['game_speed'] * (1 + $PLANET[$resource[14]] + $PLANET[$resource[21]]) * pow(2, $PLANET[$resource[15]]));
			if($USER['commander'] >= 1 xor $USER['raza'] == 1) {
				$time -= $time*(10/100);
			} elseif($USER['commander'] >= 1 and $USER['raza'] == 1) {
				$time -= $time*(20/100);
			}
		}elseif (in_array($Element, $reslist['defense'])) {
			// DEFENCES t = ( Metal + Crystal ) / ( game_speed * (1 + shipyard + robotics) * 2^nanites )
			@$time = $Cost / ($CONF['game_speed'] * (1 + $PLANET[$resource[14]] + $PLANET[$resource[21]]) * pow(2, $PLANET[$resource[15]]));
			if($USER['commander'] >= 1) {
				$time -= $time*(10/100);
			}
		} elseif (in_array($Element, $reslist['tech'])) {
			// RESEARCHES
			if(is_array($PLANET[$resource[31].'_inter']))
			{
				$Level = 0;
				foreach($PLANET[$resource[31].'_inter'] as $Levels)
				{
					if($Levels >= $requeriments[$Element][31])
						$Level += $Levels;
				}
			} else{
				$Level	= $PLANET[$resource[31]];
			}
			
			// t = (Metal + Crystal) / ( research_speed * (1 + researchcenter) * 2^university )
			$time = $Cost / ( ($CONF['game_speed']) * (1 + $Level) * pow(2, $PLANET[$resource[6]]));
			if($USER['commander'] >= 1 and $USER['technocratic'] >= 1) {
				$time -= $time*(35/100);
			} elseif($USER['commander'] >= 1 and $USER['technocratic'] <= 0) {
				$time -= $time*(10/100);
			} elseif($USER['commander'] <= 0 and $USER['technocratic'] >= 1) {
				$time = $time*(25/100);
			} elseif($USER['commander'] >= 1 and $USER['technocratic'] >= 1 and $USER['raza'] == 1) {
				$time -= $time*(45/100);
			} elseif($USER['commander'] >= 1 and $USER['technocratic'] <= 0 and $USER['raza'] == 1) {
				$time = $time*(20/100);
			}elseif($USER['commander'] <= 0 and $USER['technocratic'] >= 1 and $USER['raza'] == 1) {
				$time = $time*(35/100);
			}
        }
		
		if(!$Destroy)
			$time	= floor($time * 3600);
		else
			$time	= floor($time * 1300);
		
		return max($time, $CONF['min_build_time']);
	}

?>
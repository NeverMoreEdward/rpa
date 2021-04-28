<?php

/**
 * 
 */
class Client
{

    public function getGreeting() {

		$now_time = strtotime(date('H:i:s',time()));
		
		if ($now_time > strtotime('6:00:00') and $now_time <= strtotime('12:00:00')) {
		    return('Good morning');
		}
		elseif ($now_time > strtotime('12:00:00') and $now_time <= strtotime('18:00:00')) {
		    return('Good afternoon');
		}
		else {
		    return('Good evening');
		}

    }
}
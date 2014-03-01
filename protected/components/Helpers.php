<?php

class Helpers{
	
	function converToMinutes($duration, $durationEntity){
		
		switch($durationEntity){
				
			case 'h':
				$duration = $duration * 60;
				break;
			
			case 'd':
				$duration = ($duration * 60) * 24; 
				break;			
		}
		
		return $duration;
		
	}
	
		
	//get minutes return a string with days, hours and minutes
	function formatWorkingTime($workedMinutes){
		
		$inputSeconds = $workedMinutes * 60; 
		$secondsInAMinute = 60;
	    $secondsInAnHour  = 60 * $secondsInAMinute;
	    $secondsInADay    = 24 * $secondsInAnHour;

	    // extract days
	    $days = floor($inputSeconds / $secondsInADay);

	    // extract hours
	    $hourSeconds = $inputSeconds % $secondsInADay;
	    $hours = floor($hourSeconds / $secondsInAnHour);

	    // extract minutes
	    $minuteSeconds = $hourSeconds % $secondsInAnHour;
	    $minutes = floor($minuteSeconds / $secondsInAMinute);

	    // extract the remaining seconds
	    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
	    $seconds = ceil($remainingSeconds);

	    // return the final array
	    $obj = array(
	        'd' => (int) $days,
	        'h' => (int) $hours,
	        'm' => (int) $minutes,
	        's' => (int) $seconds,
	    );
	    return $obj;		
	}

}
	
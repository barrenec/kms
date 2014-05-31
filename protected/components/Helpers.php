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
	
	// translates the db ids for membertyps in something more readible
	static function translateAssociationMember($memberTypId){

		switch($memberTypId){
				
			case '1':
				$meberTypName = 'Member';
				break;
			
			case '2':
				$meberTypName = 'Founder'; 
				break;			

			default:	
				$meberTypName = 'No member'; 
		}
		
		return $meberTypName;	

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

		return $days.' Days '.$hours.' Hours '.$minutes.' Minutes';
		
	    $obj = array(
	        'd' => (int) $days,
	        'h' => (int) $hours,
	        'm' => (int) $minutes,
	    );
	    return $obj;		
	}

}
	
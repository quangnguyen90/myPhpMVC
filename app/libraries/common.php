<?php

class Common {
	function __construct(){
       
    }

	/**
	 * Calculate time ago
	 *
	 * @param	datetime	
	 * @param	bool
	 * @return	string
	 */
	function calculate_time_ago($datetime, $full = false) {
	    $now = new DateTime();
	    $ago = new DateTime($datetime);
	    $diff = $now->diff($ago);

	    if ($diff->days > 28) {
	    	return date('j F Y', strtotime($datetime));
	    } else {
		    $diff->w = floor($diff->d / 7);
		    $diff->d -= $diff->w * 7;

		    $string = array(
		        'w' => 'week',
		        'd' => 'day',
		        'h' => 'hour',
		        'i' => 'minute',
		        's' => 'second',
		    );
		    foreach ($string as $k => &$v) {
		        if ($diff->$k) {
		            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
		        } else {
		            unset($string[$k]);
		        }
		    }

		    if (!$full) $string = array_slice($string, 0, 1);
		    return $string ? implode(', ', $string) . ' ago' : 'just now';
	    }
	}
}

/* End of file Common.php */
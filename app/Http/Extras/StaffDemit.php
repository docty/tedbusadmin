<?php

namespace App\Http\Extras;







class StaffDemit  
{
	
	function __construct()
	{
		
	}


	public static function staffUrl($request)
	{
		$microtime = microtime();
        $comps = explode(' ', $microtime);
        $content = $request->contact.''.$request->surname.$comps[1];
        return md5($content);
	}
}












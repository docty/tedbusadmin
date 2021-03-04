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
        $content = $request->mobile.''.$request->lastName.$comps[1];
        return md5($content);
	}
}












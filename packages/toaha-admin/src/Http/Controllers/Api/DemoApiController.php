<?php

namespace Toaha\Directory\FolderName\Http\Controllers\Api;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toaha\Directory\FolderName\Http\Traits\UtilityFunction;

class DemoApiController extends Controller
{
    use UtilityFunction;
    
    public static $visiblePermissions = [
        'demo_function'        => 'Demo Function Page'
    ];
    
	public function demo_function()
	{
        try
        {
            $test = '...';
            return response()->json($test);
        }
        catch(Exception $e) {
            return response()->json($this->catchException($e), $this->exceptionCode($e));
        }
    }
    
   

}



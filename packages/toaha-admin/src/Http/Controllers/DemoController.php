<?php

namespace Toaha\Directory\FolderName\Http\Controllers;

use App\Http\Controllers\Controller;

class DemoController extends Controller
{
	
    public function demo_function()
	{
		return view("path::filename");
	}

}

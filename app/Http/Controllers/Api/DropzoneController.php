<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class DropzoneController extends Controller
{
    public function upload(Request $request)
    {
		$file = null;
		if($request->hasFile('file')){ 
			$file = $request->file('file')->store('dropzones');
		}

		return response()->json([
			
            'request' => $request->all(),
            'file' => $file,
			
		]); 
    }
}

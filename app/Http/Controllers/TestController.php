<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function TestApi  (request $Request) {
        $page = $request->query('page', null);
    
        return response()->json(['page' => $page]);
    }

    function ApiData (request $Request){
        $data = [
            'name' => 'John Doe',
            'age' => 25,
        ];
    
        return response()->json([
            'message' => 'Success',
            'data' => $data,
        ]);

    }

    function FileUpload (request $request) {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
    
            $file->storeAs('public/uploads', $filename);
    
            // You can do something with the file path or perform additional logic here
    
            return response()->json(['message' => 'File uploaded successfully']);
        }
    
        return response()->json(['message' => 'No file uploaded'], 400);
}
}

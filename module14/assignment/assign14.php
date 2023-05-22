<?php

// Answer for Question 1:
use Illuminate\Http\Request;
public function store(Request $request)
{
    $name = $request->input('name');
}




// Answer for Question 2:
use Illuminate\Http\Request;
public function retrieveUserAgent(Request $request)
{
    $userAgent = $request->header('User-Agent');
}




// Answer for Question 3:
use Illuminate\Http\Request;
public function processRequest(Request $request)
{
    $page = $request->query('page', null);
}
    



// Answer for Question 4:
use Illuminate\Http\JsonResponse;
public function createResponse()
{
    $data = [
        'name' => 'John Doe',
        'age' => 25
    ];

    $response = [
        'message' => 'Success',
        'data' => $data
    ];

    return new JsonResponse($response);
}
// return a JSON response 
{
    "message": "Success",
    "data": {
        "name": "John Doe",
        "age": 25
    }
}




// Answer for Question 5:
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

public function handleFileUpload(Request $request)
{
    
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $filePath = $file->store('uploads', 'public');
        return $filePath;
    }
}
    


// Answer for Question 6:
use Illuminate\Support\Facades\Request;
$rememberToken = Request::cookie('remember_token', null);




// Answer for Question 7:
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');
    
    $response = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];
    
    return response()->json($response);
});
    
    
    

    
    
    
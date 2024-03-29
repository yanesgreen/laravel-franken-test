<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    $responseData = [
        'status' => 'OK',
        'code' => 202,
        'data' => [
            'message' => 'Welcome To My API'
        ]
    ];

    return response()->json($responseData, 200);
});

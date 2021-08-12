<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tes', function (Request $request) {
    $data = [
        'nama' => $request->name,
        'email' => $request->email,
        'pesan' => $request->message
    ];
    Mail::send('pesan', $data, function ($message) use ($request) {
        $message->subject($request->subject);
        $message->to('eksype2@gmail.com');
    });
    return response()->json(["pesan" => "Berhasil"]);
});

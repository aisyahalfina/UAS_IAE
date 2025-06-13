<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

Route::post('/notify', function (Request $request) {
    $userId = $request->input('user_id');

    if (!$userId) {
        return response()->json(['error' => 'user_id wajib diisi'], 400);
    }

    Log::info("🔔 Notifikasi terkirim ke user ID: $userId");

    return response()->json([
        'status' => '✅ Notifikasi berhasil dikirim',
        'user_id' => $userId
    ]);
});

Route::get('/', function () {
    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return response()->json(['message' => 'OK']);
});

Route::get('biodata', function () {
    return response()->json([
        'nama' => 'Alisa_Putri_Amalia_',
        'nim' => '60200124063',
        'kelas' => 'B'
    ]);
});
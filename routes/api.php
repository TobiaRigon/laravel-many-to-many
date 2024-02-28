<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


Route::group(['prefix' => '/v1'], function() {
    Route::get('test', [ApiController::class, 'getTest'])->name ('api.test');
});


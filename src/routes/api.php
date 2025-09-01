<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tokencontroller;




Route::group(['middleware' => ['JWTToken']], function () {


});




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use function Termwind\ask;

Route::get('/', function () {
    return view('welcome');
});

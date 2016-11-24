<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('redpm')->user();

    //dd($users);

    return view('redpm.home');
})->name('home');


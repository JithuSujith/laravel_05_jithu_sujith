<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PublicController::class,'Home'] )->name('Homepage');

Route::get('/contactus',[MailController::class,'contactus'] )->name('contact us');

Route::post('/sendmail',[MailController::class,'sendmail'] )->name('send mail');

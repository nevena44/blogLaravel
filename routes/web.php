<?php

Route::get('/','FrontendController@index')->name('index');
Route::get('/single/{id}','FrontendController@single')->name('single');
Route::get('/contact','FrontendController@cont')->name('contact');
Route::get('/auth','FrontendController@auth')->name('auth');
Route::post('/contact','FrontendController@contt')->name('cont');
Route::get('/kljucne','FrontendController@kljucne')->middleware('admin');
Route::post('/kljucne','FrontendController@kljucne1')->middleware('admin');
Route::get('/kom/edit/{id}','FrontendController@editKom')->name('edit');
Route::post('/kom/update/{id}','FrontendController@updateKom')->name('update');
Route::post('/kom/delete/{id}','FrontendController@deleteKom')->name('delete');

Route::get('/log','LogController@log')->name('log');
Route::post('/log','LogController@login')->name('logovanje');
Route::get('/reg','LogController@reg')->name('reg');
Route::post('/reg','LogController@register')->name('regg');
Route::get('/logout','LogController@logout')->name('logout');
Route::post('/komentar/{id}','FrontendController@kom')->name('kom');

Route::get('/admin','FrontendController@admin')->middleware('admin');
Route::resource('/admin/korisnik','Admin\KorisnikController');
Route::resource('/admin/hash','Admin\HashController')->middleware('admin');
Route::resource('/admin/komentar','Admin\KomentarController')->middleware('admin');
Route::resource('/admin/post','Admin\PostController')->middleware('admin');
Route::resource('/admin/slika','Admin\SlikaController')->middleware('admin');
Route::resource('/admin/uloga','Admin\UlogaController')->middleware('admin');
Route::get('/admin/kontakt','FrontendController@prikazAdmin')->middleware('admin');

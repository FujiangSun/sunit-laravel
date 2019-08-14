<?php

Route::get('/', 'SUnitController@index');
Route::post('/', 'SUnitController@store')->name('sunit.store');

// 测试路由
Route::get('test', 'TestController@index');

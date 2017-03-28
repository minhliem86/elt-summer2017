<?php

Route::group(['namespace' => 'App\Modules\Frontend\Controllers'], function(){
  Route::get('/',['as'=>'f.homepage','uses'=>'HomeController@getIndex']);
});

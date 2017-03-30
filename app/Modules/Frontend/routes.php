<?php

Route::group(['namespace' => 'App\Modules\Frontend\Controllers'], function(){
  Route::get('/',['as'=>'f.homepage','uses'=>'HomeController@getIndex']);

  Route::get('/lien-he',['as'=>'f.getContact','uses'=>'ContactController@getIndex']);

  Route::get('/amazing-race',['as'=>'f.getAmazing','uses'=>'AmazingController@getAmazingRace']);

  Route::get('/amazing-summer',['as'=>'f.getAmazingSummer','uses'=>'AmazingController@getAmazingSummer']);

  Route::get('/trai-nghiem-mua-he',['as'=>'f.getTestimonial','uses'=>'TestimonialController@getIndex']);
});

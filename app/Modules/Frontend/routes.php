<?php

Route::group(['middleware'=>['getProperty'],'namespace' => 'App\Modules\Frontend\Controllers'], function(){
  Route::get('/',['as'=>'f.homepage','uses'=>'HomeController@getIndex']);

  Route::get('/lien-he',['as'=>'f.getContact','uses'=>'ContactController@getIndex']);
  Route::post('/lien-he',['as'=>'f.postContact','uses'=>'ContactController@postRegister']);
  Route::post('/get-Center',['as'=>'f.ajaxCenter','uses'=>'ContactController@postAjaxCenter']);

  Route::get('/amazing-race',['as'=>'f.getAmazing','uses'=>'AmazingController@getAmazingRace']);

  Route::get('/amazing-summer',['as'=>'f.getAmazingSummer','uses'=>'AmazingController@getAmazingSummer']);

  Route::get('/trai-nghiem-mua-he',['as'=>'f.getTestimonial','uses'=>'TestimonialController@getIndex']);
  Route::post('/get-data',['as'=>'f.postDataTesti','uses'=>'TestimonialController@postAjax']);

  Route::get('/album/{year}',['as'=>'f.getAlbum', 'uses'=>'AlbumController@getIndex'])->where(['year'=>'[0-9._\-]+']);
  /*THANKS*/
  Route::get('/thanks',['as'=>'f.getThanks','uses'=>'ContactController@getThanks']);

});

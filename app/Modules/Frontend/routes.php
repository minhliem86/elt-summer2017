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

  // GET ALBUM PAGE
  Route::get('/album',['as'=>'f.getAlbum', 'uses'=>'AlbumController@getIndex']);
  // AJAX VIDEO
  Route::post('album/loadVideo',['as'=>'f.postAjaxVideo','uses'=>'AlbumController@ajaxLoadVideo']);
  // LOAD MORE PHOTO
  Route::post('album/loadPhoto',['as'=>'f.postAjaxGetAllImg','uses'=>'AlbumController@postAjaxGetAllImg']);

  Route::get('/album/{id_album}/photo', ['as'=>'f.getImage', 'uses'=>'AlbumController@getImgByAlbum'])->where('id_album','[0-9a-zA-Z_.+\-]+');

  Route::post('/photo/load',['as'=>'f.postAjaxPhoto', 'uses'=>'AlbumController@ajaxLoadPhoto']);
  Route::post('/photo/next',['as'=>'f.postAjaxNextPhoto', 'uses'=>'AlbumController@ajaxNextPhoto']);
  Route::post('/photo/prev',['as'=>'f.postAjaxPrevPhoto', 'uses'=>'AlbumController@ajaxPrevPhoto']);

  /*THANKS*/
  Route::get('/thanks',['as'=>'f.getThanks','uses'=>'ContactController@getThanks']);

});

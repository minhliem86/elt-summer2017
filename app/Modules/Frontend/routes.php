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
  Route::get('/thu-vien-hinh-anh',['as'=>'f.getAlbum', 'uses'=>'AlbumController@getIndex']);
  // AJAX VIDEO
  Route::post('/album/loadVideo',['as'=>'f.postAjaxVideo','uses'=>'AlbumController@ajaxLoadVideo']);
  // LOAD MORE PHOTO
  Route::post('/album/loadPhoto',['as'=>'f.postAjaxGetAllImg','uses'=>'AlbumController@postAjaxGetAllImg']);

  Route::get('/thu-vien-hinh-anh/{acti_slug}',['as'=>'f.getAlbumByAct', 'uses'=>'AlbumController@getAlbumByAct']);

  Route::get('/thu-vien-hinh-anh/{album_slug}/photo', ['as'=>'f.getImage', 'uses'=>'AlbumController@getImgByAlbum'])->where('id_album','[0-9a-zA-Z_.+\-]+');

  Route::post('/photo/load',['as'=>'f.postAjaxPhoto', 'uses'=>'AlbumController@ajaxLoadPhoto']);
  Route::post('/photo/next',['as'=>'f.postAjaxNextPhoto', 'uses'=>'AlbumController@ajaxNextPhoto']);
  Route::post('/photo/prev',['as'=>'f.postAjaxPrevPhoto', 'uses'=>'AlbumController@ajaxPrevPhoto']);

  Route::get('/photo/{id}',['as'=>'f.getPhotoDetail', 'uses'=>'AlbumController@getPhotoDetail'])->where('id','[0-9]+');

  // LOGIN CLIENT
  Route::get('/client',['as'=>'f.getlogin','uses'=>'Auth\AuthController@getLogin']);
	Route::post('/client',['as'=>'f.postLogin','uses'=>'Auth\AuthController@postLogin']);

  Route::get('/doi-mat-khau',['as'=>'f.getChangpass','uses'=>'Auth\AuthController@getChangePass']);
  Route::post('/doi-mat-khau',['as'=>'f.postChangpass','uses'=>'Auth\AuthController@postChangePass']);

  Route::get('sendEmailReset',['as'=>'f.getSendEmailReset','uses'=>'Auth\PasswordController@getEmail']);
  Route::post('sendEmailReset',['as'=>'f.postSendEmailReset','uses'=>'Auth\PasswordController@postEmail']);
  Route::get('resetPassword/{token?}',['as'=>'f.getresetPassword','uses'=>'Auth\PasswordController@getReset']);
  Route::post('resetPassword',['as'=>'f.postresetPassword','uses'=>'Auth\PasswordController@postReset']);

  // IMPORT USER
  Route::get('/import-user', ['as'=>'f.import-user', 'uses' => 'ImportController@getImport']);
  Route::post('/import-user', ['as'=>'f.postimport-user', 'uses' => 'ImportController@postImport']);

  // EVENT
  Route::get('/lich-hoc', ['middleware'=>'client_checklogin', 'as'=>'f.lichhoc', 'uses'=>'ScheduleController@index']);

  /*THANKS*/
  Route::get('/thanks',['as'=>'f.getThanks','uses'=>'ContactController@getThanks']);

  Route::get('test', function(){
     return view('Frontend::kiddom.event') ;
  });

});

<?php

Route::group(['prefix'=>'admin','namespace'=>'App\Modules\Admin\Controllers'],function(){
	// Route::get('/role',function(){
	// 	$role = new App\Models\Role;
	// 	$role->name = 'Admin';
	// 	$role->display_name = 'admin';
	// 	$role->description = " Can login in CMS";
	// 	$role->save();
	// 	return "Role create";
	// });
	Route::get('login',['middleware'=>'Checklogined','as'=>'admin.getlogin','uses'=>'Auth\AuthController@getLogin']);
	Route::post('login',['middleware'=>'Checklogined','as'=>'admin.postLogin','uses'=>'Auth\AuthController@postLogin']);

	Route::get('register',['middleware'=>'Checklogined','as'=>'admin.getRegister','uses'=>'Auth\AuthController@getRegister']);
	Route::post('register',['middleware'=>'Checklogined', 'as'=>'admin.postRegister','uses'=>'Auth\AuthController@postRegister']);

	Route::get('sendEmailReset',['as'=>'admin.getSendEmailReset','uses'=>'Auth\PasswordController@getEmail']);
	Route::post('sendEmailReset',['as'=>'admin.postSendEmailReset','uses'=>'Auth\PasswordController@postEmail']);
	Route::get('resetPassword/{token?}',['as'=>'admin.getresetPassword','uses'=>'Auth\PasswordController@getReset']);
	Route::post('resetPassword',['as'=>'admin.postresetPassword','uses'=>'Auth\PasswordController@postReset']);

	Route::get('logout',['as'=>'admin.getLogout','uses'=>'Auth\AuthController@getLogout']);

	Route::group(['middleware'=>'admin'],function(){
		Route::get('dashboard',['as'=>'admin','uses'=>'AdminController@index']);

		/*PROMOTION*/
		Route::post('promotion/deleteall',['as'=>'admin.promotion.deleteall','uses'=>'PromotionController@deleteAll']);
		Route::resource('promotion','PromotionController');



		/*TESTIMONIAL*/
		Route::post('testimonial/deleteall',['as'=>'admin.testimonial.deleteall','uses'=>'TestimonialController@deleteAll']);
		Route::resource('testimonial','TestimonialController');

		/*Image*/
		Route::post('image/deleteall',['as'=>'admin.image.deleteall','uses'=>'ImageController@deleteAll']);
		Route::resource('image','ImageController');

		/*ALBUM*/
		Route::post('album/deleteall',['as'=>'admin.album.deleteall','uses'=>'AlbumController@deleteAll']);
		Route::resource('album','AlbumController');

		/*VIDEO*/
		Route::post('video/deleteall',['as'=>'admin.video.deleteall','uses'=>'VideoController@deleteAll']);
		Route::resource('video','VideoController');

		/*Activity*/
		Route::post('activity/deleteall',['as'=>'admin.activity.deleteall','uses'=>'ActivityController@deleteAll']);
		Route::resource('activity','ActivityController');

		/*Tour*/
		Route::post('tour/deleteall',['as'=>'admin.tour.deleteall','uses'=>'TourController@deleteAll']);
		Route::resource('tour','TourController');

		/*CHANGE PASS*/
		Route::get('password',['as'=>'admin.getChangePass','uses'=>'AdminController@getChangePass']);
		Route::post('password',['as'=>'admin.postChangePass','uses'=>'AdminController@postChangePass']);
	});


});

<?php
Route::pattern('slug','(.*)');
Route::pattern('id','([0-9]*)');

Route::group(['namespace' => 'cskh'], function(){
	Route::get('', [
		'uses' => 'IndexController@index',
		'as'   => 'public.index.index'
	]);

	Route::get('send_email', [
		'uses' => 'EmailController@sendEmail',
		'as'   => 'public.email.email'
	]);

	Route::post('loginindex', [
		'uses' => 'IndexController@postlogin',
		'as'   => 'public.login.login'
	]);
	Route::get('reg', [
		'uses' => 'IndexController@reg',
		'as'   => 'public.index.reg'
	]);
	Route::post('reg', [
		'uses' => 'IndexController@postreg',
		'as'   => 'public.index.reg'
	]);
	/////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////--------------------------
	Route::get('hosothutuc-capdienmoi-hoso', [
		'uses' => 'HosoThutucController@capdienhoso',
		'as'   => 'public.hosothutuc.capdienhoso'
	]);
	Route::get('hosothutuc-capdienmoi-yeucau', [
		'uses' => 'HosoThutucController@capdienyeucau',
		'as'   => 'public.hosothutuc.capdienyeucau'
	]);
	Route::post('hosothutuc-capdienmoi-yeucau', [
		'uses' => 'HosoThutucController@postCapdien',
		'as'   => 'public.hosothutuc.capdienyeucau'
	]);
	Route::get('change1', [
		'uses' => 'HosoThutucController@change1',
		'as'   => 'public.hosothutuc.change1'
	]);
	
	////////////////////////////////--------------------------
	Route::get('hosothutuc-thaydoidien-huongdan', [
		'uses' => 'HosoThutucController@thaydoihuongdan',
		'as'   => 'public.hosothutuc.thaydoihuongdan'
	]);
	Route::get('hosothutuc-thaydoidien-yeucau', [
		'uses' => 'HosoThutucController@thaydoiyeucau',
		'as'   => 'public.hosothutuc.thaydoiyeucau'
	]);
	Route::get('hosothutuc-thaydoidien-yeucau2', [
		'uses' => 'HosoThutucController@thaydoiyeucau2',
		'as'   => 'public.hosothutuc.thaydoiyeucau2'
	]);
	Route::get('hosothutuc-thaydoidien-thaydoithongtin', [
		'uses' => 'HosoThutucController@thaydoittkh',
		'as'   => 'public.hosothutuc.thaydoittkh'
	]);
	Route::get('hosothutuc-thaydoidien-thaydoinhansms', [
		'uses' => 'HosoThutucController@thaydoinhansms',
		'as'   => 'public.hosothutuc.thaydoinhansms'
	]);
	////////////////////////////////--------------------------
	Route::get('hosothutuc-lapdatcongto-bieugia', [
		'uses' => 'HosoThutucController@bieugia',
		'as'   => 'public.hosothutuc.bieugia'
	]);
	////////////////////////////////--------------------------
	Route::get('hosothutuc-giabandien-giabanle', [
		'uses' => 'HosoThutucController@giabanle',
		'as'   => 'public.hosothutuc.giabanle'
	]);
	Route::get('hosothutuc-giabandien-giabanbuon', [
		'uses' => 'HosoThutucController@giabanbuon',
		'as'   => 'public.hosothutuc.giabanbuon'
	]);
	Route::get('hosothutuc-giabandien-tinh1', [
		'uses' => 'HosoThutucController@tinh1',
		'as'   => 'public.hosothutuc.tinh1'
	]);
	Route::get('hosothutuc-giabandien-tinh2', [
		'uses' => 'HosoThutucController@tinh2',
		'as'   => 'public.hosothutuc.tinh2'
	]);
	/////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////--------------------------
	Route::get('thanhtoantiendien-lichsu', [
		'uses' => 'ThanhtoanTiendienController@lichsu',
		'as'   => 'public.thanhtoantiendien.lichsu'
	]);
	Route::post('thanhtoantiendien-lichsu', [
		'uses' => 'ThanhtoanTiendienController@postlichsu',
		'as'   => 'public.thanhtoantiendien.lichsu'
	]);
	////////////////////////////////--------------------------
	Route::get('thanhtoantiendien-thanhtoanonline', [
		'uses' => 'ThanhtoanTiendienController@thanhtoanonline',
		'as'   => 'public.thanhtoantiendien.thanhtoanonline'
	]);
	Route::get('thanhtoantiendien-thanhtoannganhang', [
		'uses' => 'ThanhtoanTiendienController@thanhtoannganhang',
		'as'   => 'public.thanhtoantiendien.thanhtoannganhang'
	]);
	Route::get('thanhtoantiendien-thanhtoandienluc', [
		'uses' => 'ThanhtoanTiendienController@thanhtoandienluc',
		'as'   => 'public.thanhtoantiendien.thanhtoandienluc'
	]);
	Route::get('thanhtoantiendien-thanhtoantrunggian', [
		'uses' => 'ThanhtoanTiendienController@thanhtoantrunggian',
		'as'   => 'public.thanhtoantiendien.thanhtoantrunggian'
	]);
	////////////////////////////////--------------------------
	Route::get('thanhtoantiendien-diemthanhtoan', [
		'uses' => 'ThanhtoanTiendienController@diemthanhtoan',
		'as'   => 'public.thanhtoantiendien.diemthanhtoan'
	]);
	////////////////////////////////--------------------------
	Route::get('thanhtoantiendien-tracuuhoadon', [
		'uses' => 'ThanhtoanTiendienController@tracuuhoadon',
		'as'   => 'public.thanhtoantiendien.tracuuhoadon'
	]);
	/////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////--------------------------
	Route::get('lichngungcungcapdien-theokhuvuc', [
		'uses' => 'LichNgungCCdienController@theokhuvuc',
		'as'   => 'public.lichngungcungcapdien.theokhuvuc'
	]);
	Route::get('lichngungcungcapdien-theokhachhang', [
		'uses' => 'LichNgungCCdienController@theokhachhang',
		'as'   => 'public.lichngungcungcapdien.theokhachhang'
	]);
	/////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////--------------------------
	Route::get('tracuukhac-cauhoithuonggap', [
		'uses' => 'TraCuuKhacController@cauhoithuonggap',
		'as'   => 'public.tracuukhac.cauhoithuonggap'
	]);
	Route::get('tracuukhac-vbphatluat', [
		'uses' => 'TraCuuKhacController@vbphatluat',
		'as'   => 'public.tracuukhac.vbphatluat'
	]);
});	


Route::group(['namespace'=>'Admin','prefix' => 'admincp','middleware' => 'auth'],
	function(){
		Route::get('', [
			'uses' => 'IndexController@index',
			'as'   => 'admin.index.index'
		]);
		Route::group(['prefix' => 'loaidien'],
		function(){
			//index
			Route::get('',[
				'uses' => 'LoaiDienController@index',
				'as' => 'admin.loaidien.index'
			]);
			Route::get('edit/{id}',[
				'uses' => 'LoaiDienController@edit',
				'as' => 'admin.loaidien.edit'
			]);
			Route::post('edit/{id}',[
				'uses' => 'LoaiDienController@update',
				'as' => 'admin.loaidien.update'
			]);
			Route::get('add',[
				'uses' => 'LoaiDienController@create',
				'as' => 'admin.loaidien.create'
			]);
			Route::post('add',[
				'uses' => 'LoaiDienController@store',
				'as' => 'admin.loaidien.create'
			]);
			Route::get('del/{id}',[
				'uses' => 'LoaiDienController@destroy',
				'as' => 'admin.loaidien.destroy'
			]);
		});
		Route::group(['prefix' => 'bgd'],
		function(){
			//index
			Route::get('',[
				'uses' => 'BGDController@index',
				'as' => 'admin.bgd.index'
			]);
			Route::get('edit/{id}',[
				'uses' => 'BGDController@edit',
				'as' => 'admin.bgd.edit'
			]);
			Route::post('edit/{id}',[
				'uses' => 'BGDController@update',
				'as' => 'admin.bgd.update'
			]);
			Route::get('add',[
				'uses' => 'BGDController@create',
				'as' => 'admin.bgd.create'
			]);
			Route::post('add',[
				'uses' => 'BGDController@store',
				'as' => 'admin.bgd.create'
			]);
			Route::get('del/{id}',[
				'uses' => 'BGDController@destroy',
				'as' => 'admin.bgd.destroy'
			]);
		});
		Route::group(['prefix' => 'xa'],
		function(){
			//index
			Route::get('',[
				'uses' => 'XaController@index',
				'as' => 'admin.xa.index'
			]);
			Route::get('edit/{id}',[
				'uses' => 'XaController@edit',
				'as' => 'admin.xa.edit'
			]);
			Route::post('edit/{id}',[
				'uses' => 'XaController@update',
				'as' => 'admin.xa.update'
			]);
			Route::get('add',[
				'uses' => 'XaController@create',
				'as' => 'admin.xa.create'
			]);
			Route::post('add',[
				'uses' => 'XaController@store',
				'as' => 'admin.xa.create'
			]);
			Route::get('del/{id}',[
				'uses' => 'XaController@destroy',
				'as' => 'admin.xa.destroy'
			]);
		});
		Route::group(['prefix' => 'thon'],
		function(){
			//index
			Route::get('',[
				'uses' => 'ThonController@index',
				'as' => 'admin.thon.index'
			]);
			Route::get('edit/{id}',[
				'uses' => 'ThonController@edit',
				'as' => 'admin.thon.edit'
			]);
			Route::post('edit/{id}',[
				'uses' => 'ThonController@update',
				'as' => 'admin.thon.update'
			]);
			Route::get('add',[
				'uses' => 'ThonController@create',
				'as' => 'admin.thon.create'
			]);
			Route::post('add',[
				'uses' => 'ThonController@store',
				'as' => 'admin.thon.create'
			]);
			Route::get('del/{id}',[
				'uses' => 'ThonController@destroy',
				'as' => 'admin.thon.destroy'
			]);
		});
		Route::group(['prefix'=>'users'],
		function(){
		//index
		Route::get('',[
			'uses' => 'UserController@index',
			'as' => 'admin.user.index'
		]); 
		//add
		Route::get('add',[
			'uses' => 'UserController@create',
			'as' => 'admin.user.create'
		]);
		Route::post('add',[
			'uses' => 'UserController@store',
			'as' => 'admin.user.store'
		]);

		//del
		Route::get('del/{id}',[
			'uses' => 'UserController@destroy',
			'as' => 'admin.user.destroy'
		]);
		//edit
		Route::get('edit/{id}',[
			'uses' => 'UserController@edit',
			'as' => 'admin.user.edit'
		]);
		Route::post('edit/{id}',[
			'uses' => 'UserController@update',
			'as' => 'admin.user.edit'
		]);
		
	});
		Route::group(['prefix'=>'nguoidungdien'],
		function(){
		//index
		Route::get('',[
			'uses' => 'NDDController@index',
			'as' => 'admin.ndd.index'
		]); 
		//add
		Route::get('add',[
			'uses' => 'NDDController@create',
			'as' => 'admin.ndd.create'
		]);
		Route::post('add',[
			'uses' => 'NDDController@store',
			'as' => 'admin.ndd.store'
		]);

		//del
		Route::get('del/{id}',[
			'uses' => 'NDDController@destroy',
			'as' => 'admin.ndd.destroy'
		]);
		//edit
		Route::get('edit/{id}',[
			'uses' => 'NDDController@edit',
			'as' => 'admin.ndd.edit'
		]);
		Route::post('edit/{id}',[
			'uses' => 'NDDController@update',
			'as' => 'admin.ndd.edit'
		]);
		Route::get('ajax',[
			'uses' => 'NDDController@ajax',
			'as' => 'admin.ndd.ajax'
		]);
		Route::get('change',[
			'uses' => 'NDDController@change',
			'as' => 'admin.ndd.change'
		]);
		
	});
		Route::group(['prefix'=>'customer'],
		function(){
		//index
		Route::get('',[
			'uses' => 'KHController@index',
			'as' => 'admin.cus.index'
		]); 
		
		//del
		Route::get('del/{id}',[
			'uses' => 'KHController@destroy',
			'as' => 'admin.cus.destroy'
		]);
		//edit
		Route::get('edit/{id}',[
			'uses' => 'KHController@edit',
			'as' => 'admin.cus.edit'
		]);
		Route::post('edit/{id}',[
			'uses' => 'KHController@update',
			'as' => 'admin.cus.edit'
		]);
		Route::get('ajax',[
			'uses' => 'KHController@ajax',
			'as' => 'admin.cus.ajax'
		]);
	});

		Route::group(['prefix'=>'dong-ho'],
		function(){
		//index
		Route::get('',[
			'uses' => 'DongHoController@index',
			'as' => 'admin.dho.index'
		]); 
		//add
		Route::get('add',[
			'uses' => 'DongHoController@create',
			'as' => 'admin.dho.create'
		]);
		Route::post('add',[
			'uses' => 'DongHoController@store',
			'as' => 'admin.dho.store'
		]);

		//del
		Route::get('del/{id}',[
			'uses' => 'DongHoController@destroy',
			'as' => 'admin.dho.destroy'
		]);
		//edit
		Route::get('edit/{id}',[
			'uses' => 'DongHoController@edit',
			'as' => 'admin.dho.edit'
		]);
		Route::post('edit/{id}',[
			'uses' => 'DongHoController@update',
			'as' => 'admin.dho.edit'
		]);
		Route::get('ajax',[
			'uses' => 'DongHoController@ajax',
			'as' => 'admin.dho.ajax'
		]);
	});

	Route::group(['prefix'=>'hoadon'],
		function(){
		//index
		Route::get('',[
			'uses' => 'HoaDonController@index',
			'as' => 'admin.hoadon.index'
		]); 
		Route::post('',[
			'uses' => 'HoaDonController@show',
			'as' => 'admin.hoadon.show'
		]);
		Route::get('change1',[
			'uses' => 'HoaDonController@change1',
			'as' => 'admin.hoadon.change1'
		]);
		Route::get('changehd',[
			'uses' => 'HoaDonController@changehd',
			'as' => 'admin.hoadon.changehd'
		]);
		Route::post('pdf',[
			'uses' => 'PDFController@pdf',
			'as' => 'admin.hoadon.pdf'
		]);
		Route::get('exportpdf/{id}',[
			'uses' => 'PDFController@exportPDF',
			'as' => 'admin.hoadon.exportpdf'
		]);
		Route::get('hoadon',[
			'uses' => 'HoaDonController@ajax',
			'as' => 'admin.hoadon.ajax'
		]);
	});	
		Route::group(['prefix'=>'ttd'],
		function(){
		//index
		Route::get('',[
			'uses' => 'TTDController@index',
			'as' => 'admin.ttd.index'
		]); 
		Route::post('',[
			'uses' => 'TTDController@show',
			'as' => 'admin.ttd.show'
		]);
		Route::get('change1',[
			'uses' => 'TTDController@change1',
			'as' => 'admin.ttd.change1'
		]);
		Route::get('changethang',[
			'uses' => 'TTDController@changethang',
			'as' => 'admin.ttd.changethang'
		]);

		Route::get('tinhtiendien',[
			'uses' => 'TTDController@tinhtiendien',
			'as' => 'admin.ttd.tinhtiendien'
		]);
		//điện sản xuất
		Route::get('sanxuat',[
			'uses' => 'TTDController@indexsx',
			'as' => 'admin.ttd.indexsx'
		]);
		Route::post('sanxuat',[
			'uses' => 'TTDController@showsx',
			'as' => 'admin.ttd.showsx'
		]);
		Route::get('changethangsx',[
			'uses' => 'TTDController@changethangsx',
			'as' => 'admin.ttd.changethangsx'
		]);
	});
});
Route::group(['namespace'=>'Auth'],
	function(){
		Route::get('login', [
			'uses' => 'AuthController@getLogin',
			'as'   => 'auth.auth.login'
		]);
		Route::post('login', [
			'uses' => 'AuthController@postLogin',
			'as'   => 'auth.auth.login'
		]);
		Route::get('logout', [
			'uses' => 'AuthController@logout',
			'as'   => 'auth.auth.logout'
		]);

}); 

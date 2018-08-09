<?php 
	Route::get('list_product','ControllerProduct@product')->name('list_product');
	Route::get('add_product','ControllerProduct@add')->name('add_product');
	Route::post('add_product','ControllerProduct@created')->name('add_product');
	Route::get('edit_product/{id}','ControllerProduct@edit')->name('editPro');
	Route::post('edit_product/{id}','ControllerProduct@postedit')->name('editPro');
	Route::get('delete-product/{id}','ControllerProduct@delete')->name('deletePro');
 ?>
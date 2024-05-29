<?php

//Frontend
Route::get('/', 'FrontendController@index', 'index')->name('frontend.index');

//Dashboard Panel
Route::get('/dashboardpanel', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Guru dan Tenaga Kependidikan
    Route::delete('gurudantenagakependidikans/destroy', 'GurudanTenagaKependidikanController@massDestroy')->name('gurudantenagakependidikans.massDestroy');
    Route::post('gurudantenagakependidikans/media', 'GurudanTenagaKependidikanController@storeMedia')->name('gurudantenagakependidikans.storeMedia');
    Route::post('gurudantenagakependidikans/ckmedia', 'GurudanTenagaKependidikanController@storeCKEditorImages')->name('gurudantenagakependidikans.storeCKEditorImages');
    Route::resource('gurudantenagakependidikans', 'GurudanTenagaKependidikanController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

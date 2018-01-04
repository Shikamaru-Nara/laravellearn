<?php

Route::group(['prefix' => 'name'], function() {
    Route::get('demo', 'Vendor\Name\Http\Controllers\NameController@demo');
});

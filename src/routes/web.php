<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Route::get('contact', function(){
//     return view('contact::form');
// });

// Route::post('contact', function(Request $request){
//     return $request->all();
// })->name('contact');


Route::group(['namespace' => 'Netweb\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::post('contact', 'ContactController@store')->name('contact.store');
});


?>

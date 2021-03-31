<?php
use Illuminate\Http\Request;

Route::get('contact',function(){
  return view("contact::contact");
})->name('contact');

Route::group(['namespace'=>'Pr\Contact\Http\Controllers'],function(){
  Route::post('contact','ContactController@save')->name('contact');
});

?>

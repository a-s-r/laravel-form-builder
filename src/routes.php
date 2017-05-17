<?php

/*
    Asr/FormBuilder routes here
*/

Route::get('fb-form', function(){
    return "This is a Form Builder form page";
});


Route::get('fb-add/{a}/{b}', 'Asr\FormBuilder\FormBuilderController@add');
Route::get('fb-subtract/{a}/{b}', 'Asr\FormBuilder\FormBuilderController@subtract');

<?php

use Illuminate\Support\Facades\Route;

Route::get('azoze',function(){
    return ("samer");
});
Route::get('azoze/about',function(){
    return("saso");
    
});
Route::fallback(function(){
    return redirect('azoze/about');
});

//content,sasa,lala,ggg,azeze
Route::get('azoze/content',function(){
    Return("content page");
});

Route::get('azoze/sasa/{name}/{age}',function($name,$age){
    Return("Myname is $name,My age $age");
})->whereAlpha('name')->whereNumber('age');


Route::get('azoze/lala',function(){
    Return("lala page");
});

Route::get('azoze/ggg',function(){
    Return("ggg page");
});


Route::get('azoze/azeze',function(){
    Return("azeze page");
});



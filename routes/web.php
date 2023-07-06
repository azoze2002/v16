<?php


use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view("welcome");
});
route::get('/about',function(){
    return("hallo");
});
Route::fallback(function(){
    return redirect ("/");
});






//home , about , content , team , serve 
Route::get('user/{name}/{age?}',function($name,$age='online'){
    return "welcom $name,you $age" ;
})->whereAlpha('name')->whereNumber('number');

//})->where('name','[a-zA-Z]+');


Route::get('about',function(){
    return "about page";
});


Route::get('content',function(){
    return "content page";
});
Route::post('content',function(){
    return "content page";
});



Route::get('team',function(){
    return "team page";
});



Route::get('/serve',function(){
    return "serve page";
});
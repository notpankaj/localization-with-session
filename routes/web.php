<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\LanguageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => [LanguageController::class,'switchLang']]);
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/languageDemo', [HomeController::class,'languageDemo']);
        

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::middleware([SessionLang::class])->group(function () {
    
    
    // });
    
    
    Route::get('/',function(){
        if(session()->has('applocale')){
            app()->setlocale(session()->get("applocale"));
        }
        return view('index');
    });



Route::get('/test',function(){
    if(session()->has('applocale')){
        app()->setlocale(session()->get("applocale"));
    }
    return view('test');
});

Route::get('/setSession',function(){
    if(request()->lang){
        session()->put('applocale',request()->lang);
        return [
            'session set' => "success",
            'new Session' => session()->get('applocale')
        ];
    }else{
        return "dude pass paramas";
    };
});
Route::get('/getSession',function(){
    if(session()->has('applocale')){
        return [
            'session is set to' => session()->get('applocale'),
        ];
    }else{
        return [
            "session is not present"
        ];
    }
});



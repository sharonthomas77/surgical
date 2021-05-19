<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ucontrol;
use App\Http\Controllers\pcontrol;


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
Route::post('/ap',[pcontrol::class , 'store' ] );

Route::post('add_to_cart',[pcontrol::class,'addtocart']);
//Route::get('/cartview',[pcontrol::class , 'cartview' ] );

Route::post('/psearch',[pcontrol::class,'search']);
Route::post('/orderplace',[pcontrol::class,'orderplace']);

route::post('/ordereditprocess/{id}',[pcontrol::class,'updateorder']);

















//Route::get('/',[ucontrol::class , 'create' ] );
//Route::get('/register',[ucontrol::class , 'index' ] );
Route::post('/login',[ucontrol::class,'store']);
Route::post('/logs',[ucontrol::class,'logs']);

Route::post('edit/update',[pcontrol::class,'update']);
Route::post('/destroy/{id}',[pcontrol::class,'destroy']);
Route::get('/logout',[ucontrol::class,'logout']);
Route::get('removecart/{id}',[pcontrol::class , 'removecart' ] );
route::get('/cancelorder/{id}/{userid}', [pcontrol::class,'cancelorder']);
route::get('/order/{id}/edit', [pcontrol::class,'orderedit']);
Route::get('/cartadd/{pid}',[pcontrol::class,'cartadd']);
Route::get('/edit/{id}',[pcontrol::class,'edit']);
Route::get('/delete/{id}',[pcontrol::class,'deleteview']);









//Route::view('/register','register');
//Route::get('/uh',[ucontrol::class , 'uhome' ] );
//Route::get('/ah',[ucontrol::class , 'ahome' ] );
   




    Route::group(['middleware'=>['AuthCheck']],function(){

        Route::get('/aindex',[pcontrol::class , 'create' ] );
        Route::get('/userhome',[pcontrol::class,'prodview']);
Route::get('/userindex',[pcontrol::class,'userindex']);
Route::get('/cartlist',[pcontrol::class , 'cartlist' ] );
Route::get('ordernow',[pcontrol::class , 'ordernow' ] );
Route::get('/myorders',[pcontrol::class,'myorder']);
route::get('/card', [pcontrol::class,'card']);
Route::get('/vieworders',[pcontrol::class , 'vieworders' ] );
route::get('/viewall', [pcontrol::class,'viewall']);

Route::get('/contact',[ucontrol::class,'contact']);
Route::get('/ccontact',[ucontrol::class,'ccontact']);

Route::get('/au',[ucontrol::class,'aboutus']);
Route::get('/cau',[ucontrol::class,'caboutus']);
Route::get('/adminpdt',[pcontrol::class,'adminpdt']);

Route::get('/userview',[pcontrol::class , 'usrview' ] );

Route::get('/',[ucontrol::class , 'uhome' ] );
Route::get('/ah',[ucontrol::class , 'ahome' ] );
Route::get('/log',[ucontrol::class , 'create' ] );
Route::view('/register','register');








    });


    












<?php
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/adduser', function () {
    set_time_limit(0);
    $user  = DB::table('employee')->get();
   // dd($user);
     foreach($user as $item){
       
         $count =  DB::table('users')->where('username',strval($item->emp_id))->count();
         if($count == 0 &&  $item->emp_id != ''){
             DB::table('users')->insert([
                 'username' => $item->emp_id,
                 'password' => bcrypt($item->emp_id),  
             ]);
         }       
     }
     return "เพิ่มผู้ใช้สำเร็จ";
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

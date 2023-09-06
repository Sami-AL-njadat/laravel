<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Profile;
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

 

// Route::get('/', function () {
//      $users = User::with('profile')->get(2);
//      $profile = profile::with('user')->get(2);

//      foreach ($users as $user) {
//         $profile = $user->profile;  
//         $associatedUser = $profile->user; 
//         $users = $profile->user;  
//         $associatedUser = $user->profile;   
//         dd($user);
//     }

//     return view('welcome');
// });
  
 

// Route::get('/', function () {
    // Retrieve 2 users along with their profiles
    // $users = User::with('profile')->get();

    // Retrieve 2 profiles along with their associated users
    // $profiles = Profile::with('user')->get();

    // You can access and display the items from both tables
    // foreach ($users as $user) {
        // Access user data
        // dd($user);
        // dd($user->profile);

    // }
    // dd($user->profile);



    // foreach ($profiles as $profile) {
        // Access profile data
        // dd($profile);
        // Access the associated user data
    //     dd($profile->user);

    // }
    // dd($profile->user);


//     return view('welcome');
// });



Route::get('/home', function(){
    return "<h1>can you enter WELCOME </h1>" ;
})->middleware("Sam");

// Route::get('/admin', function(){
//     return "<h1> WELCOME You are ADMIN </h1>" ;
// })->name("admin");

// Route::get('/USER', function(){
//     return "<h1> WELCOME You are USER </h1>" ;
// })->name("admin");
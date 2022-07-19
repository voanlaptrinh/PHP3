<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    // Trả về view resources/view/welcome.blade.php
    return view('welcome');
});

// Route::get('/users', function(Request $request){
//     // dd($request->all()); // ~ var_dump($request); die;
//     $requestData = $request->all();
//     //trả về ds users có kết hợp bootstrap
//     $title = 'Danh sách người dùng';
//     $users = [
//         [
//             'name' =>'khanhldph',
//             'age' => 19,
//             'address' => 'HN',
//             'status' => 1
//         ],
//         [
//             'name' =>'khanhldph3092002',
//             'age' => 19,
//             'address' => 'HCM',
//             'status' => 0
//         ],
//         ];

//     return view('users', [
//         'view_title' => $title,
//         'user_list' =>$users
//     ]);
// });
// Route::get('/users/{id}/{name}', function($id, $name){
//     //Vị trí của tham số phải khớp với tham số tron URL 
//     //khoong cần đặt tên giống nhau
//     dd($id, $name);
// });
// Route::get('/register', function(){

//     return view('register');

// });
// Route::get('/register-success', function(Request $request){
//     //Nhận dữ liệu truyên sang cho view request-sucess.blade.php
//     // dd($request -> all());
//     $requestData = $request->all();

//     return view('register-success', $requestData);
// });
// Route::get('/product', function(){
//     $product = [
//         [
//             'name' =>'xiaomi',
//             'gia' => 200000,
//             'status' => 1
//         ],
//         [
//             'name' =>'samsung',
//             'gia' => 200000,
//             'status' => 0
//         ],
//         ];
//     return view('product/product',[
//         'product_list' =>$product
//     ]);
// });
// Route::get('/add-product', function(){
//     return view('product/add-product');
// });


//Route::prefix(tiền tố đường dẫn)->name(tên)->group(function(){
//Route::Phuog_thuc(đường dẫn, [Controller::class, hàm])->name(tên)
//})
Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('list');
    Route::delete('/delete/{id}', [
        UserController::class, 'delete'
    ])->name('delete');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::GET('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
});

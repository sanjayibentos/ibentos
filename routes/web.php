<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test', function () {
    return "Hello Sanjay 🚀";
});

// Route::get('/users', function () {
    // return "All Users Data";
// });
// Read
Route::get('/users', function () {
    return "All Users";
});

// Create
Route::post('/users', function () {
    return "User Created";
});

// Update
Route::put('/users/{id}', function ($id) {
    return "User Updated: " . $id;
});

// Delete
Route::delete('/users/{id}', function ($id) {
    return "User Deleted: " . $id;
});
Route::get('/services', function () {
    return "Our Services";
});
Route::get('/user/{name}', function ($name) {
    return "Hello " . $name;
});
Route::get('/home-page', [HomeController::class, 'index'])->name('home-page');
Route::post('/contact-submit', function () {
    return "Form Submitted Successfully!";
});
Route::get('/customers', [HomeController::class, 'customers']);
// use App\Http\Controllers\HomeController;

// Route::get('/customers', [HomeController::class, 'customers']);
Route::get('/customers/create', [HomeController::class, 'create']);
Route::post('/customers/store', [HomeController::class, 'store']);
Route::get('/customers/edit/{id}', [HomeController::class, 'edit']);
Route::post('/customers/update/{id}', [HomeController::class, 'update']);
Route::get('/customers/delete/{id}', [HomeController::class, 'delete']);
Route::resource('products', ProductController::class);
// Route::get('/profile', function () {
//     return "Profile Page";
// })->middleware('check.age');
Route::get('/admin/login', [UserController::class, 'adminLogin']);
// project routes
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
// use App\Http\Controllers\PostController;


Route::get('/posts',
    [PostController::class, 'index'])
    ->middleware('custom.auth');

Route::get('/posts/create',
    [PostController::class, 'create'])
    ->middleware('custom.auth');

Route::post('/posts/store',
    [PostController::class, 'store'])
    ->middleware('custom.auth');

Route::get('/posts/edit/{id}',
    [PostController::class, 'edit'])
    ->middleware('custom.auth');

Route::post('/posts/update/{id}',
    [PostController::class, 'update'])
    ->middleware('custom.auth');

Route::delete('/posts/{id}',
    [PostController::class, 'destroy'])
    ->middleware('custom.auth');

Route::get('/add-data', function () {
    Post::create([
        'title' => 'News',
        'description' => 'Latest news updates'
    ]);

    Post::create([
        'title' => 'Sports',
        'description' => 'Cricket updates'
    ]);

    Post::create([
        'title' => 'Tech',
        'description' => 'Technology news'
    ]);

    return "Data inserted!";
});
// ---------------- AUTH ----------------

Route::get('/register',
    [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register',
    [AuthController::class, 'register']);

Route::get('/login',
    [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login',
    [AuthController::class, 'login']);

Route::post('/logout',
    [AuthController::class, 'logout']);


// Dashboard
Route::get('/dashboard',
    [AuthController::class, 'dashboard'])
    ->middleware('custom.auth');


// Profile
// use App\Http\Controllers\ProfileController;

Route::get('/profile',
    [ProfileController::class, 'index'])
    ->middleware('custom.auth');

Route::post('/profile/update',
    [ProfileController::class, 'update'])
    ->middleware('custom.auth');
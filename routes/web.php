<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Models\post;
use  Illuminate\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Console\AboutCommand;




Route::get('/', function () {
    return view('welcome');
});

// Route::get('/register', function () {
//     return view('login');
// });


// Route::get('/blog', function () {
//     return view('blog',['title'=> 'blog', 'posts'=> [


//         [
//             'title'=> 'judul 1',
//             'author'=> 'RAYHAN',
//             'body'=> 
//         ]
//     ]

// ]);
// });


// Route::get('/blog', function () {
//     return view('blog', ['title'=>'blog']);
// });
Route::get('/about', function () {
    return view('about', ['name'=> 'rayhan', 'title'=> 'contact']);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::find($slug);
    return view('post',['title'=>'single Post', 'post'=>$post]);

});
// Route::get('/blog', function () {
//     return view('blog', ['title' => 'blog']);
// });


Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts'=>[
        [
            'id' => 1,
            'title' => 'judul artikel 1',
            'author' => 'Rayhan',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit, optio adipisci, debitis voluptatibus veritatis odio veniam magnam magni eaque iste, quidem tenetur hic quam omnis incidunt officia distinctio quis?
            '
        ],
        [
            'id' => 2,
            'title' => 'judul artikel 2',
            'author' => 'muhammad rayhan',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit, optio adipisci, debitis voluptatibus veritatis odio veniam magnam magni eaque iste, quidem tenetur hic quam omnis incidunt officia distinctio quis?
            '
        ],
    
    ]]);

});


Route::get('/posts/{id}', function ($id) {
    $posts=[
        [
            'id' => 1,
            'title' => 'judul artikel 1',
            'author' => 'Rayhan',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit, optio adipisci, debitis voluptatibus veritatis odio veniam magnam magni eaque iste, quidem tenetur hic quam omnis incidunt officia distinctio quis?
            '
        ],
        [
            'id' => 2,
            'title' => 'judul artikel 2',
            'author' => 'muhammad rayhan',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit, optio adipisci, debitis voluptatibus veritatis odio veniam magnam magni eaque iste, quidem tenetur hic quam omnis incidunt officia distinctio quis?
            '
        ],
    
    ];
   
});

// Route::get('/posts', function () {
//     return view('posts', ['title'=>'Blog', 'posts'=>[
//         [
//             'id'=> 1,
//             'title' => 'judul artikel 1',
//             'author' => 'muhammad rayhan',
//             'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit, optio adipisci, debitis voluptatibus veritatis odio veniam magnam magni eaque iste, quidem tenetur hic quam omnis incidunt officia distinctio quis?
//             '
//         ],
//         [
//             'id'=> 2,
//             'title' => 'judul artikel 2',
//             'author' => 'muhammad rayhan',
//             'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit, optio adipisci, debitis voluptatibus veritatis odio veniam magnam magni eaque iste, quidem tenetur hic quam omnis incidunt officia distinctio quis?
//             '
//         ],
    
//     ]]);

// });


// Route::get('/posts/{id}', function ($id) {
//     dd($id);
// });

Route::get('/tutorial', function () {
    return view('tutorial', ['title'=>'blog']);
});
// Route::get('/strukturpt', function () {
//     return view('strukturpt', ['title'=>'blog']);
// });

// Route::get('/jenisjenisproduk', function () {
//     return view('jenisjenisproduk', ['title'=>'blog']);
// });


// Route::get('/strukturpt', function () {
//     return view('strukturpt');
// });



// Route::get('/jenisjenisproduk', function () {
//     return view('jenisjenisproduk');
// });



Route::get('/about', function () {
    return view('about', ['title'=> 'Homepage']);
})->name('about');






Route::get('/profile', function () {
    return view('profile');
});


Route::get('/formpertanyaan', function () {
    return view('formpertanyaan');
});

Route::get('/create', function () {
    return view('create');
});

// 
Route::get('/create_data_jurusan', function () {
    return view('create_data_jurusan');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/latarbelakang', function () {
    return view('latarbelakang');
});
Route::get('/visimisi', function () {
    return view('visimisi');
});


// Route::get('/formpertanyaan', function () {
//     return view('');
// });


// Route::get('/', function () {
//     return view('register');
// });

// Route::get('/register', function () {
//     return view('login');
// });
// Route::get('/login', function () {
//     return view('register');
// });


route::get('/posts/{posts:slug}', function (Post $posts) {

    // $post =PostS::find($id);
    return view('post', ['title'=> 'Single Post', 'post']);
});
route::get('/posts', function (Post $post) {

    // $post =PostS::find($id);
    return view('post', ['title'=> 'blog', 'posts' =>Post::all()]);
});


Route::resource('mahasiswa', MahasiswaController::class);
route::get('/login',[LoginController::class,'index'])->name('login');
route::post('/login_proses',[LoginController::class,'login_proses'])->name('login_proses');
route::get('/logout',[LoginController::class,'logout'])->name('logout');
route::get('/register',[LoginController::class,'register'])->name('register');
route::post('/register_proses',[LoginController::class,'register_proses'])->name('register_proses');
route::get('/forgot-password',[LoginController::class,'forgot_password'])->name('forgot-password');
route::post('/forgot-password-act',[LoginController::class,'forgot_password_act'])->name('forgot-password-act');
route::get('/validasi-forgot-password/{token}',[LoginController::class,'validasi_forgot_password'])->name('validasi-forgot-password');

route::post('/validasi-forgot-password-act',[LoginController::class,'validasi_forgot_password_act'])->name('validasi-forgot-password-act');
route::post('/validasi',[LoginController::class,'validasi_forgot_password_act'])->name('validasi-forgot-password-act');
route::get('/auth.about',[LoginController::class,'login_proses'])->name('login_proses');

Route::resource('about_jurusan', JurusanController::class);

Route::resource('about', MahasiswaController::class);
Route::resource('jurusan', JurusanController::class);

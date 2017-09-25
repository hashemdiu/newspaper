<?php

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

Route::get('/',
    [
        'uses' => 'CategoryController@index',
        'as' => 'default'
    ]
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/create-category',[
    'uses' => 'CategoryController@createCategory',
    'as' => 'post-category'
]);

Route::get('/delete-category/{id}',[
    'uses' => 'CategoryController@deleteCategory',
    'as' => 'delete-category'
]);

Route::post('/edit-category/{id}',[
    'uses' => 'CategoryController@postEditCategory',
    'as' => 'edit-category'
]);

Route::get('/edit-category/{id}',[
    'uses' => 'CategoryController@getEditCategory',
    'as' => 'edit-category'
]);

Route::get('/create-post',[
    'uses' => 'PostController@createPost',
    'as' => 'create-post'
]);

Route::get('/edit-post/{id}',[
    'uses' => 'PostController@editPost',
    'as' => 'edit-post'
]);

Route::post('/edit-post/{id}',[
    'uses' => 'PostController@submitPost',
    'as' => 'post-edit-post'
]);

Route::post('/create-post',[
    'uses' => 'PostController@savePost',
    'as' => 'create-post'
]);

Route::get('/delete-post/{id}',[
    'uses' => 'PostController@deletePost',
    'as' => 'delete-post'
]);

Route::post('/delete-selected-post',[
    'uses' => 'PostController@deleteSelectedPost',
    'as' => 'delete-selected-post'
]);

Route::get('/single-post/{id}',[
    'uses' => 'PostController@getSinglePost',
    'as' => 'single-post'
]);

Route::get('/category-post/{id}',[
    'uses' => 'PostController@getCategoryPost',
    'as' => 'category-post'
]);

Route::get('/homepage',function(){
    $menu = \App\Category::all();
    $newsHeadlines= \App\Post::orderBydesc('id')->limit(5)->get();
    $latestNewses= \App\Post::whereDoesntHave('sliders')
        ->whereDoesntHave('topPosts')
        ->orderByDesc('id')->limit(12)->get();
    $specialCategories= \App\Category::has('specialPosts')->get();
    $sliderPosts= \App\Post::whereHas('sliders')->get();
    $topPosts= \App\Post::whereHas('topPosts')->orderBy('id','desc')->limit(3)->get();

    return view('frontend.home')->with([
        'menus' => $menu,
        'newsHeadlines'=>$newsHeadlines,
        'latestNewses'=>$latestNewses,
        'specialCategories'=>$specialCategories,
        'sliderPosts'=>$sliderPosts,
        'topPosts'=>$topPosts,
    ]);
})->name('homepage');

Route::get('/category-post/{id}',function($id){
    if(!\App\Category::find($id))
        return redirect()->back();
    $menu = \App\Category::all();
    $newsHeadlines= \App\Post::orderBydesc('id')->limit(5)->get();
    $category = \App\Category::find($id);
    $posts = \App\Post::whereHas('categories',function ($catPass) use($id){
        $catPass->where('id',$id);
    })->get();
    $latestPost = \App\Post::orderByDesc('id')->limit(5)->get();
    return view('frontend.category-post')->with([
        'menus' => $menu,
        'category' => $category,
        'posts' => $posts,
        'latestPosts'=> $latestPost,
        'newsHeadlines'=>$newsHeadlines
    ]);
})->name('category-post');

Route::get('/add-to-slide/{id}',[
    'uses' => 'PostController@addToSlide',
    'as' => 'add-to-slide'
]);
Route::get('/remove-from-slide/{id}',[
    'uses' => 'PostController@removeSlide',
    'as' => 'remove-from-slide'
]);

Route::get('/add-top-post/{id}',[
    'uses' => 'PostController@addTopPost',
    'as' => 'add-top-post'
]);
Route::get('/remove-top-post/{id}',[
    'uses' => 'PostController@removeTopPost',
    'as' => 'remove-top-post'
]);

Route::get('/contact',function (){
    $menus = \App\Category::all();
    $newsHeadlines= \App\Post::orderBydesc('id')->limit(5)->get();
    return view('frontend.contact')->with([
        'menus' => $menus,
        'newsHeadlines' => $newsHeadlines
    ]);
})->name('contact');

Route::post('/contact',[
    'uses' => 'PostController@saveContact',
    'as' => 'contact'
]);

Route::get('/get-ajax-data/{text}',[
    'uses'  => 'PostController@getAjaxPost',
    'as'    => 'get-ajax-data'
]);
<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        $posts = Post::paginate(3);
        return view('welcome')->with([
            'categories' => $categories,
            'edit_category' => false,
            'allPost' => $posts
        ]);
    }

    public function createCategory(Request $request){
       $category = Category::firstOrCreate([
           'category_name' => $request->input('category_name')
       ]);

       return redirect()->back();
    }
    public function deleteCategory($id){
        Category::destroy($id);
        return redirect()->back();
    }
    public function getEditCategory($id){
        $editCategory = Category::find($id);
        $posts = Post::paginate(3);
        $categories = Category::all();
        return view('welcome')->with([
            'categories' => $categories,
            'edit_category' => true,
            'editCategory' => $editCategory,
            'allPost' => $posts
        ]);
    }
    public function postEditCategory(Request $request,$id){
        $category = Category::find($id);
        $category->update([
            'category_name' => $request->input('category_name')
        ]);

        return redirect()->route('default');
    }
}

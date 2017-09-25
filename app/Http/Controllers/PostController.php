<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Image;
use App\Post;
use App\Slider;
use App\TopPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(){
        $cat = Category::all();
        return view('create-post')->with([
            'categories'=>$cat,
            'edit_post' => false
        ]);
    }
    public function savePost(Request $request){
        $post = Post::create([
            'title'=> $request->input('title'),
            'content'=> $request->input('content')
        ]);


        $isNmae = Image::get()->where('image_url', $request->image->getClientOriginalName());

        if($isNmae->count()>0){
            $photoName = time().'.'.$request->image->getClientOriginalName();
        }
        else{
            $photoName = $request->image->getClientOriginalName();
        }

        /*
        talk the select file and move it public directory and make avatars
        folder if doesn't exsit then give it that unique name.
        */
        $request->image->move(public_path('images/'), $photoName);

        $filePath = 'images/'.$photoName;

        $post->categories()->sync($request->input('categories'));
        $imagePost = new Image([
            'image_url'=> $filePath
        ]);
        $post->images()->save($imagePost);
        $post->categories()->sync($request->input('categories'));
        $post->specialCategory()->sync($request->input('special_categories'));
        return redirect()->route('default');
    }
    public function editPost($id){
        $postEdit= Post::find($id);
        $cat = Category::all();
        return view('create-post')->with([
            'categories'=>$cat,
            'edit_post' => true,
            'postSend' => $postEdit
        ]);
    }
    public function submitPost(Request $request,$id){
        $postFind=Post::find($id);
        $postFind->update([
            'title'=>$request->input('title'),
            'content'=>$request->input('content')
        ]);
        $postFind->categories()->sync($request->input('categories'));
        $postFind->specialCategories()->sync($request->input('special_categories'));
        return redirect()->route('default');
    }
    public function deletePost($id){
        Post::destroy($id);
        return redirect()->back();
    }
    public function deleteSelectedPost(Request $request){
        Post::whereIn('id',$request->input('deleteposts'))->delete();
        return redirect()->back();
    }
    public function getSinglePost($singlePostId){
        $post = Post::find($singlePostId);
        return view('single-post')->with(['singlePost' => $post]);
    }
    public function getCategoryPost($catId){
        if(!Category::find($catId))
            return redirect()->back();
        $posts= Post::whereHas('categories',function ($q) use($catId){
            $q->where('id',$catId);
        })->get();

        return view('category-post')->with([
            'posts' => $posts
        ]);
    }
    public  function addToSlide($id){
        $slidePost=Post::find($id);

        $slide = Slider::firstOrNew([
            'post_id' => $slidePost->id
        ]);
        $slide->save();
        return redirect()->back();
    }

    public function removeSlide($id){
        $removeId = Post::find($id);
        $removeId->sliders->delete();
        return redirect()->back();
    }

    public  function addTopPost($id){
        $topPost=Post::find($id);

        TopPost::firstOrCreate([
            'post_id' => $topPost->id
        ]);
        return redirect()->back();
    }

    public function removeTopPost($id){
        $removeId = Post::find($id);
        $removeId->topPosts->delete();
        return redirect()->back();
    }

    public function saveContact(Request $request){

        $contact = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        if($contact){
            return response()->json([
                'message' => "We have received your message.",
                'name' => $request->input('name')
            ],200);
        }

        return response()->json([
            'message' => "Sorry! We can't receive your message right now.."
        ],400);

    }

    public function getAjaxPost($text){

        $searchData = "%".$text."%";

        $posts = Post::where('title','LIKE',$searchData)->get();
        return response()->json([
            'posts' => $posts
        ],200);

    }
}

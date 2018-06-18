<?php

namespace App\Http\Controllers;

use Illuminate\Cache\Events\CacheEvent;
use Illuminate\Http\Request;
use App\Post;
use App\Test;
use App\Category;

class PostController extends Controller
{
    public function index(Request $request) //show in posts
    {
        // $posts = Post::where('id', 1)->get();
        //$show1 = Post::all();
        // $posts = Post::where('id','!=`',1)->get();
        $show1 = Post::with('category')->get();
        // dd($show1->toArray());
        return view('posts.index', compact('posts', 'show1'));

    }

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        //dd($request->all());   //check data  form request

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id
        ]);

        //$post = new Post();               //new to save data to db
        //$post->title = $request->title;
        //$post->body = $request-->body;
        //$post->save();

        //Post::create($request->only(['title','body']));   //save data to db
        //  return redirect('posts');
        return redirect()->route('posts.list')->with('success', 'finish data');  //normal way to save
        //  return redirect()->back()->withSuccess('finish data');  // save and redirect to before this page this magic method withSuccess
    }
//    public function edit($id){   //when use $id in page
//        $post=Post::find($id);
//        return view('posts.edit',compact('post'));
//
//    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        // $post->title=$request->title; // edit data
        //$post->save();
        $post->update($request->only(['title', 'body']));
        return redirect()->route('posts.list')->with('success', 'edit data');  //normal way to save
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.list')->with('success', 'delete data');  //normal way to save
    }

    public function about(Request $request)
    {
        $about1 = Test::where('password', 'like', '1%')->get();
        $about2 = Test::all();
        return view('posts', compact('about1', 'about2'));

    }

    public function save()
    {
        return view('posts.testsave');
    }

    public function category()
    {
        $show = Category::all();

        return view('categories.index', compact('show'));
    }

    public function create_category()
    {
        return view('categories.create');
    }

    public function store_category(Request $request)
    {
        //dd($request->all());
        $Category = new Category();               //new to save data to db
        $Category->name = $request->name;
        $Category->save();
        return redirect()->route('categories.list')->with('success', 'finish data');
    }

    public function edit_category(Category $post)
    {

        return view('categories.edit', compact('post'));
    }

    public function update_category(Category $post, Request $request)
    {

        $post->update($request->only(['name']));

        return redirect()->route('categories.list')->with('success', 'edit data');  //normal way to save
    }

    public function delete_category(Category $post)
    {
        $post->delete();

        return redirect()->route('categories.list')->with('success', 'delete data');  //normal way to save
    }
}
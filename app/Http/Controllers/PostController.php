<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Post;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::orderBy('name')->get();
        $data['authors'] = Author::orderBy('name')->get();
        $data['tags'] = Tag::orderBy('name')->get();
        return view('admin.post.create', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'author' => 'required',
            'title' => 'required|unique:posts,title',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/upload/posts';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }


            $data['title'] = $request->title;
            $data['slug'] = Str::slug($request->title);
            $data['description'] = $request->description;
            $data['category_id'] = $request->category;
            $data['author_id'] = $request->author;
            $data['published_at'] = Carbon::now();
            $data['status'] = $request->status;


        $post = Post::create($data);
        $post->tags()->attach($request->tags);
        session()->flash('success', 'Post created successfully');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $data['categories'] = Category::orderBy('name')->get();
        $data['authors'] = Author::orderBy('name')->get();
        $data['tags'] = Tag::orderBy('name')->get();
        $data['post'] = $post;
        return view('admin.post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'category' => 'required',
            'author'=>'required',
            'title' => "required|unique:posts,title, $post->id",
            'image'=>'image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
            'status'=>'required',
        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/upload/posts';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($post->image)){
                unlink($post->image);
            }
        }

        $data['title'] = $request->title;
        $data['slug'] = Str::slug($request->title);
        $data['description'] = $request->description;
        $data['category_id'] = $request->category;
        $data['author_id'] = $request->author;
        $data['status'] = $request->status;
        $post->tags()->sync($request->tags);


        $post->update($data);
        session()->flash('success', 'Post updated successfully');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}

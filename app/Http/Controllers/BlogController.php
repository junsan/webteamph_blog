<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $mainBlog = Blog::latest()->first();
        $subBlog1 = Blog::where('id', $mainBlog->id - 1)->first();
        $subBlog2 = Blog::where('id', $mainBlog->id - 2)->first();
        $moreBlogs = Blog::where('id', "<=", $mainBlog->id - 3)->orderBy('id', 'DESC')->get();

        return view('blogs', [
            'categories' => $categories, 
            'mainBlog' => $mainBlog,
            'subBlog1' => $subBlog1,
            'subBlog2' => $subBlog2,
            'moreBlogs' => $moreBlogs
        ]);
    }

    public function admin() 
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        
        return view('admin.blogs.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $file = $request->file('image');
        $file->move(public_path('images'), $file->getClientOriginalName());

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->author = $request->author;
        $blog->link = $request->link;
        $blog->category_id = $request->category_id;
        $blog->image = $file->getClientOriginalName();
        $blog->save();

        return redirect('admin/blogs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::all();
        $blog = Blog::where('id', $id)->first();
        
        return view('blog', [
            'categories' => $categories,
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::where('id', $id)->first();
        $categories = Category::all();

        return view('admin.blogs.edit', [
            'categories' => $categories,
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $file = $request->file('image');
        
        if ($file) {
            $file->move(public_path('images'), $file->getClientOriginalName());
        }

        $blog = Blog::where('id', $id)->first();
        $blog->title = $request->title;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->author = $request->author;
        $blog->link = $request->link;
        $blog->category_id = $request->category_id;
        $blog->image = $file ? $file->getClientOriginalName() : $blog->image; 
        $blog->save();
        
        return redirect('admin/blogs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

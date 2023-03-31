<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Blog;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy("created_at", 'desc')->paginate(3);

        return view('blogs.index', [
            "blogs" => $blogs,
        ]);
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blogs.show', [
            "blog" => $blog,
        ]);
    }

    public function comment($id, CommentForm $request)
    {
        $blog = Blog::findOrFail($id);

        $blog->comments()->create($request->validated());

        return redirect(route("blogs.show", $id));

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // Admin Interface
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'image' => 'nullable|image|max:2048' // Ensure image size is reasonable
            ]);

            $path = $request->file('image') ? $request->file('image')->store('images/posts', 'public') : null;

            Post::create([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $path,
                'user_id' => Auth::id()
            ]);

            return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create post: ' . $e->getMessage())->withInput();
        }
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'image' => 'nullable|image|max:2048'
            ]);

            $path = $request->file('image') ? $request->file('image')->store('images/posts', 'public') : $post->image;

            $post->update([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $path
            ]);

            return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update post: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy(Post $post)
    {
        try {
            // Optionally delete the image file if it exists
            if ($post->image && Storage::exists('public/' . $post->image)) {
                Storage::delete('public/' . $post->image);
            }

            $post->delete();
            return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete post: ' . $e->getMessage());
        }
    }




    // Public Blog Page
    public function showAll()
    {
        $posts = Post::latest()->get();
        return view('blog', compact('posts'));
    }

    public function show(Post $post)
    {
        $comments = $post->comments()->latest()->get();
        return view('blog-single', compact('post', 'comments'));
    }
}

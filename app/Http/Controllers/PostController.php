<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PostController extends Controller
{
    // Admin Interface
    public function index()
    {

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
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
                'image' => 'nullable|image|max:2048',
                'author' => 'nullable|string|max:255',
                'link' => 'nullable|url',
                'tags' => 'nullable|string|max:255',
                'excerpt' => 'nullable|string|max:500',
            ]);

            $path = $request->file('image') ? $request->file('image')->store('images/posts', 'public') : null;

            Post::create([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $path,
                'author' => $request->author ?? 'Admin',
                'link' => $request->link,
                'tags' => $request->tags,
                'excerpt' => $request->excerpt,
                'user_id' => Auth::id(),
                'category' => 'Technology',
                'created_at' => Carbon::now(),
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
                'image' => 'nullable|image|max:2048',
                'author' => 'nullable|string|max:255',
                'link' => 'nullable|url',
                'tags' => 'nullable|string|max:255',
                'excerpt' => 'nullable|string|max:500',
            ]);

            $path = $request->file('image') ? $request->file('image')->store('images/posts', 'public') : $post->image;

            $post->update([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $path,
                'author' => $request->author ?? 'Admin',
                'link' => $request->link,
                'tags' => $request->tags,
                'excerpt' => $request->excerpt,
            ]);

            return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update post: ' . $e->getMessage())->withInput();
        }
    }


    public function destroy(Post $post)
    {
        try {
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
    public function showAll(Request $request)
    {
        $search = $request->input('search');
        $postsQuery = Post::latest();

        if ($search) {
            $postsQuery->where(function ($query) use ($search) {
                $query->where('title', 'like', "%{$search}%")
                    ->orWhere('body', 'like', "%{$search}%")
                    ->orWhere('tags', 'like', "%{$search}%");
            });
        }

        $posts = $postsQuery->paginate(15);
        $recentPosts = Post::latest()->take(5)->get();
        $popularTags = Post::selectRaw('tags, COUNT(*) as count')
            ->groupBy('tags')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

        return view('blog', compact('posts', 'search', 'recentPosts', 'popularTags'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments()->latest()->get();
        $recentPosts = Post::where('id', '!=', $id)->latest()->take(5)->get();
        $relatedPosts = Post::where('tags', 'like', "%{$post->tags}%")
            ->where('id', '!=', $id)
            ->latest()
            ->take(5)
            ->get();

        $popularTags = Post::selectRaw('tags, COUNT(*) as count')
            ->groupBy('tags')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

        return view('blog-single', compact('post', 'comments', 'recentPosts', 'relatedPosts', 'popularTags'));
    }


    // New Method to Search Posts by Tag
    public function searchByTag($tag)
    {
        $posts = Post::where('tags', 'like', "%{$tag}%")->paginate(15);
        $recentPosts = Post::latest()->take(5)->get(); // Add this line
        $popularTags = Post::selectRaw('tags, COUNT(*) as count')
            ->groupBy('tags')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

        return view('blog', compact('posts', 'recentPosts', 'popularTags', 'tag'));
    }
}

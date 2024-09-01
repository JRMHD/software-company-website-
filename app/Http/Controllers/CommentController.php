<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the comments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all comments and pass to the view
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new comment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return a view for creating a new comment
        return view('comments.create');
    }

    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $postId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $postId)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        // Find the post by ID
        $post = Post::findOrFail($postId);

        // Create a new comment
        Comment::create([
            'post_id' => $post->id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        // Redirect back with a success message
        return redirect()->route('blog.show', $post->id)->with('success', 'Comment added successfully!');
    }


    /**
     * Display the specified comment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);
        $relatedPosts = Post::where('id', '!=', $post->id)->take(3)->get();
        $recentPosts = Post::latest()->take(5)->get();
        return view('blog.show', compact('post', 'relatedPosts', 'recentPosts'));
    }

    /**
     * Show the form for editing the specified comment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Fetch the comment to edit
        $comment = Comment::findOrFail($id);
        return view('comments.edit', compact('comment'));
    }



    /**
     * Update the specified comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        // Find the comment and update its content
        $comment = Comment::findOrFail($id);
        $comment->update([
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        // Redirect back with a success message
        return redirect()->route('comments.index')->with('success', 'Comment updated successfully!');
    }

    /**
     * Remove the specified comment from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the comment and delete it
        $comment = Comment::findOrFail($id);
        $comment->delete();

        // Redirect back with a success message
        return redirect()->route('comments.index')->with('success', 'Comment deleted successfully!');
    }
}

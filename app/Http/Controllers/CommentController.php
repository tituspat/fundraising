<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'nullable|string',
            'blog_id' => 'required|exists:blogs,id',
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'blog_id' => $request->blog_id,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Comment added successfully!');
    }
    // Method to update a comment
    public function update(Request $request, Comment $comment)
    {
        $this->validate($request, [
            'comment' => 'required|string|max:255',
        ]);

        if ($request->user()->id !== $comment->user_id) {
            return redirect()->back()->with('error', 'Unauthorized');
        }

        $comment->update([
            'comment' => $request->input('comment'),
        ]);

        return redirect()->back()->with('success', 'Comment updated successfully.');
    }

    // Method to delete a comment
    public function destroy(Comment $comment)
    {
        if (auth()->user()->id !== $comment->user_id) {
            return redirect()->back()->with('error', 'Unauthorized');
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }




}

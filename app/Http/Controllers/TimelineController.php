<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $post = Post::with('user')->withCount('comments')->where('is_public', '=', '1');

        if (Auth::check()) {
            $post->orWhere('user_id', '=', Auth::user()->id);
        }


        return view('dashboard', [
            'posts' => $post->latest('id')->get()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileSettingsController extends Controller
{
    // public function mount($id)
    // {
    //     $this->user = User::find($id);
    // }
    public function __invoke(Request $request)
    {

        return view('settings.profile.edit', [
            $user = Auth::user(),
            'posts' => Post::with('user')->where('user_id', $user->id)->withCount('comments')->latest('id')->get()
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdatePhotoProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $validatedData = $request->validate([
            'images' => 'image|file|max:10048',
        ]);

        $validatedData['images'] = $request->file('images')->store('profile-images');

        $profile = Profile::where('user_id', '=', auth()->user()->id)->first();
        $profile->images = $validatedData['images'];
        $profile->save();
        return redirect('dashboard');
    }
}

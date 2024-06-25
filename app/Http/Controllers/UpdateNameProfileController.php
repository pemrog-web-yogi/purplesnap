<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class UpdateNameProfileController extends Controller
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
            'fn_profile' => 'required',
            'ln_profile' => 'required',
        ]);


        $profile = Profile::where('user_id', '=', auth()->user()->id)->first();
        $profile->first_name = $validatedData['fn_profile'];
        $profile->last_name = $validatedData['ln_profile'];
        $profile->save();
        return redirect('/settings/profile');
    }
}

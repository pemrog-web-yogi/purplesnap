<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class UpdateWorkProfileController extends Controller
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
            'job_profile' => 'required',
        ]);


        $profile = Profile::where('user_id', '=', auth()->user()->id)->first();
        $profile->work = $validatedData['job_profile'];
        $profile->save();
        return redirect('/settings/profile');
    }
}

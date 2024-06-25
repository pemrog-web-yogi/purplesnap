<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class StorePostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $request->user()->posts()->create($request->validate([
            'photo' => 'mimes:jpg,png,jpeg,svg|image|max:10048',
            'body' => ['required', 'min:8'],
        ]));

        if ($request->hasFile('photo')) {
            $request->file('photo')->move(public_path('storage'), $request->file('photo')->getClientOriginalName());
        }

        return redirect('dashboard');
    }
}

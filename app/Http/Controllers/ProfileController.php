<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        $request->user()->fill($request->validated());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        // Validasi request
        // $request->validate([
        //     'image' => 'image|mimes:jpeg,png,jpg,gif|max:10048', // Sesuaikan dengan kebutuhan Anda
        // ]);

        // // Mengambil pengguna yang sedang login
        // $user = Auth::user();

        // // Menghapus gambar profil lama jika ada
        // if ($user->image) {
        //     Storage::delete($user->image);
        // }

        // // Mengunggah gambar profil baru
        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('profile_images', 'public');
        //     $user->image = $path;
        // }

        // $request->validate([
        //     'image' => 'image|file|max:10048',
        // ]);

        // if ($request->file('image')) {
        //     $request->file('image')->store('uploads');
        // }
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

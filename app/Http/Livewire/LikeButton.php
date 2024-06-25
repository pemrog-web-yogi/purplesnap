<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class LikeButton extends Component
{
    // public Post $post;

    // public function mount(Post $post)
    // {
    //     $this->post = $post;
    // }

    // public function toggleLike()
    // {
    //     $user = Auth::user();
    //     if ($this->post->likes()->where('user_id', $user->id)->exists()) {
    //         $this->post->likes()->where('user_id', $user->id)->delete();
    //     } else {
    //         $this->post->likes()->create([
    //             'user_id' => $user->id,
    //             'liked' => true,
    //         ]);
    //     }

    //     $this->post->refresh(); // Memperbarui data model post setelah like diubah
    // }

    // public function render()
    // {
    //     return view('livewire.like-button');
    // }

    public $post;
    public $hasLike;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->hasLike = $post->likes()->where('user_id', auth()->id())->exists();
    }

    public function post_like($postId)
    {
        $post = Post::find($postId);

        if ($post->likes()->where('user_id', auth()->id())->exists()) {
            $post->likes()->where('user_id', auth()->id())->delete();
            $this->hasLike = false;
        } else {
            $post->likes()->create(['user_id' => auth()->id()]);
            $this->hasLike = true;
        }

        // Emit event to update the like count
        $this->emit('postLiked', $postId);
    }

    public function render()
    {
        return view('livewire.post-like', [
            'post' => $this->post,
            'totalLikes' => $this->post->likes()->count()
        ]);
    }
}

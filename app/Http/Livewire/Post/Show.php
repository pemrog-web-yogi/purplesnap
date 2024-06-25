<?php

namespace App\Http\Livewire\Post;

use App\Models\Like;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public $post;
    public function mount($id)
    {
        $this->post = Post::find($id);
    }
    public function render()
    {
        return view('livewire.post.show', [
            "post" => $this -> post
        ]);
    }
    public function postLike($id)
    {
        $data = [
            'post_id' => $id,
            'user_id' => Auth::user()->id,
            'comment_id' => null,
        ];

        $like = Like::where($data);
        if ($like->count() > 0) {
            $like->delete();
        } else {
            Like::create($data);
        }
        return NULL;
    }
    
}

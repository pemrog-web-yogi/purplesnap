<?php

namespace App\Http\Livewire\Post;

use App\Models\Like;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment as ModelsComment;

class Comment extends Component
{
    public $body, $post, $body2, $edit_comment_id, $comment_id;

    public function mount($id)
    {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.post.comment', [
            'comments' => ModelsComment::with(['user', 'childrens'])
                ->where('post_id', $this->post->id)
                ->whereNull('comment_id')->get(),
            'total_comments' => ModelsComment::where('post_id', $this->post->id)->count(),
        ]);
    }

    public function store()
    {
        $this->validate([
            'body' => 'required'
        ]);
        $comment = ModelsComment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $this->post->id,
            'body' => $this->body
        ]);

        if ($comment) {
            $this->emit('comment_store', $comment->id);
            $this->body = NULL;
        } else {
            session()->flash('danger', 'The comment failed to be added');
            return redirect()->route('post.show');
        }
    }

    public function reply()
    {
        $this->validate([
            'body2' => 'required'
        ]);
        $comment = ModelsComment::find($this->comment_id);
        $comment = ModelsComment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $this->post->id,
            'body' => $this->body2,
            'comment_id' => $comment->comment_id ? $comment->comment_id : $comment->id
        ]);

        if ($comment) {
            $this->emit('comment_store', $comment->id);
            $this->body2 = NULL;
            $this->comment_id = NULL;
        } else {
            session()->flash('danger', 'The comment failed to be added');
            return redirect()->route('post.show');
        }
    }

    public function selectReply($id)
    {
        $this->comment_id = $id;
        $this->edit_comment_id = NULL;
        $this->body2 = NULL;
    }

    public function selectEdit($id)
    {
        $comment = ModelsComment::find($id);
        $this->edit_comment_id = $comment->id;
        $this->body2 = $comment->body;
        $this->comment_id = NULL;
    }

    public function change()
    {
        $this->validate([
            'body2' => 'required'
        ]);
        $comment = ModelsComment::where('id', $this->edit_comment_id)->update([
            'body' => $this->body2
        ]);

        if ($comment) {
            $this->emit('comment_store', $this->edit_comment_id);
            $this->body = NULL;
            $this->edit_comment_id = NULL;
        } else {
            session()->flash('danger', 'The comment failed to be updated');
            return redirect()->route('post.show');
        }
    }

    public function delete($id)
    {

        $comment = ModelsComment::where('id', $id)->delete();

        if ($comment) {
            return NULL;
        } else {
            session()->flash('danger', 'The comment failed to be deleted');
            return redirect()->route('post.show');
        }
    }

    // public function post_like($id)
    // {
    //     $data = [
    //         'post_id' => $id,
    //         'user_id' => Auth::user()->id,
    //         'comment_id' => $this->comment->id,
    //     ];

    //     $like = Like::where($data);
    //     if ($like->count() > 0) {
    //         $like->delete();
    //     } else {
    //         Like::create($data);
    //     }
    //     return NULL;
    // }
    public function like($id)
    {
        $data = [
            'comment_id' => $id,
            'user_id' => Auth::user()->id,
            'post_id' => null,
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

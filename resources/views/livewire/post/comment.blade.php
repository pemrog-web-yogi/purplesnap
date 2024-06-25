<div>
    <h1 class="text-2xl my-3">{{ $total_comments }} Komentar</h1>
    @auth
    <form wire:submit.prevent='store' class="mb-4">
        <div class="mb-3">
            <textarea wire:model.defer="body" rows="2" class="form-control @error('body') is-invalid @enderror " placeholder="add comments.. "></textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    @endauth
    @guest
        <div class="alert alert-primary" role="alert">
            Please log in to comment. <a href="{{ route('login') }}" class="">click here</a>
        </div>
    @endguest
                        @foreach ($comments as $item)
                        <div class="card mb-3" id="comment-{{ $item->id }}">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <img class="img-fluid rounded-circle me-2" width="50" src="http://www.gravatar.com/avatar/1a2dc59abe16bd6f16165b76ffc69a50?d=mm&s=100" alt="{{ $item->user->name }}">
                                    <div>
                                        <div>
                                            <span>{{ $item->user->name }}</span>
                                            <span>{{ $item->created_at->diffForHumans()}}</span>
                                        </div>
                                        <div class="text-secondary mb-2">
                                            {{ $item->body }}
                                        </div>
                                        <div>
                                            @auth
                                            <button class="btn btn-sm btn-primary" wire:click="selectReply({{ $item->id }})">Balas</button>
                                            @if ($item->user_id == Auth::user()->id)
                                            <button class="btn btn-sm btn-warning" wire:click="selectEdit({{ $item->id }})">Edit</button>
                                            <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})">Hapus</button>
                                            @endif   
                                            
                                            @if (isset($item->hasLike))
                                            <button wire:click="like({{ $item->id }})" class="btn btn-sm btn-danger">
                                                <div class="d-flex align-items-center">
                                                    <i class="comment-icon me-1">
                                                        <img src="{{ asset('/img/like.svg') }}" alt="">
                                                    </i>
                                                    <span class="fw-bold me-1">{{ $item->totalLikes() }}</span> 
                                                </div>
                                            </button>
                                            @else
                                            <button wire:click="like({{ $item->id }})" class="btn btn-sm btn-dark">
                                                <div class="d-flex align-items-center">
                                                    <i class="comment-icon me-1">
                                                        <img src="{{ asset('/img/like.svg') }}" alt="">
                                                    </i>
                                                    <span class="fw-bold me-1">{{ $item->totalLikes() }}</span> 
                                                </div>
                                            </button>
                                            @endif
                                            @endauth
                                        </div>
                                        @if (isset($comment_id) && $comment_id == $item->id)
                                        <form wire:submit.prevent='reply' class="mt-3 ">
                                            <div class="mb-3">
                                                <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror " placeholder="add comments.. "></textarea>
                                                @error('body2')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        @endif
                                        
                                        @if (isset($edit_comment_id) && $edit_comment_id == $item->id)
                                        <form wire:submit.prevent='change' class="mt-3 ">
                                            <div class="mb-3">
                                                <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror " placeholder="add comments.. "></textarea>
                                                @error('body2')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-warning">Update</button>
                                            </div>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($item->childrens)
                            @foreach ($item->childrens as $item2 )
                            <div class="ms-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <img class="img-fluid rounded-circle me-2" width="50" src="http://www.gravatar.com/avatar/1a2dc59abe16bd6f16165b76ffc69a50?d=mm&s=100" alt="{{ $item2->user->name }}">
                                            <div>
                                                <div>
                                                    <span>{{ $item2->user->name }}</span>
                                                    <span>{{ $item2->created_at->diffForHumans()}}</span>
                                                </div>
                                                <div class="text-secondary mb-2">
                                                    {{ $item2->body }}
                                                </div>
                                                <div>
                                                    @auth
                                                    <button class="btn btn-sm btn-primary" wire:click="selectReply({{ $item2->id }})">Balas</button>
                                                    @if ($item2->user_id == Auth::user()->id)
                                                    <button class="btn btn-sm btn-warning" wire:click="selectEdit({{ $item2->id }})">Edit</button>
                                                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $item2->id }})">Hapus</button>
                                                    @endif 
                                                    @if (isset($item2->hasLike))
                                                    <button wire:click="like({{ $item2->id }})" class="btn btn-sm btn-danger">
                                                        <div class="d-flex align-items-center">
                                                            <i class="comment-icon me-1">
                                                                <img src="{{ asset('/img/like.svg') }}" alt="">
                                                            </i>
                                                            <span class="fw-bold me-1">{{ $item2->totalLikes() }}</span> 
                                                        </div>
                                                    </button>
                                                    @else
                                                    <button wire:click="like({{ $item2->id }})" class="btn btn-sm btn-dark">
                                                        <div class="d-flex align-items-center">
                                                            <i class="comment-icon me-1">
                                                                <img src="{{ asset('/img/like.svg') }}" alt="">
                                                            </i>
                                                            <span class="fw-bold me-1">{{ $item2->totalLikes() }}</span> 
                                                        </div>
                                                    </button>
                                                    @endif
                                                    @endauth
                                                </div>
                                            </div>
                                        </div>
                                        @if (isset($comment_id) && $comment_id == $item2->id)
                                        <form wire:submit.prevent='reply' class="my-3 ms-4 ">
                                            <div class="mb-3">
                                                <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror " placeholder="add comments.. "></textarea>
                                                @error('body2')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        @endif
                                                    
                                        @if (isset($edit_comment_id) && $edit_comment_id == $item2->id)
                                        <form wire:submit.prevent='change' class="my-3 ms-4">
                                            <div class="mb-3">
                                                <textarea wire:model.defer="body2" rows="2" class="form-control @error('body2') is-invalid @enderror " placeholder="add comments.. "></textarea>
                                                            @error('body2')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-warning">Update</button>
                                            </div>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>    
                            @endforeach
                        @endif
                        <hr>
                        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="card w-full bg-base-100 shadow-xl my-3">
                                <div class="card-body">
                                    <h2 class="card-title">{{ $comment->user->name }} - <span class="text-gray-300">{{ $comment->created_at->diffForHumans() }}</span>
                                    @can('delete', $comment)
                                    <form method="post" action="{{ route('post.comment.destroy', [$comment->post, $comment]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-error text-white">
                                    </form>
                                    @endcan
                                    </h2>
                                    <p>{{ $comment->body }}</p>
                                </div>
                            </div>
                        </div>     --}}
                        @endforeach
</div>

<div>
    {{-- @if (isset($post->hasLike))
    <div class="d-flex bg-light rounded align-items-center px-2 py-1">
        <button wire:click="postLike({{ $post->id }})" class="btn btn-sm btn-danger">
            <i class="comment-icon me-1">
                <img src="{{ asset('/img/like.svg') }}" alt="">
            </i>
            <span
                    class="primary-color fw-bold me-1 ">{{ $post->totalLikes() }}</span>Like
        </button>
    </div>
    @else
    <div class="d-flex bg-light rounded align-items-center px-2 py-1">
        <button wire:click="postLike({{ $post->id }})" class="btn btn-sm btn-light">
            <i class="comment-icon me-1">
                <img src="{{ asset('/img/like.svg') }}" alt="">
            </i>
            <span
                    class="primary-color fw-bold me-1 ">{{ $post->totalLikes() }}</span>Liked
        </button>
    </div>
        @endif   --}}

        <button wire:click="postLike({{ $post->id }})" id="post-{{$post->id}}" class="btn btn-sm {{$post->hasLike ? 'btn-danger' : 'btn-light'}}">
            <div class="d-flex align-items-center">
                <i class="comment-icon me-1">
                    <img src="{{ asset('/img/like.svg')}}" alt="">
                </i>
                <span class="text-secondary me-1">{{ $post->totalLikes() }} like</span> 
            </div>
        </button>
</div>

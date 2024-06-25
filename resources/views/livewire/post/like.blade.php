<div>
    @if ($hasLike)
        <button wire:click="post_like({{ $post->id }})" class="btn btn-sm btn-light">
            <i class="comment-icon">
                <img src="{{ asset('/img/like.svg') }}" alt="">
            </i>
            <span class="primary-color fw-bold me-1 ">{{ $totalLikes }}</span>Like
        </button>
    @else
        <button wire:click="post_like({{ $post->id }})" class="btn btn-sm btn-light">
            <i class="comment-icon">
                <img src="{{ asset('/img/darkLike.svg') }}" alt="">
            </i>
            <span class="primary-color fw-bold me-1 ">{{ $totalLikes }}</span>Like
        </button>
    @endif
</div>
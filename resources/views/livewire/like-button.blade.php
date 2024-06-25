<div>
    <button wire:click="toggleLike" class="btn btn-primary">
        {{ $post->likedByUser() ? 'Unlike' : 'Like' }}
    </button>
    <span>{{ $post->likesCount() }} likes</span>
</div>

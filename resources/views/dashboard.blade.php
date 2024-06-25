<x-app-layout>
    @push('css')
    @livewireStyles
    @endpush
    @push('js')
    @livewireScripts
    <script>
        Livewire.on('comment_store', commentId => {
            var helloScroll = document.getElementById('comment-' + commentId);
            helloScroll.scrollIntoView({
                behavior: 'smooth'
            }, true);
        })
    </script>
    @endpush
    <div class="col-sm-12 mb-4 mt-4 mt-sm-0">
        <div class="card rounded shadow border-0 p-4">
            <div class="row gap-3 gap-sm-0">
                <div class="col-sm-9">
                    <div class="d-flex gap-2">
                        <a href="{{ route('profile.settings') }}">
                            <img src="{{ asset('storage/' . (Auth::user()->profile->images ?? "../img/profile-default.webp")) }}" class="rounded-circle" alt="" width="37" height="37" />
                        </a>
                        <div>
                            <p class="fw-medium">{{ Auth::user()->name }}</p>
                            <p class="text-secondary username">{{Auth::user()->profile->work}}</p>
                        </div>
                        <p class="">
                        <div></div>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-primary" href="{{ route('post.create')}}">Create New Post</a>
                </div>
            </div>
        </div>
    </div>
    @foreach ($posts as $post)
    <div class="content col-sm-12">
        <!-- card qustion start -->
        <div class="card rounded shadow border-0 p-4">
            <div class="row gap-3 gap-sm-0">
                @if($post->photo)
                <div class="col-sm-3 order-sm-1 order-2">
                    <a href="{{ route('post.show', $post) }}">
                        <img src="{{ asset('storage/' . $post->photo) }}" alt="" class="img-fluid" />
                    </a>
                </div>
                @else
                @endif
                <div class="col-sm-9 order-sm-2 order-1">
                    <div class="d-flex gap-2">
                        <a href="{{ route('post.show', $post) }}">
                            <img src="{{ asset('storage/' . ($post->user->profile->images ?? "../img/profile-default.webp")) }}" alt="" width="37" height="37" class="rounded-circle" />
                        </a>
                        <div>
                            <p class="fw-medium">{{ $post->user->name }}</p>
                            <p class="text-secondary username">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div>
                        <p class="fs-5 text-secondary">{!! $post->body !!}</p>
                    </div>
                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                        <div class="d-flex gap-4">
                            <p class="rounded text-ungu bg-pink p-1">#fetchapi</p>
                            <p class="rounded text-ungu bg-pink p-1">#json</p>
                            <p class="rounded text-ungu bg-pink p-1">#javascript</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 order-2 mt-2">
                    <div class="d-flex gap-4">
                        <div class="d-flex gap-2 align-items-center bg-light rounded px-2 py-2">
                            <a class="text-decoration-none d-flex" href="{{ route('post.show', $post) }}">
                                <img src="{{ asset('import/asset/image/comment-solid.svg') }}" alt="" width="21" />
                                <p class="text-secondary">&nbsp;{{ $post->comments_count }}&nbsp;<span class="text-secondary">Komentar</span></p>
                            </a>
                        </div>

                        <div class=" d-flex gap-2 align-items-center bg-light  rounded px-2 py-2">
                            {{-- <img src="{{ asset('import/asset/image/thumbs-up-solid.svg') }}" alt="" width="21" />
                            <p class="text-secondary ">{{ $post->totalLikes() }} <span class="text-secondary">Like</span></p> --}}
                            @livewire('post.show', ['id' => $post->id])
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- card qustion end -->
    </div>
    @endforeach
</x-app-layout>
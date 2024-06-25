
<x-app-layout>
@push('css')
    @livewireStyles
@endpush
@push('js')
    @livewireScripts
    <script>
        Livewire.on('comment_store', commentId =>{
            var helloScroll = document.getElementById('comment-'+commentId);
            helloScroll.scrollIntoView({behavior: 'smooth'}, true);
        })
    </script>
@endpush
    <!-- Main Start -->
    <section class="main-content container ">
        <div class="row">  
            <div class="col-md-8">
                <div class="d-flex flex-column gap-4">
                    <div class="card rounded border-0 shadow overflow-hidden">
                        <div class="card-body d-flex flex-column p-5 ">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <img src="{{ asset('storage/' . ($post->user->profile->images ??"../img/profile-default.webp")) }}" alt="" style="width:60px;height: 60px;">
                                <div class="">
                                    <!-- <p class="fw-bold fs-4">evan</p> -->
                                    <a href="#" class="text-decoration-none text-black fw-bold f-4">{{ $post->user->name }}</a>
                                    <p class="text-secondary">{{ $post->created_at->diffForHumans() }}</p>
                                </div>
                            </div>

                            <p class="fs-4 fw-bold">{!! $post->body !!}</p>
                            {{-- <p class="fs-5 text-secondary">Hallo kak, saya mengaami error ketika ingin menambahkan
                                gambar ke website
                                html saya. Saya sudah lampirkan screenshoot, barangkali ada yang pernah mengalami kasus
                                yang sama minta
                                tolong bantuannya, terimakasih ....</p> <div class="d-flex justify-content-center my-5"> --}}
                            @if($post->photo)
                            <img src="{{ asset('storage/' . $post->photo) }}" alt="" class="img-fluid w-100">
                            @else
                            
                            @endif
                        </div>
                        <div class="row ">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#"
                                        class="primary-bg primary-color py-1 px-2 rounded text-decoration-none">#dummytag</a>
                                    <a href="#"
                                        class="primary-bg primary-color py-1 px-2 rounded text-decoration-none">#tag2</a>
                                    <a href="#"
                                        class="primary-bg primary-color py-1 px-2 rounded text-decoration-none">#tag3</a>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex bg-light rounded align-items-center px-2 py-1">
                                        <i class="like-icon">
                                            <a href=""><img src="{{ asset('/img/comment.svg') }}" alt=""></a>
                                        </i>
                                        <a href="#" class="py-1 px-2 text-secondary text-decoration-none"><span
                                                class="primary-color fw-bold me-1 ">{{ $post->comments_count }}
                                            </span>Komentar</a>
                                        <!-- <p class="  py-1 px-2 text-secondary "><span
                                                    class="primary-color fw-bold me-1">68</span>Komentar
                                            </p> -->
                                    </div>
                                    @livewire('post.show', ['id' => $post->id])
                                    
                                        <!-- <p class=" py-1 px-2 text-secondary"><span
                                                    class="primary-color fw-bold me-1">125</span>Like</p> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-3">
            </div>
        </div>
        </div>
    </section>

        
        <div class="container">
            <div class="row">
                <div class="col-md-8 w-100">
                    @livewire('post.comment', ['id' => $post->id])
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
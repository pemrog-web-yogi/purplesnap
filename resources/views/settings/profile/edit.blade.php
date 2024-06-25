
<x-app-layout>


    <!-- profile start -->
    <div class=" main-content col-lg-12">
        <div class="row">
            <div class="content mt-4 mt-md-0">
                <div class="ungu">
                    <div class="profile-img-profile rounded mb-4 primary-bg text-center z-2 py-3">
                        <img src="{{ asset('storage/' . (Auth::user()->profile->images ?? "../img/profile-default.webp")) }}" width="250" height="250" alt="" class="rounded-circle object-fit-cover">
                    </div>
                </div>
                <div class="white">
                    <div class="profile-description text-center mb-4 mt-3 py-3">
                        <p class="fs-3 fw-bold">{{ Auth::user()->name }}</p>
                        <p class="text-secondary">{{ Auth::user()->profile->first_name }} {{ Auth::user()->profile->last_name }}</p>
                        <p class="text-secondary">{{ Auth::user()->profile->bio }}</p>
                        <p class="text-secondary">  
                            <!-- Button trigger modal bio -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalBio">
                                Update Bio
                            </button>
                            
                            <!-- Modal bio -->
                            <div class="modal fade" id="exampleModalBio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Bio </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('update.profile.bio') }}" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            @csrf
                                            <label for="bio_profile">Profile Bio</label><br>
                                            <textarea name="bio_profile" id="" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <div class="badge-profile d-flex justify-content-center gap-5 mb-5">
                        <div class="card-profile text-center p-4 rounded mx-3 mx-md-0">
                            <img src="{{ asset('import/asset/image/piala.svg') }}" style="width: 40px;" class="profile-icon" class="mb-3">
                            <p class="primary-color fw-bold"><span class=" me-2">12</span>Prestasi</p>
                        </div>
                        <div class="card-profile text-center p-4 rounded mx-3 mx-md-0">
                            <img src="{{ asset('import/asset/image/ide.svg') }}" style="width: 40px;" class="" class="mb-3">
                            <p class="primary-color fw-bold"><span class=" me-2">10</span>Ide</p>
                        </div>
                        <div class="card-profile text-center p-4 rounded mx-3 mx-md-0">
                            <img src="{{ asset('import/asset/image/Vector (1).svg') }}" style="width: 35px;" class="profile-icon py-2" class="mb-2">
                            <p class="primary-color fw-bold"><span class="me-2">2</span>Aspirasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- profile end -->

    <!-- name start -->
    <div class="container pt-5">
        <div class="text-name">
            <h3>{{ Auth::user()->name }}</h3>
            <h3>{{ Auth::user()->profile->work }}</h3>
        </div>
        <div class="d-flex justify-content-around gap-md-3 pb-2 pt-4">
            <!-- Button trigger modal work -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalName">
                <img width="8%" src="{{ asset('import/asset/image/pen-to-square-solid.svg') }}" alt="">
                Update Name
            </button>

            <!-- Modal Work -->
            <div class="modal fade" id="exampleModalName" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Update Full Name </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('update.profile.name') }}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <label for="fn_profile">First Name :</label><br>
                            <input class="form-control" type="text" name="fn_profile">
                            <label for="ln_profile">Last Name :</label><br>
                            <input class="form-control" type="text" name="ln_profile">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            
            <!-- Button trigger modal image -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img width="8%" src="{{ asset('import/asset/image/pen-to-square-solid.svg') }}" alt="">
                Update Foto
            </button>
            
            <!-- Modal Image -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Picture Update </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('update.profile.image') }}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <input type="file" id="file" name="images">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>

            <!-- Button trigger modal work -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalWork">
                <img width="8%" src="{{ asset('import/asset/image/user-solid.svg') }}" alt="">
                Update Job
            </button>
            
            <!-- Modal Work -->
            <div class="modal fade" id="exampleModalWork" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Update Job </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('update.profile.job') }}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <label for="job_profile">Profile Job</label><br>
                            <input class="form-control" type="text" name="job_profile">
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>

            <form action="{{ route('post.create')}}">
                <button class="btn btn-primary py-3" type="submit" href="">
                    <img width="8%" src="{{ asset('import/asset/image/comment-solid.svg') }}" alt="">&nbsp;Postingan
                </button>
            </form>
        </div>
        <div class="border-line p-1 b-1"></div>
    </div>
    <!-- name end -->

    <!-- CONTENT -->
    
    <div class="main-content container py-5">
        <div class="row justify-content-center">
            @foreach ($posts as $post)
            <div class="content col-sm-12">
                <!-- card qustion start -->
                    <div class="card rounded shadow border-0 p-4">
                        <div class="row gap-3 gap-sm-0">
                            <div class="col-sm-3 order-sm-1 order-2">
                                <a href="{{ route('post.show', $post) }}">
                                    <img src="{{ asset('storage/' . $post->photo) }}" alt="" class="img-fluid" />
                                </a>
                            </div>
                            <div class="col-sm-9 order-sm-2 order-1">
                                <div class="d-flex gap-2">
                                    <a href="{{ route('post.show', $post) }}">
                                        <img src="{{ asset('storage/' . ($post->user->profile->images ??"../img/profile-default.webp")) }}" alt="" width="37" height="37" />
                                    </a>
                                    <div>
                                        <p class="fw-medium">{{ $post->user->name }}</p>
                                        <p class="text-secondary username">@manis_</p>
                                        <form action="{{ route('post.delete', $post->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                delete post
                                            </button>
                                        </form>
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
                                    <div class="d-flex gap-4">
                                        <div class="d-flex gap-2 align-items-center bg-light rounded px-2 py-2">
                                            <a class="text-decoration-none d-flex" href="{{ route('post.show', $post) }}">
                                                <img src="{{ asset('import/asset/image/comment-solid.svg') }}" alt="" width="21" />
                                                <p class="text-secondary">&nbsp;{{ $post->comments_count }}&nbsp;<span class="text-secondary">Komentar</span></p>
                                            </a>
                                        </div>
                                        <div class=" d-flex gap-2 align-items-center bg-light  rounded px-2 py-2">
                                            <img src="{{ asset('import/asset/image/thumbs-up-solid.svg') }}" alt="" width="21" />
                                            <p class="text-secondary ">125 <span class="text-secondary">Like</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <br>
                <!-- card qustion end -->
            </div>
            @endforeach
        </div>
    </div>
    
    <script src="{{ asset('import/asset/js/bootstrap.bundle.js') }}"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    </x-app-layout>
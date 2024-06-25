<!-- navbar start -->

<nav class="navbar navbar-expand-lg bg-light ">
    <div class="container container-sm ">
        <div class="col-3 d-flex">
            <img src="{{ asset('import/asset/image/logo_rb.png') }}" width="100" height="60">
            <div class="search-box pt-2 ms-2">
                <div class="search-icon ms-3 d-flex">
                    <img src="{{ asset('import/asset/image/magnifying-glass-solid.svg') }}" alt="" width="15%">
                    <div class="search-input">
                        <input type="text" class="input" placeholder="search..">
                    </div>
                </div>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-4 navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav col-12">
                <li class="avatar-picture ms-auto me-3">
                    <a href="{{ route('post.create')}}"><img src="{{ asset('import/asset/image/song.svg') }}" alt="" class="pt-1" style="height: 38px;"></a>
                    <a href="#"><img src="{{ asset('import/asset/image/send.svg') }}" alt="" class="me-1" style="height: 38px;"></a>
                    <a href=""><img src="{{ asset('import/asset/image/notification.svg') }}" alt="" class="pt-1"
                            style="height: 38px;"></a>
                    <a href="{{ route('profile.settings') }}">
                        <img class="rounded-circle" src="{{ asset('storage/' . Auth::user()->profile->images) }}" alt="" class="ms-1 pt-1" width="37" height="37">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar end -->
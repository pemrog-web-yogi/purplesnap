
<section class="align-items-center d-flex">
    <div class="main-content container py-4 pt-3">
        <div class="row justify-content-center">
            <div class="sidebar col-sm-3 fixed">
                <div class="card-text rounded shadow bg-white d-flex flex-column gap-4 px-4 py-5 border-0">
                    <a href="{{ route('profile.settings') }}" class="text-decoration-none">
                        <div class="mini-card d-flex rounded gap-2 px-1 py-1">
                            <img src="{{ asset('import/asset/image/xprofilSolid.svg') }}" alt="" height="40" />
                            <p class="fs-5 pt-2 text-secondary fw-medium ms-1">Profil</p>
                        </div>
                    </a>
                    <a href="/dashboard" class="text-decoration-none">
                        <div class="mini-card d-flex rounded gap-2 px-1 py-1">
                            <img src="{{ asset('import/asset/image/Vector2.svg') }}" alt="" height="30" />
                            <p class="fs-5 pt-2 text-secondary fw-medium ms-2">Semua</p>
                        </div>
                    </a>
                    <a href="/dashboard" class="text-decoration-none">
                        <div class="mini-card d-flex rounded gap-2 px-1 py-1">
                            <img src="{{ asset('import/asset/image/ide.svg') }}" alt="" height="40" />
                            <p class="fs-5 pt-2 text-secondary fw-medium ms-3">Ide</p>
                        </div>
                    </a>
                    <a href="/dashboard" class="text-decoration-none">
                        <div class="mini-card d-flex rounded gap-2 px-1 py-1">
                        <img src="{{ asset('import/asset/image/piala.svg') }}" alt="" height="30" />
                            <p class="fs-5 pt-2 text-secondary fw-medium ms-2">Prestasi</p>
                        </div>
                    </a>
                    <a href="/dashboard" class="text-decoration-none">
                        <div class="mini-card d-flex rounded gap-2 px-1 py-1">
                            <img src="{{ asset('import/asset/image/Vector.svg') }}" alt="" height="30" />
                            <p class="fs-5 pt-1 text-secondary fw-medium ms-2">Postingan</p>
                        </div>
                    </a>
                    <a href="{{ route('profile.edit') }}" class="text-decoration-none">
                        <div class="mini-card d-flex rounded gap-2 px-1 py-1">
                            <img src="{{ asset('import/asset/image/settings.svg') }}" alt="" height="35" />
                            <p class="fs-5 pt-1 text-secondary fw-medium ms-2">Settings</p>
                        </div>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="text-decoration-none" onclick="event.preventDefault();
                        this.closest('form').submit();">
                            <div class="mini-card d-flex rounded gap-2 px-1 py-1">
                                <img src="{{ asset('import/asset/image/right-from-bracket-solid.svg') }}" alt="" height="30" />
                                <p class="fs-5 text-secondary fw-medium ms-2">Logout</p>
                            </div>
                        </a>
                    </form>
                    {{-- </a><a href="./index.html" class="text-decoration-none">
                        <div class="mini-card d-flex rounded gap-2 px-1 py-1">
                            <img src="{{ asset('import/asset/image/Vector (1).svg') }}" alt="" height="30" />
                            <p class="fs-5 pt-2 text-secondary fw-medium ms-2">Friends</p>
                        </div>
                    </a> --}}
                </div>
            </div>
            <div class="content col-sm-9">
                {{ $slot }}
                {{-- <div class="card rounded shadow border-0 p-4">
                    <div class="row gap-3 gap-sm-0">
                        <div class="col-sm-3 order-sm-1 order-2">
                            <img src="assets/img/code1.png" alt="" class="img-fluid" />
                        </div>
                        <div class="col-sm-9 order-sm-2 order-1">
                            <div class="d-flex gap-2">
                                <img src="assets/img/Profile.png" alt="" width="37" height="37" />
                                <div>
                                    <p class="fw-medium">Nanaku</p>
                                    <p class="text-secondary username">@manis_</p>
                                </div>
                            </div>
                            <p class="fs-4 fw-bold">Bagaimana cara untuk initialize decoder untuk dummy data</p>
                            <p class="fs-5 text-secondary">Bagaimana cara untuk inisialisasi data "machine" itu
                                untuk
                                keperluan dummy data</p>
                            <div class="d-flex flex-sm-row flex-column justify-content-between">
                                <div class="d-flex gap-4">
                                    <p class="rounded text-ungu bg-pink p-1">#KOMA</p>
                                    <p class="rounded text-ungu bg-pink p-1">#HMIF</p>
                                    <p class="rounded text-ungu bg-pink p-1">#AMCC</p>
                                </div>
                                <div class="d-flex gap-4">
                                    <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                        <img src="assets/img/comment.svg" alt="" width="21" />
                                        <p class="text-secondary">68 <span class="text-secondary">Komentar</span>
                                        </p>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center bg-light rounded px-2">
                                        <img src="assets/img/like.svg" alt="" width="21" />
                                        <p class="text-secondary">125 <span class="text-secondary">Like</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br> --}}
             <!-- card question end -->
            </div>
        </div> 
    </div>
</section>
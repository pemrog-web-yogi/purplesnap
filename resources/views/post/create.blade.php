<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>post</title>
  <!-- link boostrap -->
  <link href="{{ asset('import/asset/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- link css -->
  <link rel="stylesheet" href="{{ asset('import/asset/css/post.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  {{-- trix editor --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('import/asset/css/trix.css') }}">
  <script type="text/javascript" src="{{ asset('import/asset/js/trix.umd.min.js') }}"></script>
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none!important;  
    }
  </style>
</head>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="">
                {{ __('Create Post') }}
            </h2>
        </x-slot>
  <!-- card start -->
  <!-- header card -->
  <div class="col-sm-12 mt-3 mt-sm-0">
    <div class="card" style="height: auto !important">
      <div class="avatar-picture d-flex">
        <img src="assets/img/my.jpg" alt="">
        {{-- <div class="Post d-flex align-item-start ms-3">
        </div> --}}
        <div class="name">
          <h5>{{ Auth::user()->name }}</h5>
      <form method="post" action="/create" class=" " enctype="multipart/form-data">
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" type="button" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Kategori
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Postingan</a></li>
              <li><a class="dropdown-item" href="#">Ide</a></li>
              <li><a class="dropdown-item" href="#">Prestasi</a></li>
            </ul>
          </div>
        </div>
        <div class="ms-auto">
          <a href=""><i class="bi bi-x-lg"></i></a>
        </div>
      </div>

      <div class="ms-4">
        <img style="display: none" class="object-fit-cover" src="" alt="" id="output" width="200" height="200px">
      </div>
      <!-- footer card -->
      <div class="ms-4 me-4 ">
            @csrf
        <div>
          <input id="public_true" type="radio" name="is_public" value="1" checked>
        <label for="public_true">Public</label>
        <input id="public_false" type="radio" name="is_public" value="0">
        <label for="public_false">Privat</label>
        </div>
        <label for="text" class="text-head">Status Update:</label> <br>
        <div class="my-auto">
            <input id="body" type="hidden" name="body">
        <trix-editor input="body" placeholder="What do you want to talk about?"></trix-editor>
        </div>
        <div class="icons mt-3 ms-4 me-3 d-flex gap-3">
            <label name="photo" for="photo"><i class="bi bi-image"></i></label>
            <input type="file" class="image-upload form-control @error ('photo') is invalid @enderror" value="{{ old('photo') }}" id="photo" name="photo" accept="photo/*" onchange="(function(e){
            const output = document.getElementById('output');
            const photo = document.getElementById('photo');
            output.src = window.URL.createObjectURL(photo.files[0])
            output.style.display = 'block';
            })()">
        @error('photo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
            <a href=""><i class="bi bi-emoji-smile"></i></a>
            <a href=""><i class="bi bi-geo-alt"></i></a>
            <a href=""><i class="bi bi-camera"></i></a>
            <button type="submit" class="post ms-auto me-4 btn mb-2">Post</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <!-- card end -->
  <script src="{{ asset('import/asset/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
        // function upload(){
          
        // }
    </script>
    </x-app-layout>
</body>

</html>
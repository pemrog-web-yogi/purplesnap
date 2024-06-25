<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @error('body')
    <span class="text-error block">{{ $message }}</span>
    @enderror
    <textarea name="body" class="w-full bg-white block rounded textarea textarea-bordered @error('body') textarea-error @enderror" placeholder="Post something" rows="3">{{ old('body') }}</textarea>
    <div class="mb-3">
        <label for="photo" class="form-label text-light">
            Upload Photo
        </label>
        <input type="file" class="form-control @error ('photo') is invalid @enderror" value="{{ old('photo') }}" id="photo" name="photo" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
        @error('photo')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mt-3">
        <img src="" alt="" id="output" width="200">
    </div>
    <input type="submit" value="Post" class="btn mt-2">
</form>
@extends('users.layouts.master')

@section('title','Create Post')
@section('data-page','pageCreate')

@section('content')
    <div class="col-lg-8 col-md-8 col-sm-12 create-page" id="home-post">
        <div class="d-flex justify-content-between align-items-center create-first-row">
            <a href="{{ route('user#homePage') }}"><i class="fa-solid fa-arrow-left-long"></i></a>
            @if (Auth::user()->image == null)
                <img src="{{ asset('image/profile.jpg') }}" alt="">
            @else
                <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="">
            @endif
        </div>
        <form action="{{ route('post#create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="userId" id="" value="{{ Auth::user()->id }}">
            <textarea name="caption" id="" placeholder="Share some what you're thinking?"></textarea>

            <div class="d-flex align-items-center justify-content-between mt-2">
                <div>
                    <input type="file" name="image[]" id="select-image" class="inputfile @error('image[]') is-invalid @enderror" multiple>
                    <label for="select-image">
                        <i class="fa-solid fa-photo-film"></i>
                        <span>Photo / Video</span>
                    </label>
                    @error('image[]')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary px-5" id="update-btn" disabled>Post</button>
            </div>
            <div class="preview_image">
                <p><span id="total-images">0</span> File(s) Selected</p>
                <div id="images"></div>
            </div>
        </form>
    </div>
@endsection

@section('scriptSource')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputElement = document.querySelector('#select-image');
        const updateBtn = document.getElementById('update-btn');

        inputElement.addEventListener('change', function() {
            const filesSelected = inputElement.files.length > 0;
            updateBtn.disabled = !filesSelected;
        });
    });
</script>
@endsection

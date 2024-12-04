@extends('users.layouts.master')

@section('title','Edit Profile')
@section('data-page', 'pageProfile')

@section('content')
<div class="col-lg-8 col-md-8 col-sm-12" id="home-post">
    <!-- edit profile start  -->
    <div class="edit-profile">
        <div class="d-flex justify-content-between align-items-center" >
            <div class="d-flex">
                <a href="{{ route('acc#profile') }}" class="me-4 fs-5"><i class="fa-solid fa-xmark"></i></a>
                <h4>Edit Profile</h4>
            </div>
            <a href="javascript:void(0);" id="check-mark">
                <button class="btn border-0 fs-5" type="button" onclick="submitForm()"><i class="fa-solid fa-check"></i></button>
            </a>
        </div>

        @if (session('updateSuccess'))
            <div class="col-8 my-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('updateSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if (session('notMatch'))
            <div class="col-8 my-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('notMatch') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <form id="update-form" action="{{ route('acc#update',Auth::user()->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div id="edit-photo">
                @if(Auth::user()->image == null)
                    <img src="{{ asset('image/profile.jpg') }}" id="output" alt="">
                @else
                    <img src="{{ asset('storage/'.Auth::user()->image) }}" id="output" alt="">
                @endif
                <label for="file">
                    <span><i class="fa-solid fa-camera me-1"></i></span>
                    <span>Change Image</span>
                </label>
                <input type="file" id="file" name="image" onchange="loadFile(event);">
            </div>

            <div class="container-lg mt-4">
                <h5 class="mb-4">Profile Information</h5>
                <div class="row mb-5 form-group">
                    <div class="col-md-12 mb-4">
                        <label for="" class="mb-1">Username</label>
                        <input type="text" class="home-item @error('name') is-invalid @enderror" name="name"  value="{{ Auth::user()->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="" class="mb-1">Email</label>
                        <input type="email" class="home-item" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="" class="mb-1">Bio</label>
                        <textarea rows="3" class="home-item" name="bio">{{ Auth::user()->bio }}</textarea>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="" class="mb-1">Website</label>
                        <input type="url" class="home-item" name="website_link" value="{{ Auth::user()->website_link }}">
                    </div>
                </div>
            </div>
        </form>

        <div class="container-lg border border-1 rounded py-3">
            <h5>Account</h5>
            <div id="account-setting" class="pt-3">
                <a href="" id="your-liked-btn">
                    <h6 class="w-100 text-start">Post You've Liked</h6>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
                <hr>

                <a href="" id="block-user-btn">
                    <h6 class="w-100 text-start">Blocked Users</h6>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
                <hr>

                <div id="private-account-btn" class="mt-4">
                    <h6 class="w-100 text-start">Private Account</h6>
                    <label class="private-toggle-switch" >
                        <input type="checkbox">
                        <div class="private-switch-background">
                          <div class="private-switch-handle"></div>
                        </div>
                    </label>
                </div>
                <hr>

                <div class="px-3 mt-4" id="change-password">
                    <h6 class="w-100 text-start">Change Password</h6>
                    <div id="" class="mt-4">
                        <form action="{{ route('pass#update',Auth::user()->id) }}" method="post">
                            @csrf
                            <div>
                                <input type="password" name="oldPassword" class="form-control mb-3 @error('oldPassword') is-invalid @enderror" placeholder="Old password...">
                                @error('oldPassword')
                                    <div class="invalid-feedback" id="pass-error">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <input type="password" name="newPassword" class="form-control mb-3 @error('newPassword') is-invalid @enderror" placeholder="New password...">
                                @error('newPassword')
                                    <div class="invalid-feedback" id="pass-error">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <input type="password" name="confirmPassword" class="form-control mb-3 @error('confirmPassword') is-invalid @enderror" placeholder="Confirm new password...">
                                @error('confirmPassword')
                                    <div class="invalid-feedback" id="pass-error">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark w-100" id="update-btn" disabled>Save<i class="fa-solid fa-lock ms-2"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- edit profile end  -->

</div>
@endsection

@section('scriptSource')
    <script>
        document.addEventListener('DOMContentLoaded',function(){
            const inputElements = document.querySelectorAll('input[type="password"]');
            const updateBtn = document.getElementById('update-btn');

            let hasChanged = false;
            const initialValues = {};
            inputElements.forEach(element => {
                initialValues[element.name] = element.value;
            });

            function checkUpdateValue(){
                hasChanged = false;
                inputElements.forEach(element => {
                    const currentValue = element.value;
                    const initialValue = initialValues[element.name];
                    if(currentValue != initialValue){
                        hasChanged = true;
                    }
                    updateBtn.disabled = !hasChanged;
                });
            }

            inputElements.forEach(element => {
                element.addEventListener('input',checkUpdateValue);
            });

            checkUpdateValue();
        });
    </script>
@endsection

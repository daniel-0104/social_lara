@extends('users.layouts.master')

@section('title','Profile')
@section('data-page','pageProfile')

@section('content')
<div class="col-lg-8 col-md-8 col-sm-12 px-3" id="home-post">
    <div class="row myprofile-content px-1 pt-2">
        <div class="col-lg-4 col-sm-4">
            @if(Auth::user()->image == null)
                <img src="{{ asset('image/profile.jpg') }}" alt="">
            @else
                <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="">
            @endif
        </div>
        <div class="col-lg-8 col-sm-8 d-flex align-items-center justify-content-center">
            <div class="row text-center w-100 fs-5">
                <div class="col-lg-4 col-sm-4">
                    <span>0</span>
                    <p>Posts</p>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <a href="following.html" class="home-item">
                        <span>0</span>
                        <p>Followers</p>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <a href="following.html" class="home-item">
                        <span>0</span>
                        <p>Following</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row myprofile-content2 px-2 justify-content-center align-items-center mt-2">
        <div class="col-lg-4 col-sm-4">
            <h5 class="mt-2">{{ Auth::user()->name }}</h5>
        </div>
        <div class="col-lg-8 col-sm-8">
            <a href="{{ route('acc#edit') }}" class="edit-btn">
                <button class="btn w-100 home-dark home-item">Edit Profile</button>
            </a>
        </div>
    </div>
    <div class="row myprofile-content3 px-2 mt-2">
        <label>{{ Auth::user()->bio }}</label>
        @if(Auth::user()->website_link)
            <a href="{{ Auth::user()->website_link }}" target="_blank">{{ Auth::user()->website_link }}</a>
        @endif

    </div>
    <hr>


    @if(!empty($images))
        <!-- profile grip click start  -->
        <div>
            <ul id="profile-grip">
                <li>
                    <a href="javascript:void(0)" class="profile-grip-content profile-grip-active home-item" data-element-class="userPost"><i class="fa-regular fa-square"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="profile-grip-content home-item" data-element-class="imageOnly"><i class="fa-solid fa-grip"></i></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="profile-grip-content home-item privateClassSave" data-element-class="privateSave"><i class="fa-regular fa-bookmark"></i></a>
                </li>
            </ul>
        </div>
        <!-- profile grip click end  -->

        <div class="loader loader-bg"></div>

        <div class="user-profile-grip">
            <!-- post one by one start  -->
            <div class="user-post mx-2 mb-3 home-dark">
                <div class="user-profile">
                    <a href="{{ route('acc#profile') }}">
                        @if(Auth::user()->image == null)
                            <img src="{{ asset('image/profile.jpg') }}" alt="">
                        @else
                            <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="">
                        @endif
                    </a>
                    <div>
                        <a href="{{ route('acc#profile') }}" class="home-item"><h6>{{ Auth::user()->name }}</h6></a>
                        {{-- <span>March 19, 2024 | 9:49pm</span> --}}
                        {{-- <span>{{ $post->created_at->format('j.F.Y') }}</span> --}}
                    </div>
                </div>
                <div class="profile-content">
                    <div class="swiper profileSwiper">
                        <div class="swiper-wrapper mb-4 py-2 mt-1" id="profile-img">
                            @foreach ($images as $image)
                                <div class="swiper-slide">
                                    <span class="slide-number"></span>
                                    <img src="{{ asset('storage/'. trim($image)) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="profile-like">
                        <div>
                            <div class="heart-comment">
                                <a href=""  class="home-item"><i class="fa-regular fa-heart me-5 heart-link"></i></a>
                                <a href="" class="home-item comment-link"><i class="fa-regular fa-comment"></i></a>
                            </div>
                            <div class="bookmark">
                                <a href="" class="home-item"><i class="fa-regular fa-bookmark bookmark-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-view">
                        <div class="mb-4">
                            <label for="" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">0 like(s)</label>
                            <label for="" class="comment-link">0 comment(s)</label>
                        </div>
                        <div class="users-profile">
                            <label for="">No comment yet!</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- post one by one end  -->


            <!-- post for only image start  -->
            <div class="post-image-only">
                <a href="">
                    <img src="image/3ac7c25d7db05c969127ffa01df4cd0b.jpg" alt="">
                </a>
                <a href="">
                    <img src="image/1364d4459567333ccd4fce1fc0137266.jpg" alt="">
                </a>
                <a href="">
                    <img src="image/2c8f528d4f33e2b81bf7114216efb45e.jpg" alt="">
                </a>
                <a href="">
                    <img src="image/17c1fd0f3355a1bf16903a59a5e3f401.jpg" alt="">
                </a>
                <a href="">
                    <img src="image/b55e9b82b907df2d2b03061747517327.jpg" alt="">
                </a>
            </div>
            <!-- post for only image end -->


            <!-- post saved private start -->
            <div class="user-post mx-2 mb-3 home-dark private-save">
                <div class="user-profile">
                    <a href="">
                        <img src="image/7b5ef1c8f780198ffe2077939ea038f5.jpg" alt="">
                    </a>
                    <div>
                        <a href="" class="home-item"><h6>Zhou Ye</h6></a>
                        <span>March 4, 2024 | 7:43pm</span>
                    </div>
                </div>
                <div class="profile-content">
                    <div class="swiper profileSwiper">
                        <div class="swiper-wrapper mb-4 py-2 mt-1" id="profile-img">
                            <div class="swiper-slide">
                                <span class="slide-number"></span>
                                <img src="image/3ac7c25d7db05c969127ffa01df4cd0b.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <span class="slide-number"></span>
                                <img src="image/5dda0622cd22954f2158e5a8cfa3afeb.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <span class="slide-number"></span>
                                <img src="image/1364d4459567333ccd4fce1fc0137266.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="mb-3">
                        <label for="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex provident delectus veritatis ducimus officiis libero nostrum numquam culpa minus distinctio aspernatur alias commodi vitae, nihil harum id minima odio hic!</label>
                    </div>
                    <div class="profile-like">
                        <div>
                            <div class="heart-comment">
                                <a href=""  class="home-item"><i class="fa-regular fa-heart me-5 heart-link"></i></a>
                                <a href="" class="home-item comment-link"><i class="fa-regular fa-comment"></i></a>
                            </div>
                            <div class="bookmark">
                                <a href="" class="home-item"><i class="fa-regular fa-bookmark bookmark-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-view">
                        <div class="mb-4">
                            <label for="" class="me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">0 like(s)</label>
                            <label for="" class="comment-link">0 comment(s)</label>
                        </div>
                        <div class="row mb-1 users-profile">
                            <div class="col-lg-1 col-sm-1" id="users-profile-img">
                                <a href="">
                                    <img src="image/85d5b87701ca261c5ea1dc03a9c86739.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-11 col-sm-11 ps-4" id="users-profile-content">
                                <div class="d-flex align-items-center">
                                    <a href="" class="home-item me-3 pt-1"><h6>LinYi</h6></a>
                                    <span>March 4, 2024 | 8:00pm</span>
                                </div>
                                <p class="mt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus reiciendis iure perferendis distinctio aut nostru.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- post saved private end -->
        </div>

    @else
        <h6 class="text-secondary text-center mt-5">There is no post yet!</h6>
    @endif

</div>
@endsection

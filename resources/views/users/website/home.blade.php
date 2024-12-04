@extends('users.layouts.master')

@section('title','H-Social')

@section('content')
    <div class="col-lg-8 col-md-8" id="home-post">
        <!-- story swiper start  -->
        {{-- <div id="story-swiper">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div id="swiper-content">
                            <img src="image/images.png" alt="">
                            <div id="swiper-story">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <p>Add Story</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <img src="image/FsxGQdHaEAEc6LU.jpg" alt="">
                            <div id="swiper-profile">
                                <a href="" class="text-decoration-none"><p>Tan Taijin</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <img src="image/1654465030-a2b874f2-0fa1-49d8-8e86-b690bdf98a3e.jpeg" alt="">
                            <div id="swiper-profile">
                                <a href="" class="text-decoration-none"><p>Kim Seok Jin</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <video src="video/Snaptik.app_7179694873937825029.mp4"></video>
                            <div id="swiper-profile">
                                <a href="" class="text-decoration-none"><p>TTETOM</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <img src="image/JOS5xQ94CWm3My9.jpg" alt="">
                            <div id="swiper-profile">
                                <a href="" class="text-decoration-none"><p>Ming Ye</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <img src="image/gVSeoz20HQw2Q9P.jpg" alt="">
                            <div id="swiper-profile">
                                <a href="" class="text-decoration-none"><p>Fan Art</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <img src="image/1244359.jpg" alt="">
                            <div id="swiper-profile">
                                <a href="" class="text-decoration-none"><p>Forest</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- story swiper end  -->

        <!-- story swiper for phone size start  -->
        {{-- <div id="story-swiper-ph">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div id="swiper-content">
                            <img src="image/images.png" alt="">
                            <div id="swiper-story-ph">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                        <p>Your Story</p>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <img src="image/17c1fd0f3355a1bf16903a59a5e3f401.jpg" alt="" class="profile-img">
                            <img src="image/FsxGQdHaEAEc6LU.jpg" alt="" class="story-img-view">
                        </div>
                        <p><a href="" class="home-item">Tan TaiJin</a></p>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <img src="image/download.jpg" alt="" class="profile-video">
                            <video src="video/Snaptik.app_7179694873937825029.mp4" class="story-video-view"></video>
                        </div>
                        <p><a href="" class="home-item">TTETOM</a></p>
                    </div>
                    <div class="swiper-slide">
                        <div id="swiper-content" class="image-container">
                            <img src="image/1654465030-a2b874f2-0fa1-49d8-8e86-b690bdf98a3e.jpeg" alt="" class="profile-img">
                            <img src="image/FvCeZlkaAAUnH4e.jpg" alt="" class="story-img-view">
                        </div>
                        <p><a href="" class="home-item">Kim Seok Jin</a></p>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- story swiper for phone size end  -->

        <!-- Add a modal container -->
        {{-- <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <div class="modal-content">
                <video class="modal-video" id="video01" style="display:none;"></video>
                <img class="modal-img" id="img01">
                <div class="progress-bar"></div>
                <div class="duration"></div>
            </div>
        </div> --}}

        <!-- create post start  -->
        <div class="create-post home-dark">
            <form action="">
                <h6 class="home-text">Create Post</h6>
                <hr>
                <div id="create-content" class="row">
                    <div class="col-lg-1 col-sm-1">
                        <img src="image/pexels-ervinfon-19969943.jpg" alt="">
                    </div>
                    <div class="col-lg-11 col-sm-11">
                        <textarea name="" id="" placeholder="Share some what you're thinking?"></textarea>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <div>
                        <input type="file" name="file" id="select-image" class="inputfile" multiple>
                        <label for="select-image">
                            <i class="fa-solid fa-photo-film"></i>
                            <span>Photo / Video</span>
                        </label>
                    </div>
                    <button class="btn btn-primary px-5">Post</button>
                </div>
                <div class="preview_image">
                    <p><span id="total-images">0</span> File(s) Selected</p>
                    <div id="images"></div>
                </div>
            </form>
        </div>
        <!-- create post end  -->


        <!-- user post start  -->
        <div class="user-post home-dark">
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

        <div class="user-post home-dark">
            <div class="user-profile">
                <a href="">
                    <img src="image/85d5b87701ca261c5ea1dc03a9c86739.jpg" alt="">
                </a>
                <div>
                    <a href="" class="home-item"><h6>LinYi</h6></a>
                    <span>March 19, 2024 | 9:49pm</span>
                </div>
            </div>
            <div class="profile-content">
                <div class="swiper profileSwiper">
                    <div class="swiper-wrapper mb-4 py-2 mt-1" id="profile-img">
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <img src="image/3fa7087db44612c8490bcdcc3155d54b.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <img src="image/bdf6832375b1f58413874936b875efa1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <img src="image/download.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <img src="image/2c8f528d4f33e2b81bf7114216efb45e.jpg" alt="">
                        </div>
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

        <div class="user-post home-dark">
            <div class="user-profile">
                <a href="">
                    <img src="image/FsxGQdHaEAEc6LU.jpg" alt="">
                </a>
                <div>
                    <a href="" class="home-item"><h6>Luo Yunxi</h6></a>
                    <span>March 23, 2024 | 1:36 PM</span>
                </div>
            </div>
            <div class="profile-content">
                <div class="swiper profileSwiper">
                    <div class="swiper-wrapper mb-4 py-2 mt-1" id="profile-img">
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <img src="image/266c283418e96b9370eeec0925c94b6d.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <img src="image/99e9ea1b6800c8ff79b46486e4ff1cb4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <img src="image/17c1fd0f3355a1bf16903a59a5e3f401.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <img src="image/b55e9b82b907df2d2b03061747517327.jpg" alt="">
                        </div>
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

        <div class="user-post home-dark">
            <div class="user-profile">
                <a href="">
                    <img src="image/9595b0dca47f0c736a1525f8cc28d9e6.jpg" alt="">
                </a>
                <div>
                    <a href="" class="home-item"><h6>BaiLu</h6></a>
                    <span>March 23, 2024 | 1:55 PM</span>
                </div>
            </div>
            <div class="profile-content">
                <div class="swiper profileSwiper">
                    <div class="swiper-wrapper mb-4 py-2 mt-1" id="profile-img">
                        <div class="swiper-slide">
                            <span class="slide-number"></span>
                            <video src="video/Snaptik.app_7323526444313824520.mp4" controls></video>
                        </div>
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
        <!-- user post end  -->

        <!-- like off canvas start  -->
        <div class="offcanvas offcanvas-end noti-bg" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn border-0 fs-4 ps-0 home-item" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-arrow-left-long"></i></button>
                <h5 class="offcanvas-title fs-4 ms-3 home-item" id="offcanvasRightLabel">Likes</h5>
            </div>
            <div class="offcanvas-body">
                <a href="" class="d-flex mb-3 notification home-item">
                    <span class="image-cropper">
                        <img src="image/1654465030-a2b874f2-0fa1-49d8-8e86-b690bdf98a3e.jpeg" alt="avatar" class="profile-pic">
                    </span>
                    <div class="ms-3 w-100 d-flex align-items-center justify-content-between" id="follow-Container">
                        <h6>Kim SeokJin</h6>
                        <button id="follow-toggle" data-user-id="1" class="btn btn-primary w-50">Follow</button>
                    </div>
                </a>
                <a href="" class="d-flex mb-3 notification home-item">
                    <span class="image-cropper">
                        <img src="image/85d5b87701ca261c5ea1dc03a9c86739.jpg" alt="avatar" class="profile-pic">
                    </span>
                    <div class="ms-3 w-100 d-flex align-items-center justify-content-between" id="follow-Container">
                        <h6>LinYi</h6>
                        <button id="follow-toggle" data-user-id="2" class="btn btn-primary w-50">Follow</button>
                    </div>
                </a>
            </div>
        </div>
        <!-- like off canvas end  -->
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<link rel="icon" href="{{ asset('image/icons8-dragon-100.png') }}">
<body data-page="@yield('data-page', 'default-page')">

    <!-- nav bar top start  -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top nav-bg">
        <div class="container-fluid">
            <a class="navbar-logo" href="{{ route('user#homePage') }}">
                <img src="{{ asset('image/icons8-dragon-100.png') }}" alt="" class="w-25">
                <label for="" class="theme">H-Social.</label>
            </a>
            <div class="d-flex align-items-center justify-content-center">
                <form action="" class="search-container">
                    <span><i class="fas fa-search search-icon"></i></span>
                    <input type="text" name="q" class="form-control" placeholder="Search for friends ...">
                </form>
                <ul class="navbar m-auto">
                    <li class="nav-item" id="house">
                        <a class="nav-link" aria-current="page" href="{{ route('user#homePage') }}"><i class="fa-solid fa-house"></i></a>
                    </li>
                    <li class="nav-item" id="plus">
                        <a class="nav-link" aria-current="page" href="{{ route('post#createPage') }}"><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li class="nav-item" id="message">
                        <a class="nav-link" aria-current="page" href="message.html"><i class="fa-solid fa-message"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="video.html"><i class="fa-solid fa-video"></i></a>
                    </li>
                </ul>
            </div>
            <div class="me-0 d-flex navbar-brand hide-navbar-brand">
                <div class="nav-item dropdown">
                    <a class="nav-fill position-relative" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                        <i class="fa-solid fa-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">
                            0
                        </span>
                    </a>
                </div>
                <a href="message.html" class="position-relative" id="message-alert">
                    <i class="fa-solid fa-message" style="vertical-align: middle;"></i>
                    <span class="position-absolute top-0 start-100 translate-middle-y p-1 border rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </a>
                <a href="setting.html"><i class="fa-solid fa-gear"></i></a>
                <a href="{{ route('acc#profile') }}"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </nav>
    <!-- nav bar top end -->

    <div class="offcanvas offcanvas-start noti-bg" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header justify-content-between">
            <label for="" class=" offcanvas-title fs-5 fw-bold home-item" id="offcanvasWithBothOptionsLabel">Notification</label>
            <button type="button" class="btn border-0 fs-5 home-item" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        {{-- <div class="offcanvas-body">
            <a href="" class="d-flex mt-2 notification home-item">
                <span class="image-cropper">
                    <img src="image/1654465030-a2b874f2-0fa1-49d8-8e86-b690bdf98a3e.jpeg" alt="avatar" class="profile-pic">
                </span>
                <div class="ms-3 w-100">
                    <h6>Kim Seok Jin</h6>
                    <div class="d-flex justify-content-between">
                        <p class="me-5 nav-liked">liked your photo.</p>
                        <label for="" class="text-end">5 min</label>
                    </div>
                </div>
            </a>
            <a href="" class="d-flex mt-2 notification home-item">
                <span class="image-cropper">
                    <img src="image/FsxGQdHaEAEc6LU.jpg" alt="avatar" class="profile-pic">
                </span>
                <div class="ms-3 w-100">
                    <h6>Tan Taijin</h6>
                    <div class="d-flex justify-content-between">
                        <p class="me-5 nav-liked">commented your photo.</p>
                        <label for="" class="text-end">10 min</label>
                    </div>
                </div>
            </a>
            <a href="" class="d-flex mt-2 notification home-item">
                <span class="image-cropper">
                    <img src="image/85d5b87701ca261c5ea1dc03a9c86739.jpg" alt="avatar" class="profile-pic">
                </span>
                <div class="ms-3 w-100">
                    <h6>LinYi</h6>
                    <div class="d-flex justify-content-between">
                        <p class="me-5 nav-liked">started following you.</p>
                        <label for="" class="text-end">15 min</label>
                    </div>
                </div>
            </a>
        </div> --}}
    </div>

    <!-- nav bar bottom start -->
    <nav class="position-fixed b-nav">
        <div class="d-flex navbar-brand">
            <a href="index.html" class="me-3"><i class="fa-solid fa-house"></i></a>
            <a href="profile.html"><i class="fa-solid fa-user"></i></a>
            <a href="createPost.html"><i class="fa-regular fa-square-plus"></i></a>
            <div class="nav-item dropdown">
                <a class="nav-fill position-relative" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <i class="fa-solid fa-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info">
                        0
                    </span>
                </a>
            </div>
            <a href="setting.html"><i class="fa-solid fa-gear"></i></a>
        </div>
    </nav>
    <!-- nav bar bottom end -->

    <!-- home section start  -->
    <section class="container-fluid" id="home-section">
        <div id="home-content">
            <div id="first-scroll">
                <div class="sidebar">
                    <div class="new-feed home-dark">
                        <label for="" class="home-text">News Feed</label>
                        <a href="index.html" id="feed-item" class="home-item">
                            <i class="fa-regular fa-clipboard"></i>
                            <h6>News Feed</h6>
                        </a>
                        <a href="createPost.html" id="feed-item" class="home-item">
                            <i class="fa-solid fa-plus"></i>
                            <h6>Create</h6>
                        </a>
                        <a href="saved.html" id="feed-item" class="home-item">
                            <i class="fa-regular fa-bookmark"></i>
                            <h6>Saved</h6>
                        </a>
                    </div>

                    <div class="shortcut home-dark">
                        <label for="" class="home-text">Shortcuts</label>
                        <a href="" id="shortcut-item" class="home-item">
                            <i class="fa-solid fa-user-group"></i>
                            <h6>Friends</h6>
                        </a>
                        <a href="" id="shortcut-item" class="home-item">
                            <i class="fa-regular fa-image"></i>
                            <h6>Images</h6>
                        </a>
                        <a href="" id="shortcut-item" class="home-item">
                            <i class="fa-solid fa-photo-film"></i>
                            <h6>Videos</h6>
                        </a>
                        <a href="" id="shortcut-item" class="home-item">
                            <i class="fa-regular fa-face-smile-wink"></i>
                            <h6>Followers</h6>
                        </a>
                        <a href="" id="shortcut-item" class="home-item">
                            <i class="fa-regular fa-message"></i>
                            <h6>Messages</h6>
                        </a>
                    </div>

                    <div class="account home-dark">
                        <label for="" class="home-text">Account</label>
                        <a href="setting.html" id="account-item" class="home-item">
                            <i class="fa-solid fa-gear"></i>
                            <h6>Setting</h6>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button id="account-item" class="home-item border-0 ms-0 ps-0">
                                <i class="fa-solid fa-power-off"></i>
                                <h6>Logout</h6>
                            </button>
                        </form>
                        <a href="" id="account-item" class="home-item">
                            <i class="fa-regular fa-circle-question"></i>
                            <h6>Help</h6>
                        </a>
                    </div>

                    <div class="account home-dark">
                        <div class="dark-mode py-2">
                            <h6 class="mt-1">Dark Mode</h6>
                            <label class="toggle-switch" >
                                <input type="checkbox">
                                <div class="toggle-switch-background">
                                  <div class="toggle-switch-handle"></div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="second-scroll">
               <div class="main-content">
                    <div class="row">
                        @yield('content')

                        <div class="col-lg-4 col-md-4" id="following-friend">
                            <div class="friends home-dark mb-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5>Following</h5>
                                    <a href="following.html" class="text-decoration-none fw-medium">See All</a>
                                </div>
                                <a href="" class="d-flex mb-3 notification home-item">
                                    <span class="image-cropper">
                                        <img src="image/1654465030-a2b874f2-0fa1-49d8-8e86-b690bdf98a3e.jpeg" alt="avatar" class="profile-pic">
                                    </span>
                                    <div class="ms-3 w-100 d-flex align-items-center justify-content-between" id="follow-Container">
                                        <h6>Kim SeokJin</h6>
                                        <button class="btn following-btn">Following</button>
                                    </div>
                                </a>
                                <a href="" class="d-flex mb-3 notification home-item">
                                    <span class="image-cropper">
                                        <img src="image/85d5b87701ca261c5ea1dc03a9c86739.jpg" alt="avatar" class="profile-pic">
                                    </span>
                                    <div class="ms-3 w-100 d-flex align-items-center justify-content-between" id="follow-Container">
                                        <h6>LinYi</h6>
                                        <button class="btn following-btn">Following</button>
                                    </div>
                                </a>
                                <a href="" class="d-flex mb-3 notification home-item">
                                    <span class="image-cropper">
                                        <img src="image/FsxGQdHaEAEc6LU.jpg" alt="avatar" class="profile-pic">
                                    </span>
                                    <div class="ms-3 w-100 d-flex align-items-center justify-content-between" id="follow-Container">
                                        <h6>Luo Yunxi</h6>
                                        <button class="btn following-btn">Following</button>
                                    </div>
                                </a>
                                <a href="" class="d-flex mb-3 notification home-item">
                                    <span class="image-cropper">
                                        <img src="image/7b5ef1c8f780198ffe2077939ea038f5.jpg" alt="avatar" class="profile-pic">
                                    </span>
                                    <div class="ms-3 w-100 d-flex align-items-center justify-content-between" id="follow-Container">
                                        <h6>Zhou Ye</h6>
                                        <button class="btn following-btn">Following</button>
                                    </div>
                                </a>
                            </div>
                            <div class="friends home-dark mb-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5>Suggested</h5>
                                    <a href="following.html" class="text-decoration-none fw-medium">See All</a>
                                </div>
                                <a href="" class="d-flex mb-3 notification home-item">
                                    <span class="image-cropper">
                                        <img src="image/9595b0dca47f0c736a1525f8cc28d9e6.jpg" alt="avatar" class="profile-pic">
                                    </span>
                                    <div class="ms-3 w-100 d-flex align-items-center justify-content-between" id="follow-Container">
                                        <h6>Bai Lu</h6>
                                        <button class="btn btn-primary w-50">Follow</button>
                                    </div>
                                </a>
                                <a href="" class="d-flex mb-3 notification home-item">
                                    <span class="image-cropper">
                                        <img src="image/2YSBbXZ4h6Ex65B.thumb.1000_0.jpg" alt="avatar" class="profile-pic">
                                    </span>
                                    <div class="ms-3 w-100 d-flex align-items-center justify-content-between" id="follow-Container">
                                        <h6>Tan Taijin</h6>
                                        <button class="btn btn-primary w-50">Follow</button>
                                    </div>
                                </a>
                            </div>
                            <div class="messages home-dark mb-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5>Messages</h5>
                                    <a href="message.html" class="text-decoration-none fw-medium">View All</a>
                                </div>
                                <a href="" class="d-flex mt-2 notification home-item">
                                    <span class="image-cropper">
                                        <img src="image/1654465030-a2b874f2-0fa1-49d8-8e86-b690bdf98a3e.jpeg" alt="avatar" class="profile-pic">
                                    </span>
                                    <div class="ms-3 w-100">
                                        <h6>Kim Seok Jin</h6>
                                        <div class="d-flex justify-content-between message-text">
                                            <p>How are you? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, saepe eum. Minus temporibus, voluptatum ipsum sapiente exercitationem eligendi atque libero dignissimos consequatur inventore cumque quidem porro aspernatur corporis, eveniet culpa.</p>
                                            <label for="" class="text-end">1h</label>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="d-flex mt-2 notification home-item">
                                    <span class="image-cropper">
                                        <img src="image/FsxGQdHaEAEc6LU.jpg" alt="avatar" class="profile-pic">
                                    </span>
                                    <div class="ms-3 w-100">
                                        <h6>Luo Yunxi</h6>
                                        <div class="d-flex justify-content-between message-text">
                                            <p>Hello! Nice to meet you. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, saepe eum. Minus temporibus, voluptatum ipsum sapiente exercitationem eligendi atque libero dignissimos consequatur inventore cumque quidem porro aspernatur corporis, eveniet culpa.</p>
                                            <label for="" class="text-end">Fri</label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end  -->

</body>

@yield('scriptSource')

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js'></script>

<script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>

<!-- js -->
<script src="{{ asset('js/script.js') }}"></script>

<!-- jquery  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- bootstrap js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

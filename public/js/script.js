const currentHTML = document.body.getAttribute('data-page');

// href clicked active link start
document.addEventListener('DOMContentLoaded', () => {
    const currentHTMLPage = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => link.classList.remove('active'));

    navLinks.forEach(link => {
      const linkPath = new URL(link.href).pathname;
      if (currentHTMLPage === linkPath) {
        link.classList.add('active');
      }
    });
  });
// href clicked active link end

// .......................   dark mode toggle start ...................................
const body = document.querySelector('body');
const navBg = document.querySelector('.nav-bg');
const buttonNav = document.querySelector('.b-nav');
const homeDark = document.querySelectorAll('.home-dark');
const homeItem = document.querySelectorAll('.home-item');
const homeText = document.querySelectorAll('.home-text');
const notiBg = document.querySelectorAll('.noti-bg');
const loaderBg = document.querySelectorAll('.loader-bg');
const chatLeftDark = document.querySelectorAll('.left');
const chatLeftDark2 = document.querySelectorAll('.left2');
const toggleSwitch = document.querySelectorAll('.toggle-switch-background');
const toggleCheckbox = document.querySelectorAll('.toggle-switch input[type="checkbox"]');

// Check if dark mode preference is stored in localStorage
const isDarkMode = localStorage.getItem('darkMode') === 'true';

// Set initial dark mode state based on stored preference
if (isDarkMode) {
    enableDarkMode();
    toggleCheckbox.forEach(checkbox => {
        checkbox.checked = true; // Check the switch button if dark mode is enabled
    });
}

toggleSwitch.forEach(function(toggSwitch){
    toggSwitch.addEventListener('click',function(){
        // Toggle dark mode
        body.classList.toggle('dark');
        navBg.classList.toggle('nav-bg-dark');
        buttonNav.classList.toggle('nav-bg-dark');
        homeDark.forEach(element => {
            element.classList.toggle('home-bg-dark');
        });
        homeText.forEach(element => {
            element.classList.toggle('home-text-light');
        });
        notiBg.forEach(element => {
            element.classList.toggle('noti-bg-blue');
        });
        loaderBg.forEach(element => {
            element.classList.toggle('loader-bg-blue');
        });
        chatLeftDark.forEach(element => {
            element.classList.toggle('left-dark');
        });
        chatLeftDark2.forEach(element => {
            element.classList.toggle('left-dark');
        });

        const isDarkModeColor = body.classList.contains('dark');
        homeItem.forEach(element => {
            if (isDarkModeColor) {
                element.style.color = 'white';
            } else {
                element.style.color = 'black';
            }
        });

        // Store dark mode preference in localStorage
        localStorage.setItem('darkMode', isDarkModeColor.toString());
    });
});


function enableDarkMode() {
    body.classList.add('dark');
    navBg.classList.add('nav-bg-dark');
    buttonNav.classList.toggle('nav-bg-dark');
    homeDark.forEach(element => {
        element.classList.add('home-bg-dark');
    });
    homeText.forEach(element => {
        element.classList.add('home-text-light');
    });
    homeItem.forEach(element => {
        element.style.color = 'white';
    });
    notiBg.forEach(element => {
        element.classList.add('noti-bg-blue');
    });
    loaderBg.forEach(element => {
        element.classList.add('loader-bg-blue');
    });
    chatLeftDark.forEach(element => {
        element.classList.add('left-dark');
    });
    chatLeftDark2.forEach(element => {
        element.classList.add('left-dark');
    });
}
// .......................   dark mode toggle end ...................................

// toggleSwitch.onclick = () => {
//     console.log('clicked');
//     // Toggle dark mode
//     body.classList.toggle('dark');
//     navBg.classList.toggle('nav-bg-dark');
//     buttonNav.classList.toggle('nav-bg-dark');
//     homeDark.forEach(element => {
//         element.classList.toggle('home-bg-dark');
//     });
//     homeText.forEach(element => {
//         element.classList.toggle('home-text-light');
//     });
//     notiBg.forEach(element => {
//         element.classList.toggle('noti-bg-blue');
//     });
//     loaderBg.forEach(element => {
//         element.classList.toggle('loader-bg-blue');
//     });

//     const isDarkModeColor = body.classList.contains('dark');
//     homeItem.forEach(element => {
//         if (isDarkModeColor) {
//             element.style.color = 'white';
//         } else {
//             element.style.color = 'black';
//         }
//     });

//     // Store dark mode preference in localStorage
//     localStorage.setItem('darkMode', isDarkModeColor.toString());
// }

if(currentHTML === 'pageIndex'){

    initializeSwipers();
    //................................ story swiper start ....................................

    //swiper
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
            // 0: {
            //     slidesPerView: 2,
            // },
            530: {
                slidesPerView: 5,
            },
            650: {
                slidesPerView: 6,
            },
            831: {
                slidesPerView: 3,
            },
            935: {
                slidesPerView: 4,
            },
            969: {
                slidesPerView: 4,
            },
            1070: {
                slidesPerView: 5,
            },
            1220: {
                slidesPerView: 3,
            },
            1270: {
                slidesPerView: 4,
            },
            1560: {
                slidesPerView: 5,
            }
        }
    });


    const sliders = new Swiper(".story__slider", {
            speed: 1,
            watchSlidesProgress: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            slidesPerView: 1,
            navigation: {
                nextEl: ".story__next",
                prevEl: ".story__prev",
            }
        });

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and video elements
    var storyImg = document.querySelectorAll('.swiper-slide .story-img-view');
    var storyVideo = document.querySelectorAll('.swiper-slide .story-video-view');
    var profileImg = document.querySelectorAll('.swiper-slide .profile-img');
    var profileVideo = document.querySelectorAll('.swiper-slide .profile-video');
    var img = document.querySelectorAll('#swiper-content img');
    var video = document.querySelectorAll('#swiper-content video');
    var modalImg = document.getElementById("img01");
    var modalVideo = document.getElementById("video01");
    var progressBar = document.querySelector('.progress-bar');

    // Function to update progress bar and duration
    function updateProgress(mediaElement) {
        var durationElement = document.querySelector('.duration');

        if (mediaElement.tagName.toLowerCase() === 'img') {
            var currentTime = (performance.now() - startTime) / 1000;
            var duration = 6; // Duration for images (6 seconds)
            var progress = (currentTime / duration) * 100;
        } else {
            var currentTime = mediaElement.currentTime;
            var duration = mediaElement.duration;
            var progress = (currentTime / duration) * 100;
        }

        progressBar.style.width = progress + '%';
        durationElement.textContent = formatTime(currentTime) + ' / ' + formatTime(duration);

        // Close modal after image duration
        if (mediaElement.tagName.toLowerCase() === 'img' && progress >= 100) {
            modal.style.display = "none";
        }
    }

    // Function to format time in MM:SS format
    function formatTime(time) {
        var minutes = Math.floor(time / 60);
        var seconds = Math.floor(time % 60);
        return (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
    }

    // Add event listeners for progress update
    modalImg.addEventListener('load', function() {
        var durationElement = document.querySelector('.duration');
        durationElement.textContent = formatTime(0) + ' / ' + formatTime(6); // Reset duration for image

        var progressBar = document.querySelector('.progress-bar');
        progressBar.style.width = '0%';
    });

    modalVideo.addEventListener('timeupdate', function() {
        updateProgress(this);
    });

    var imageProgressInterval;

    // Function to open modal for images
    function openModalForImage(source) {
        modalImg.style.display = "block";
        modalVideo.style.display = "none"; // Hide video
        modalImg.src = source;
        startTime = performance.now();
        updateProgress(modalImg);

        // Incrementally update progress bar for image
        imageProgressInterval = setInterval(function() {
            updateProgress(modalImg);
            if (parseFloat(progressBar.style.width) >= 100) {
                clearInterval(imageProgressInterval);
                modal.style.display = "none"; // Close modal after image duration
            }
        }, 50);
    }

    // Function to open modal for videos
    function openModalForVideo(source) {
        modalVideo.style.display = "block";
        modalImg.style.display = "none"; // Hide image
        modalVideo.src = source;
        modalVideo.play(); // Autoplay video
        clearInterval(imageProgressInterval);
        // Set the duration dynamically based on the video's duration
        modalVideo.onloadedmetadata = function() {
            updateProgress(modalVideo); // Update progress bar for video

            // Update duration display with the correct video duration
            var durationElement = document.querySelector('.duration');
            durationElement.textContent = formatTime(0) + ' / ' + formatTime(modalVideo.duration);
        };
    }

    // Add event listener for video ended
    modalVideo.addEventListener('ended', function() {
        modal.style.display = "none"; // Close modal after video ends
    });

    // Add event listener for video click to toggle play/pause
    modalVideo.addEventListener('click', function() {
        if (modalVideo.paused) {
            modalVideo.play();
        } else {
            modalVideo.pause();
        }
    });

    // Add click event listener to each image and video
    img.forEach(function(item) {
        item.addEventListener('click', function() {
            modal.style.display = "block";
            openModalForImage(this.src);
        });
    });

    video.forEach(function(item) {
        item.addEventListener('click', function() {
            modal.style.display = "block";
            openModalForVideo(this.src);
        });
    });

    profileImg.forEach(function(item, index) {
        item.addEventListener('click', function() {
            modal.style.display = "block";
            const storySrc = storyImg[index].getAttribute('src'); // Get the corresponding story image source
            openModalForImage(storySrc);
        });
    });

    profileVideo.forEach(function(item,index){
        item.addEventListener('click', function() {
            modal.style.display = "block";
            const videoSrc = storyVideo[index].getAttribute('src'); // Get the video source
            openModalForVideo(videoSrc);
        });
    });


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
        modalVideo.pause(); // Pause video if it's playing
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            modalVideo.pause(); // Pause video if it's playing
        }
    }

    //................................ story swiper end ....................................


    // ................................ create post start ...................................
    const fileInput = document.getElementById('select-image');
    const images = document.getElementById('images');
    const totalImages = document.getElementById('total-images');

    let selectedImages = [];

    // Function to update selected images in the DOM
    function updateSelectedImages() {
        images.innerHTML = '';

        selectedImages.forEach((image, index) => {
            const imageElement = document.createElement('div');
            imageElement.classList.add('image_box');

            const img = document.createElement('img');
            img.src = image.dataURL;

            const span = document.createElement('span');
            span.classList.add('image_name');
            span.textContent = image.name;

            const removeButton = document.createElement('button');
            removeButton.innerHTML = '<i class="fas fa-times"></i>';
            removeButton.classList.add('remove_button');
            removeButton.addEventListener('click', () => removeImage(index));

            imageElement.appendChild(img);
            imageElement.appendChild(span);
            imageElement.appendChild(removeButton);

            images.appendChild(imageElement);
        });

        totalImages.innerText = selectedImages.length;
    }

    // Function to remove an image
    function removeImage(index) {
        selectedImages.splice(index, 1);
        updateSelectedImages();
        updateLocalStorage();
    }

    // Function to update local storage
    function updateLocalStorage() {
        localStorage.setItem('selectedImages', JSON.stringify(selectedImages));
    }

    // Listen to the change event on the <input> element
    fileInput.addEventListener('change', (event) => {
        const imageFiles = event.target.files;
        selectedImages = [];
        if (imageFiles.length > 0) {
            for (const imageFile of imageFiles) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    const dataURL = event.target.result;
                    selectedImages.push({ name: imageFile.name, dataURL });
                    updateSelectedImages();
                    updateLocalStorage();
                };
                reader.readAsDataURL(imageFile);
            }
        }
    });

    // Load selected images from local storage on page load
    window.addEventListener('DOMContentLoaded', () => {
        const storedImages = localStorage.getItem('selectedImages');

        if (storedImages) {
            selectedImages = JSON.parse(storedImages);
            updateSelectedImages();
        }
    });
    // .....................................  create post end...............................................
}
else if(currentHTML === 'pageProfile'){

    document.addEventListener('DOMContentLoaded', function() {
        const profileGripLinks = document.querySelectorAll('#profile-grip li a');
        const userPost = document.getElementsByClassName('user-post');
        const imageOnly = document.getElementsByClassName('post-image-only');
        const privateSave = document.getElementsByClassName('private-save');

        // Function to handle click events on profile grip links
        function handleClickEvent(event) {
            event.preventDefault();
            const clickedElement = event.target.tagName === 'I' ? event.target.parentElement : event.target;
            const elementClass = clickedElement.dataset.elementClass;

            if (clickedElement.classList.contains('profile-grip-active')) {
                return;
            }

            localStorage.setItem('userClick', elementClass);

            for (let p of profileGripLinks) {
                p.classList.remove('profile-grip-active');
            }

            clickedElement.classList.add('profile-grip-active');

            for (let u of userPost) {
                u.style.display = elementClass === 'userPost' ? 'block' : 'none';
            }

            for (let i of imageOnly) {
                i.style.display = elementClass === 'imageOnly' ? 'grid' : 'none';
            }

            for (let p of privateSave) {
                p.style.display = elementClass === 'privateSave' ? 'block' : 'none';
            }

            // Initialize Swipers after changing the display
            initializeSwipers();
        }

        // Add click event listener to each profile grip link
        for (let link of profileGripLinks) {
            link.addEventListener('click', handleClickEvent);
        }

        // Check localStorage for the stored userClick value
        const elementClassId = localStorage.getItem('userClick');
        if (elementClassId) {
            for (let p of profileGripLinks) {
                p.classList.remove('profile-grip-active');
            }
            if (elementClassId === 'userPost') {
                profileGripLinks[0].classList.add('profile-grip-active');
                for (let u of userPost) {
                    u.style.display = 'block';
                }
                for (let i of imageOnly) {
                    i.style.display = 'none';
                }
                for (let p of privateSave) {
                    p.style.display = 'none';
                }
            } else if (elementClassId === 'imageOnly') {
                profileGripLinks[1].classList.add('profile-grip-active');
                for (let u of userPost) {
                    u.style.display = 'none';
                }
                for (let i of imageOnly) {
                    i.style.display = 'grid';
                }
                for (let p of privateSave) {
                    p.style.display = 'none';
                }
            } else if (elementClassId === 'privateSave') {
                profileGripLinks[2].classList.add('profile-grip-active');
                for (let u of userPost) {
                    u.style.display = 'none';
                }
                for (let i of imageOnly) {
                    i.style.display = 'none';
                }
                for (let p of privateSave) {
                    p.style.display = 'block';
                }
            }
        }

        // Initialize Swipers after all elements are set up
        initializeSwipers();
    });

            document.querySelector('.profile-grip-content[data-element-class="userPost"]').click();
        // Function to save the user's click preference locally
        function saveUserClickPreference(preference) {
            localStorage.setItem('userClickPreference', preference);
        }
        // Function to load the user's click preference from local storage
        function loadUserClickPreference() {
            return localStorage.getItem('userClickPreference');
        }

    // Load user's click preference and apply the corresponding display settings
    const savedPreference = loadUserClickPreference();
    if (savedPreference) {
        for (let link of profileGripLinks) {
            if (link.dataset.elementClass === savedPreference) {
                link.click(); // Simulate click event to apply saved preference
                break;
            }
        }
    }

    // Function to reload the page with a time delay after showing loading animation and hiding user-profile-grip
    function reloadPageWithDelay(delay) {
        document.querySelector('.loader').style.display = 'block';
        document.querySelector('.user-profile-grip').style.display = 'none';

        setTimeout(function() {
            location.reload();
        }, delay);
    }

    // Add click event listener to anchor tags to reload the page with delay
    document.querySelectorAll('#profile-grip a').forEach(anchor => {
        anchor.addEventListener('click', function(event) {
            event.preventDefault();
            reloadPageWithDelay(500);
        });
    });


    //............................................ profile grip click end ...................................

}
else if(currentHTML === 'pageFollowing'){
    function checkColumns() {
        var followingContent = document.getElementById('following-lap');
        var columns = followingContent.querySelectorAll('.following-content').length;
        if (columns >= 4) { // Assuming each row contains 4 columns, adjust this value as needed
          followingContent.style.position = 'fixed';
        } else {
          followingContent.style.position = 'static'; // Or whatever default position you want
        }
      }

    // Call the function when the page loads and when it's resized
    window.onload = window.onresize = checkColumns;
}
else if(currentHTML === 'pageCreate'){
        // ................................ create post start ...................................
        const fileInput = document.getElementById('select-image');
        const images = document.getElementById('images');
        const totalImages = document.getElementById('total-images');

        let selectedImages = [];

        // Function to update selected images in the DOM
        function updateSelectedImages() {
            images.innerHTML = '';

            selectedImages.forEach((image, index) => {
                const imageElement = document.createElement('div');
                imageElement.classList.add('image_box');

                const img = document.createElement('img');
                img.src = image.dataURL;

                const span = document.createElement('span');
                span.classList.add('image_name');
                span.textContent = image.name;

                const removeButton = document.createElement('button');
                removeButton.innerHTML = '<i class="fas fa-times"></i>';
                removeButton.classList.add('remove_button');
                removeButton.addEventListener('click', () => removeImage(index));

                imageElement.appendChild(img);
                imageElement.appendChild(span);
                imageElement.appendChild(removeButton);

                images.appendChild(imageElement);
            });

            totalImages.innerText = selectedImages.length;
        }

        // Function to remove an image
        function removeImage(index) {
            selectedImages.splice(index, 1);
            updateSelectedImages();
            updateUpdateButtonState();
        }

        // Function to update the state of the update button
        function updateUpdateButtonState() {
            const updateBtn = document.getElementById('update-btn');
            updateBtn.disabled = selectedImages.length === 0;
        }

        // Listen to the change event on the <input> element
        fileInput.addEventListener('change', (event) => {
            const imageFiles = event.target.files;

            if (imageFiles.length > 0) {
                for (const imageFile of imageFiles) {
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        const dataURL = event.target.result;
                        selectedImages.unshift({ name: imageFile.name, dataURL }); // Add to the front
                        updateSelectedImages();
                        updateUpdateButtonState(); // Update button state after adding an image
                    };
                    reader.readAsDataURL(imageFile);
                }
            }
        });

        // Initialize the button state on page load
        updateUpdateButtonState();


        // .....................................  create post end...............................................
}
else if(currentHTML === 'pageVideo'){

    // video swiper
    var swiper = new Swiper(".videoSwiper", {
        // direction: "vertical",
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        on: {
            slideChange: function() {
                // Stop all videos
                this.slides.forEach(function(slide) {
                    var video = slide.querySelector('video');
                    if (video) {
                        video.pause();
                        video.currentTime = 0;
                        video.muted = true;
                    }
                });

                // Play the video in the active slide
                var activeSlide = this.slides[this.activeIndex];
                var videoElement = activeSlide.querySelector('video');
                if (videoElement) {
                    videoElement.play();
                    videoElement.muted = false;
                }
            },
        },
    });

    // Add click event listener to play/pause videos within the Swiper
    swiper.on('click', function() {
        // Play the video in the active slide
        var activeSlide = swiper.slides[swiper.activeIndex];
        var videoElement = activeSlide.querySelector('video');
        if (videoElement) {
            if (videoElement.paused) {
                videoElement.play();
                videoElement.muted = false;
            } else {
                videoElement.pause();
                videoElement.muted = true;
            }
        }
    });

    // Video click event
    var videoElements = document.querySelectorAll('#vide-page-eg video');
    var videoSwiperView = document.getElementById('video-swiper');

    videoElements.forEach(function(video) {
        video.addEventListener('click', function() {
            // Show Swiper
            videoSwiperView.style.display = 'block';

            // Clear existing slides
            swiper.removeAllSlides();

            // Get the parent element of the clicked video
            var parentElement = video.closest('.video-page-content');
            var imgElement = parentElement.querySelector('img');
            var h6Element = parentElement.querySelector('h6');

            // Add clicked video as the first slide and autoplay it
            swiper.appendSlide(`
                <div class="swiper-slide">
                    <a href="video.html" id="swiper-arrow">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </a>
                    <div id="swiper-slide-content">
                        <div id="carousel-header">
                            <a href="">
                                <img src="${imgElement.src}" alt="">
                                <h6>${h6Element.innerHTML}</h6>
                            </a>
                        </div>
                        <video src="${video.src}"></video>
                    </div>
                </div>
            `);

            // Add remaining videos to the Swiper
            videoElements.forEach(function(v) {
                if (v.src !== video.src) {
                var vParentElement = v.closest('.video-page-content');
                var vImgElement = vParentElement.querySelector('img');
                var vH6Element = vParentElement.querySelector('h6');
                    swiper.appendSlide(`
                        <div class="swiper-slide">
                            <a href="video.html" id="swiper-arrow">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </a>
                            <div id="swiper-slide-content">
                                <div id="carousel-header">
                                    <a href="">
                                        <img src="${vImgElement.src}" alt="">
                                        <h6>${vH6Element.innerHTML}</h6>
                                    </a>
                                </div>
                                <video src="${v.src}"></video>
                            </div>
                        </div>
                    `);
                }
            });
            swiper.update();

            // Autoplay the first video
            var firstVideo = swiper.slides[0].querySelector('video');
            if (firstVideo) {
                firstVideo.play();
                firstVideo.muted = false;
            }
        });
    });

}
else if(currentHTML === 'pageMessage'){
    $(document).ready(function(){
        $('#m-search-icon').click(function(){
            $('#message-search').toggle('slow');
        });
    });

    function addedElement(){
        var screenWidth = window.innerWidth;
        var videoElement = document.getElementById('video');

        if(screenWidth < 740){
            videoElement.style.display = 'none';
        }else{
            videoElement.style.display = 'block';
        }
    }

    window.onload = addedElement;
    window.onresize = addedElement;
}
else if(currentHTML === 'pageChatting'){
    function addedElement(){
        var screenWidth = window.innerWidth;
        var settingElement = document.getElementById('gear');
        var videoElement = document.getElementById('video');

        if(screenWidth < 740){
            settingElement.style.display = 'block';
            videoElement.style.display = 'none';
        }else{
            settingElement.style.display = 'none';
            videoElement.style.display = 'block';
        }
    }

    window.onload = addedElement;
    window.onresize = addedElement;

    //chatting image view
    document.addEventListener('DOMContentLoaded',function(){
        const chattingImgClick = document.getElementById('chat-img-click');
        const chattingImgView = document.getElementById('chat-img-view');
        const imgCloseBtn = document.querySelector('.js-close-btn');
        const chatImg = document.querySelector('.js-img-view');

        chattingImgClick.addEventListener('click',function(){
            const imgSrc = chattingImgClick.src;
            chatImg.src = imgSrc;
            chattingImgView.style.display = 'flex';
        });

        imgCloseBtn.addEventListener('click',function(){
            chattingImgView.style.display = 'none';
        });
    });

}
else if(currentHTML === 'pageSetting'){
    function addedElement(){
        var screenWidth = window.innerWidth;
        var videoElement = document.getElementById('video');

        if(screenWidth < 740){
            videoElement.style.display = 'none';
        }
    }

    window.onload = addedElement;
    window.onresize = addedElement;
}
else if(currentHTML === 'pageSaved'){
    let savedContent = document.getElementsByClassName('saved-grip-content');
    const savedTable = document.getElementsByClassName('post-saved-table');
    const savedRow = document.getElementsByClassName('post-saved-row');


    function savedClick(event){
        event.preventDefault();
        const clickSaved = event.target.tagName === 'I' ? event.target.parentElement : event.target;
        const savedElement = clickSaved.dataset.elementClass;

        if(clickSaved.classList.contains('saved-grip-active')){
            return;
        }

        localStorage.setItem('savedId',savedElement);

        for(let s of savedContent){
            s.classList.remove('saved-grip-active');
        }
        clickSaved.classList.add('saved-grip-active');

        for(let t of savedTable){
            t.style.display = savedElement === 'savedTable' ? 'grid' : 'none';
        }
        for(let r of savedRow){
            r.style.display = savedElement === 'savedRow' ? 'block' : 'none';
        }

        initializeSwipers();
    }

    // Add click event listener to each profile grip link
    for (let sc of savedContent) {
        sc.addEventListener('click', savedClick);
    }

    // Check localStorage for savedId and apply the state after reload
    document.addEventListener('DOMContentLoaded', function () {
        const savedId = localStorage.getItem('savedId');
        if (savedId) {
            for (let s of savedContent) {
                s.classList.remove('saved-grip-active');
            }
            if (savedId === 'savedTable') {
                savedContent[0].classList.add('saved-grip-active');
                for (let t of savedTable) {
                    t.style.display = 'grid';
                }
                for (let r of savedRow) {
                    r.style.display = 'none';
                }
            } else if (savedId === 'savedRow') {
                savedContent[1].classList.add('saved-grip-active');
                for (let t of savedTable) {
                    t.style.display = 'none';
                }
                for (let r of savedRow) {
                    r.style.display = 'block';
                }
            }
        }
        initializeSwipers();
    });

}

//............................................user post image swipe start..............................
// Function to initialize Swiper and update slide numbers
function initializeSwipers() {
    var swipers = [];
    var profileSwipers = document.querySelectorAll('.profileSwiper');

    profileSwipers.forEach(function (element) {
        var swiper = new Swiper(element, {
            spaceBetween: 30,
            hashNavigation: {
                watchState: true,
            },
            pagination: {
                el: element.querySelector(".swiper-pagination"),
                clickable: true,
            },
            on: {
                slideChange: function () {
                    updateSlideNumbers(swiper);
                }
            },
        });
        swipers.push(swiper);
    });

    // Function to update slide numbers
    function updateSlideNumbers(swiperInstance) {
        if (swiperInstance && swiperInstance.slides && swiperInstance.activeIndex !== undefined) {
            const slides = swiperInstance.slides;
            const currentSlideIndex = swiperInstance.activeIndex + 1;

            slides.forEach((slide, i) => {
                const slideNumberElement = slide.querySelector('.slide-number');
                if (slideNumberElement) {
                    slideNumberElement.textContent = currentSlideIndex + '/' + slides.length;
                }
            });
        } else {
            console.error("Swiper instance or slides are undefined.");
        }
    }

    swipers.forEach(updateSlideNumbers);
}


//heart like toggle , comment toggle and bookmark saving
$(document).ready(function(){
    function handleLikeToggle($heartLink,$bookmarkLink, postId) {
        $heartLink.click(function(event){
            event.preventDefault();
            $heartLink.toggleClass('fa-heart fa-regular fa-heart fa-solid');
            var isSolidHeart = $heartLink.hasClass('fa-solid');
            localStorage.setItem('isLiked_' + postId, isSolidHeart);
        });
        $bookmarkLink.click(function(event){
            event.preventDefault();
            var isSaved = $bookmarkLink.hasClass('bookmark-yellow');
            if (!isSaved) {
                $bookmarkLink.addClass('bookmark-yellow');
            }
            else{
                $bookmarkLink.removeClass('bookmark-yellow');
            }
            localStorage.setItem('isSaved' + postId, !isSaved);
        });
    }

    $('.user-post').each(function(index) {
        var postId = index + 1;
        var $heartLink = $(this).find('.heart-link');
        var isSolidHeart = localStorage.getItem('isLiked_' + postId) === 'true';
        if (isSolidHeart) {
            $heartLink.addClass('fa-solid').removeClass('fa-regular');
        } else {
            $heartLink.addClass('fa-regular').removeClass('fa-solid');
        }


        var $bookmarkLink = $(this).find('.bookmark-link');
        var isSaved = localStorage.getItem('isSaved' + postId) === 'true';
        if(isSaved){
            $bookmarkLink.addClass('bookmark-yellow');
        }

        handleLikeToggle($heartLink, $bookmarkLink, postId);
    });

    $('.user-post img').dblclick(function(event){
        event.preventDefault();
        var $heartLink = $(this).closest('.user-post').find('.heart-link');
        var postId = $(this).closest('.user-post').index() + 1;
        $heartLink.toggleClass('fa-heart fa-regular fa-heart fa-solid');
        var isSolidHeart = $heartLink.hasClass('fa-solid');
        localStorage.setItem('isLiked_' + postId, isSolidHeart);
    });

    $('.comment-link').click(function(event){
        event.preventDefault();
        $('.users-profile').toggleClass('users-profile-show');
    });
});

//toggle for follow button
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll("#follow-toggle");

    buttons.forEach(button => {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            const userId = this.getAttribute("data-user-id");

            if (this.classList.contains("btn-primary")){
                this.classList.remove("btn-primary");
                this.classList.add("following-btn");
                this.textContent = "Following";
                localStorage.setItem(`isFollowing-${userId}`, "true");
            } else {
                this.classList.remove("following-btn");
                this.classList.add("btn-primary");
                this.textContent = "Follow";
                localStorage.removeItem(`isFollowing-${userId}`);
            }
        });

        // Check if the state is stored in local storage
        const userId = button.getAttribute("data-user-id");
        const isFollowing = localStorage.getItem(`isFollowing-${userId}`);

        if (isFollowing && isFollowing === "true") {
            button.classList.remove("btn-primary");
            button.classList.add("following-btn");
            button.textContent = "Following";
        }
    });
});

//............................................ user post image swipe end ..............................


//................................................ edit profile start ..........................

function submitForm(){
    document.getElementById('update-form').submit();
}

var loadFile = function (event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
};
//........................ ...................edit profile end.................................



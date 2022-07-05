<?php
$title = 'Weekday Services';
$pageTitle = 'Our Services';
$pageDescription = 'Lorem Ipsum is simply dummy text of the book. ';
include('../includes/header.php');
include('../includes/pageBanner.php');
?>


<section class="lightBg py-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-xl-6 mb-4">
                <h2 class="sectionTitle headingBar">Weekday Service</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <ul class="siteList">
                    <li>Lorem Ipsum is simply dummy text of the printing specimen book. </li>
                    <li>Lorem Ipsum is simply dummy text of the printing specimen book. </li>
                </ul>
                <a href="#" class="mainButton primaryButton mt-3">Submit a Request</a>
            </div>
            <div class="col-xl-6">
                <div class="serviceBoxes ms-xl-3">
                    <div class="serviceBox">
                        <p class="serviceHeading">Service Hours</p>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-clock primaryColor me-2"></i>
                            <p class="m-0">00:00</p>
                        </div>
                    </div>
                    <div class="serviceBox">
                        <p class="serviceHeading">Service Date</p>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-calendar primaryColor me-2"></i>
                            <p class="m-0">02-20-2022</p>
                        </div>
                    </div>
                    <div class="serviceBox">
                        <p class="serviceHeading">Service Language</p>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-globe primaryColor me-2"></i>
                            <p class="m-0">English, Spanish, Swahili, French</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seeWork py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="sectionTitle headingBar">See Our Work</h2>
                <p class="primaryColor">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme seeWork-slide">
                    <div class="item">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog1.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog2.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog3.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog1.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog2.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="item">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog3.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hearTeachings py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="sectionTitle headingBar">Hear  Our Teachings</h2>
                <p class="primaryColor">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="audioBox">
                    <img src="../assets/images/musicNote.png" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="audioBox">
                    <img src="../assets/images/musicNote.png" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="audioBox">
                    <img src="../assets/images/musicNote.png" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="audioBox">
                    <img src="../assets/images/musicNote.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include('../includes/footer.php');
?>
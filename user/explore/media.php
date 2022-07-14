<?php
$title = 'Media';
$pageTitle = 'Media';
$pageDescription = 'Lorem Ipsum is simply dummy text of the book. ';
include('../includes/header.php');
include('../includes/pageBanner.php');
?>


<section class="media py-5">
    <div class="container">
        <div class="row align-items-end justify-content-between mb-4">
            <div class="col-xl-8 mb-3">
                <p class="serviceHeading">Filter By</p>
                <form action="">
                    <div class="d-md-flex">
                        <div class="mainInputBox flex-grow-1 me-md-3 mb-2">
                            <select name="" id="" class="mainInput">
                                <option value="a" selected hidden disabled>View All</option>
                                <option value="b">Option A</option>
                                <option value="c">Option B</option>
                                <option value="d">Option C</option>
                            </select>
                        </div>
                        <div class="mainInputBox flex-grow-1 mb-2">
                            <select name="" id="" class="mainInput">
                                <option value="a" selected hidden disabled>Select Options</option>
                                <option value="b">Option A</option>
                                <option value="c">Option B</option>
                                <option value="d">Option C</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 mb-3">
                <div class="searchBar">
                    <input type="email" name="" id="" placeholder="Search Here">
                    <button type="submit" class="mainButton primaryButton text-uppercase">Search<i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="sectionTitle">Media</h2>
                <p class="primaryColor">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog1.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog1.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog1.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog1.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog1.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="videoBox">
                            <video class="video" poster="../assets/images/blog1.jpg">
                                <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                            </video>
                            <button class="playButton"><i class="fas fa-play"></i></button>
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
                    <div class="col-xl-3 col-md-6">
                        <div class="audioBox">
                            <img src="../assets/images/musicNote.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="paginationWrap">
                    <div class="d-md-flex align-items-center justify-content-between">
                        <p class="primaryColor">Showing 05 out of 20</p>
                        <nav>
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
include('../includes/footer.php');
?>
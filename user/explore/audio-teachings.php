<?php
$title = ' Audio Teachings';
$pageTitle = ' Audio Teachings';
$pageDescription = 'Lorem Ipsum is simply dummy text of the book. ';
include('../includes/header.php');
include('../includes/pageBanner.php');
?>

<div class="imageBg">

    <section class="recommendedAudio py-3 py-lg-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-12 text-center mb-4">
                    <h2 class="sectionTitle">Recommended Audio Teachings</h2>
                    <p class="primaryColor">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme audioTeaching-slide">
                        <div class="item">
                            <div class="audioBox">
                                <img src="../assets/images/musicNote.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="audioBox">
                                <img src="../assets/images/musicNote.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="audioBox">
                                <img src="../assets/images/musicNote.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="audioBox">
                                <img src="../assets/images/musicNote.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="audioBox">
                                <img src="../assets/images/musicNote.png" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="audioBox">
                                <img src="../assets/images/musicNote.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="audioListing py-3 py-lg-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-12 text-center">
                    <h2 class="sectionTitle">Audio Listings</h2>
                    <p class="primaryColor">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 col-lg-8 col-md-10 mx-auto">
                    <div class="searchBar">
                        <input type="email" name="" id="" placeholder="Search Here">
                        <button type="submit" class="mainButton primaryButton text-uppercase">Search<i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
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
            <div class="row">
                <div class="col-12">
                    <div class="paginationWrap">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <p class="primaryColor">Showing 16 out of 20</p>
                            <nav>
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="job-details.php" tabindex="-1" aria-disabled="true">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?php
include('../includes/footer.php');
?>
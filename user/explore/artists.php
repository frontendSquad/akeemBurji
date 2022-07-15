<?php
$title = 'Artists';
$pageTitle = 'Our Artists';
$pageDescription = 'Lorem Ipsum is simply dummy text of the book. ';
include('../includes/header.php');
include('../includes/pageBanner.php');
?>

<div class="imageBg">

    <section class="recommendedArtist py-3 py-lg-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-12 text-center mb-4">
                    <h2 class="sectionTitle">Recommended Artists</h2>
                    <p class="primaryColor">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme artist-slide">
                        <div class="item">
                            <div class="artist">
                                <img src="../assets/images/artist3.jpg" alt="">
                                <h4>Chris Tomlin</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="artist">
                                <img src="../assets/images/artist1.jpg" alt="">
                                <h4>Hillsong Worahip</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="artist">
                                <img src="../assets/images/artist4.jpg" alt="">
                                <h4>Lauren Daigle</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="artist">
                                <img src="../assets/images/artist2.jpg" alt="">
                                <h4>Lauren Daigle</h4>
                            </div>
                        </div>
                        <div class="item">
                            <div class="artist">
                                <img src="../assets/images/testimonailImage.jpg" alt="">
                                <h4>John Doe</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="artistListing py-3 py-lg-5">
        <div class="container">
            <div class="row mb-2">
                <div class="col-12 text-center">
                    <h2 class="sectionTitle">Artist Listings</h2>
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
                            <p class="primaryColor">Showing 8 out of 20</p>
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
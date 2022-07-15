<?php
$title = 'Sermon';
$pageTitle = 'Sermon';
$pageDescription = 'Lorem Ipsum is simply dummy text of the book. ';
include('../includes/header.php');
include('../includes/pageBanner.php');
?>


<section class="media py-5">
    <div class="container">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h2 class="sectionTitle">Sermon</h2>
                <p class="primaryColor">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 mb-3">
                <div class="videoBox">
                    <video class="video" poster="../assets/images/poster.jpg">
                        <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                    </video>
                    <button class="playButton"><i class="fas fa-play"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <h2 class="sectionTitle">A Call To Repetance</h2>
            </div>
            <div class="col-12 mb-3">
                <h3 class="secondaryTitle">Overview</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum known printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum known printer took a galley of type and scrambled it to make a type specimen book.</p>
                <ul class="siteList">
                    <li>Lorem Ipsum is simply dummy text of the printing specimen book. </li>
                    <li>Lorem Ipsum is simply dummy text of the printing specimen book. </li>
                    <li>Lorem Ipsum is simply dummy text of the printing specimen book. </li>
                    <li>Lorem Ipsum is simply dummy text of the printing specimen book. </li>
                    <li>Lorem Ipsum is simply dummy text of the printing specimen book. </li>
                </ul>
            </div>
            <div class="col-12 mb-3">
                <h3 class="secondaryTitle">Download File</h3>
                <div class="d-flex align-items-end gap-3">
                    <i class="fas fa-file-pdf fileIcon"></i>
                    <a href="./../assets/images/musicNote.png" download="sermon-notes" class="downloadButton">
                        <i class="fas fa-download"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>



<?php
include('../includes/footer.php');
?>
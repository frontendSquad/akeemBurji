<?php
$title = 'Video Statement';
$pageTitle = 'Video Title';
$pageDescription = 'Lorem Ipsum is simply dummy text of the book. ';
include('../includes/header.php');
include('../includes/pageBanner.php');
?>


<section class="media py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="videoBox">
                    <video class="video" poster="../assets/images/blog1.jpg">
                        <source src="../assets/videos/bannerVideo.mp4" type="video/mp4">
                    </video>
                    <button class="playButton"><i class="fas fa-play"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 mb-3">
                <div class="row">
                    <div class="col-xl-6">
                        <p class="mainLabel">Artist Name:</p>
                        <p class="mainText">Jason Roy</p>
                    </div>
                    <div class="col-xl-6">
                        <p class="mainLabel">Price:</p>
                        <p class="mainText">$20</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque minus omnis, modi non dolorum magni cupiditate nesciunt, similique doloribus officiis quis. Beatae, delectus ea est modi soluta nemo aut culpa corrupti pariatur id, error harum at facilis illum molestiae quae consequuntur nesciunt tempore. Iste provident quis, in nulla, dolores cumque harum perspiciatis velit quasi sint reiciendis itaque deleniti at non, voluptatibus vero ab eaque repellat dolorum aspernatur id? Aperiam nulla cum a perspiciatis aut beatae architecto obcaecati ipsa voluptatibus consequatur.</p>
            </div>
            <div class="col-12">
                <a href="#" class="mainButton primaryButton mt-3">Purchase Track</a>
            </div>
        </div>
    </div>
</section>



<?php
include('../includes/footer.php');
?>
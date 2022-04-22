<?php
$pg = 'feedback';
$title = "Feedbacks";
include('header.php');
include('sidebar.php');
?>



<div class="app-content content dashboard">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-content collapse show">
                                <div class="card-dashboard">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <div class="back-title mt-1">
                                            <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                            <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Feedback Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Name:</label>
                                                <p class="mainText">Mark</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Email:</label>
                                                <p class="mainText">mark@email.com</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Date:</label>
                                                <p class="mainText">02/02/2020</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Subject:</label>
                                                <p class="mainText">Abc</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">User Type:</label>
                                                <p class="mainText">Registered</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Message:</label>
                                                <p class="mainText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate,felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
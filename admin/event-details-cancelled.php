<?php
$pg = 'eventManagement';
$title = "Confirmed Event Details";
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
                                        <div class="col-xl-6">
                                            <div class="back-title mt-1">
                                            <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Event Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 text-right">
                                            <a class="siteBtn mt-1">Confirm Event?</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="eventImage">
                                                <img src="images/eventImage.png" alt="" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-10 offset-xl-1">
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event Name:</label>
                                                <p class="mainText">Event ABC</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event Location:</label>
                                                <p class="mainText">Location ABC</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event Payment Type:</label>
                                                <p class="mainText">Paid</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event Start Date:</label>
                                                <p class="mainText">09/01/21</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event End Date:</label>
                                                <p class="mainText">09/01/21</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event Start Time:</label>
                                                <p class="mainText">19:20</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event End Time:</label>
                                                <p class="mainText">21:20</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event Status:</label>
                                                <p class="mainText">Cancelled</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event Description:</label>
                                                <p class="mainText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
                                            </div>
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
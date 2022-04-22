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
                                            <a class="siteBtn mt-1" data-toggle="modal" data-target="#cancelEvent">Cancel Event</a>
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
                                                <p class="mainText">Confirmed</p>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">Event Description:</label>
                                                <p class="mainText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 mb-3">
                                            <h1 class="sub-title text-capitalize m-0">Event Participants</h1>
                                        </div>
                                        <div class="col-12">
                                            <div class="dataTables_length text-left">
                                                <div class="user-listing-top">
                                                    <div class="d-xl-flex align-items-end justify-content-between mb-xl-1">
                                                        <div class="userInput mb-2">
                                                            <label class="dashLabel d-inline-block mb-1 mb-xl-0 mr-1">Show Participants:</label>
                                                            <select class="d-inline-block dashInput sm-dropdown">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                        </div>
                                                        <div class="userInput mb-2">
                                                            <div class="form-field mb-1">
                                                                <div class="d-xl-flex align-items-center justify-content-end">
                                                                    <div class="dataTables_filter">
                                                                        <div class="dashSearchWrap">
                                                                            <form action="" method="POST">
                                                                                <input type="search" id="search-inp" class="dashInput search-input w-100" placeholder="Search Participants">
                                                                                <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="maain-tabble table-responsive">
                                                <table class="table table-striped table-bordered zero-configuration">
                                                    <thead>
                                                        <tr>
                                                            <th>S No.</th>
                                                            <th>Name</th>
                                                            <th>Phone No</th>
                                                            <th>User Type</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>ADCF</td>
                                                            <td>+1 101 202 303</td>
                                                            <td>Guest</td>
                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>ADCF</td>
                                                            <td>+1 101 202 303</td>
                                                            <td>Guest</td>
                                                        </tr>
                                                        <tr>
                                                            <td>03</td>
                                                            <td>ADCF</td>
                                                            <td>+1 101 202 303</td>
                                                            <td>Registered</td>
                                                        </tr>
                                                        <tr>
                                                            <td>04</td>
                                                            <td>ADCF</td>
                                                            <td>+1 101 202 303</td>
                                                            <td>Registered</td>
                                                        </tr>
                                                        <tr>
                                                            <td>05</td>
                                                            <td>ADCF</td>
                                                            <td>+1 101 202 303</td>
                                                            <td>Guest</td>
                                                        </tr>
                                                        <tr>
                                                            <td>06</td>
                                                            <td>ADCF</td>
                                                            <td>+1 101 202 303</td>
                                                            <td>Registered</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
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
<?php
$pg = 'eventManagement';
$title = "Edit Event Details";
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
                                                    <h1 class="page-title text-capitalize m-0">Edit Event Details</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 text-right">
                                            <a class="siteBtn mt-1">Confirm Event?</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="fullImage">
                                                <img src="images/eventImage.png" alt="" class="img-fluid w-100">
                                                <div class="fullImageAction">
                                                    <label for="editEventImg" class="fullImageActionBtn"><i class="fas fa-edit"></i></label>
                                                    <input type="file" name="" id="editEventImg" class="d-none" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-10 offset-xl-1">
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Event Name:</label>
                                                <div class="w-100">
                                                    <input type="text" class="mainInput" placeholder="Enter Event" value="Event ABC">
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Event Location:</label>
                                                <div class="w-100">
                                                    <input type="text" class="mainInput" placeholder="Enter Event Location" value="Location ABC">
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Event Payment Type:</label>
                                                <div class="w-100">
                                                    <select name="" id="" class="mainInput">
                                                        <option value="1">Paid</option>
                                                        <option value="2" selected>Free</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Event Start Date:</label>
                                                <div class="w-100">
                                                    <input type="date" class="mainInput" value="2021-09-01">
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Event End Date:</label>
                                                <div class="w-100">
                                                    <input type="date" class="mainInput" value="2021-09-01">
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Event End Time:</label>
                                                <div class="w-100">
                                                    <input type="time" class="mainInput" value="21:20">
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel">Event Status:</label>
                                                <div class="w-100">
                                                    <select name="" id="" class="mainInput">
                                                        <option value="1" selected>Confirmed</option>
                                                        <option value="2">Cancel</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 gap60">
                                                <label for="" class="mainLabel">About Event:</label>
                                                <div class="w-100">
                                                    <textarea name="" id="" rows="8" placeholder="Enter About Event" class="mainInput">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. Lorem ipsum dolor sit amet,</textarea>
                                                </div>
                                            </div>
                                            <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                <label for="" class="mainLabel"></label>
                                                <div class="w-100">
                                                    <a href="event-management.php" class="siteBtn">Update Event</a>
                                                </div>
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
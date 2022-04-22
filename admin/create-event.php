<?php
$pg = 'eventManagement';
$title = "Create Event";
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
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="back-title mt-1">
                                                <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Create New Event</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-10 offset-xl-1">
                                            <form action="" method="POST">
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Enter Event Name<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Event Name">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Enter Date<span class="text-danger">*</span>:</label>
                                                    <div class="w-100 d-xl-flex align-items-center">
                                                        <div class="mb-1 mb-xl-0">
                                                            <input class="mainInput" type="date">
                                                        </div>
                                                        <span class="mx-1 mb-1 d-none d-xl-block">-</span>
                                                        <div class="mb-1 mb-xl-0">
                                                            <input class="mainInput" type="date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Enter Event Location<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Event Location">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Event Payment Type<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="s" selected hidden disabled>Select</option>
                                                            <option value="1">Paid</option>
                                                            <option value="2">Free</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Event Charges<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="number" class="mainInput" placeholder="Enter Event Charges">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Upload Image<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <label for="uploadEventImg" class="siteBtn"><i class="fas fa-upload mr-1"></i>Upload</label>
                                                        <input type="file" name="" id="uploadEventImg" class="d-none" accept="image/jpg">
                                                        <div class="instruction">
                                                            <small>Max 5 MB</small>
                                                            <small>JPG File only</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel">Event Status<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <select name="" id="" class="mainInput">
                                                            <option value="s" selected hidden disabled>Select</option>
                                                            <option value="1">Confirmed</option>
                                                            <option value="2">Cancelled</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 gap60">
                                                    <label for="" class="mainLabel">About Event<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <textarea name="" id="" rows="8" placeholder="Enter About Event" class="mainInput"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex align-items-baseline my-2 gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <div class="w-100">
                                                        <a data-toggle="modal" data-target="#createdEvent" class="siteBtn mr-1">Create Event</a>
                                                    </div>
                                                </div>
                                            </form>
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
<?php
$pg = 'liveStream';
$title = "Live Stream";
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
                                        <div class="col-xl-6">
                                            <div class="back-title mt-1">
                                                <button type="button" class="backLink mr-1"><i class="fas fa-chevron-left"></i></button>
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Live Streams</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 text-right">
                                            <button data-toggle="modal" data-target="#endStream" class="siteBtn mt-1">End Live Stream</button>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="liveStreamStarted py-2">
                                                <img src="images/stream.png" alt="" class="img-fluid">
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
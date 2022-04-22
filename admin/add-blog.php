<?php
$pg = 'cmsManagement';
$title = "Add Blog";
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
                                                    <h1 class="page-title text-capitalize m-0">Blogs</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-xl-8 col-lg-10">
                                            <form action="blogs.php">
                                                <div class="mainDetail d-lg-flex my-2 align-items-start gap60">
                                                    <label for="" class="mainLabel">Blog Cover<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <div class="d-flex align-items-end">
                                                            <div class="">
                                                                <div class="mainImageFrame">
                                                                    <label for="upImg">
                                                                        <img src="images/placeholder.png" alt="" class="mainImage">
                                                                    </label>
                                                                    <input type="file" accept="image/*" id="upImg" class="d-none">
                                                                </div>
                                                                <p class="instruction">Upload JPG, JPEG Max Size: 15 Mb</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="w-100">
                                                    <div class="d-flex align-items-end">
                                                       <div class="">
                                                            <div class="mainImageFrame">
                                                                <label for="upImg">
                                                                    <img src="images/placeholder.png" alt="" class="mainImage">
                                                                </label>
                                                                <input type="file" accept="image/*" id="upImg" class="d-none">
                                                            </div>
                                                            <p class="instruction">Upload JPG, JPEG Max Size: 15 Mb</p>
                                                        </div>
                                                        <button class="removeButton"><i class="fas fa-trash"></i></button>
                                                    </div>
                                                </div> -->
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Blog Title<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="text" class="mainInput" placeholder="Enter Blog Title">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel">Posted On<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <input type="date" class="mainInput" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-start gap60">
                                                    <label for="" class="mainLabel">Job Description<span class="text-danger">*</span>:</label>
                                                    <div class="w-100">
                                                        <textarea name="" id="" rows="6" class="mainInput" placeholder="Enter Description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="mainDetail d-lg-flex my-2 align-items-baseline gap60">
                                                    <label for="" class="mainLabel"></label>
                                                    <button type="button" class="siteBtn" data-toggle="modal" data-target="#addedBlog">Post</button>
                                                </div>
                                            </form>
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
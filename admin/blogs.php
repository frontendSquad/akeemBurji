<?php
$pg = 'cmsManagement';
$title = "Blogs";
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
                                                    <h1 class="page-title text-capitalize m-0">Blogs</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 text-right">
                                            <a href="add-blog.php" class="siteBtn mt-1">Add New</a>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="maain-tabble table-responsive">
                                                <table class="table table-striped table-bordered zero-configuration">
                                                    <thead>
                                                        <tr>
                                                            <th>S No.</th>
                                                            <th>Blog Title</th>
                                                            <th>Posted On</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Abc</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-blog.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <button class="dropdown-item" data-toggle="modal" data-target="#inactiveBlog">
                                                                            <i class="fas fa-times"></i>Inactive</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>Abc</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-blog.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <button class="dropdown-item" data-toggle="modal" data-target="#inactiveBlog">
                                                                            <i class="fas fa-times"></i>Inactive</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>03</td>
                                                            <td>Abc</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-blog.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <button class="dropdown-item" data-toggle="modal" data-target="#inactiveBlog">
                                                                            <i class="fas fa-times"></i>Inactive</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>04</td>
                                                            <td>Abc</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-blog.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <button class="dropdown-item" data-toggle="modal" data-target="#inactiveBlog">
                                                                            <i class="fas fa-times"></i>Inactive</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>05</td>
                                                            <td>Abc</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-blog.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <button class="dropdown-item" data-toggle="modal" data-target="#inactiveBlog">
                                                                            <i class="fas fa-times"></i>Inactive</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>06</td>
                                                            <td>Abc</td>
                                                            <td>03/02/2020</td>
                                                            <td>Inactive</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-blog.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <button class="dropdown-item" data-toggle="modal" data-target="#activeBlog">
                                                                            <i class="fas fa-check"></i>Active</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>07</td>
                                                            <td>Abc</td>
                                                            <td>03/02/2020</td>
                                                            <td>Inactive</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-blog.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <button class="dropdown-item" data-toggle="modal" data-target="#activeBlog">
                                                                            <i class="fas fa-check"></i>Active</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>08</td>
                                                            <td>Abc</td>
                                                            <td>03/02/2020</td>
                                                            <td>Inactive</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-blog.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <button class="dropdown-item" data-toggle="modal" data-target="#activeBlog">
                                                                            <i class="fas fa-check"></i>Active</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="showing-result" id="DataTables_Table_0_info">
                                                Showing 10 of 50 Entries
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                <ul class="pagination justify-content-end">
                                                    <li class="paginate_button page-item previous disabled">
                                                        <a href="#" class="page-link">Previous</a>
                                                    </li>
                                                    <li class="paginate_button page-item active">
                                                        <a href="#" class="page-link">01</a>
                                                    </li>
                                                    <li class="paginate_button page-item">
                                                        <a href="#" class="page-link">02</a>
                                                    </li>
                                                    <li class="paginate_button page-item">
                                                        <a href="#" class="page-link">03</a>
                                                    </li>
                                                    <li class="paginate_button page-item next disabled" i="">
                                                        <a href="#" class="page-link">Next</a>
                                                    </li>
                                                </ul>
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
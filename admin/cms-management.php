<?php
$pg = 'cmsManagement';
$title = "Content Management";
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
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Content Management</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="maain-tabble table-responsive">
                                                <table class="table table-striped table-bordered zero-configuration">
                                                    <thead>
                                                        <tr>
                                                            <th>S No.</th>
                                                            <th>Page Title</th>
                                                            <th>Last Updated On</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Home</td>
                                                            <td>dd/mm/yyyy</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="edit-cms-home.php">
                                                                            <i class="far fa-edit"></i>Edit</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Services</td>
                                                            <td>dd/mm/yyyy</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="edit-cms-service.php">
                                                                            <i class="far fa-edit"></i>Edit</a>
                                                                    </div>
                                                                </div>
                                                            </td>
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
            </section>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
<?php
$pg = 'membershipCardModule';
$title = "Membership Card Module";
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
                                                <div class="pageTitleInner">
                                                    <h1 class="page-title text-capitalize m-0">Membership Card Module</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 text-right">
                                            <a href="create-template.php" class="siteBtn mt-1">Create Template</a>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <span class="pillSpan my-3">
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a href="membership-card-module.php" class="nav-link">Membership Cards</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="membership-card-module-2.php" class="nav-link active">Templates</a>
                                                    </li>
                                                </ul>
                                            </span>

                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12">
                                            <div class="dataTables_length text-left">
                                                <div class="user-listing-top  dashCard py-2 px-2">
                                                    <div class="d-xl-flex align-items-end justify-content-between mb-xl-1">
                                                        <div class="userInput mb-2">
                                                            <div class="d-md-flex align-items-center">
                                                                <label for="" class="dashLabel mb-1 mb-xl-0 mr-1">Sort By:</label>
                                                                <div class="d-sm-flex">
                                                                    <div class="mb-1 mb-xl-0 mr-sm-1">
                                                                        <input class="dashInput p-1" type="date">
                                                                    </div>
                                                                    <div class="mb-1 mb-xl-0">
                                                                        <input class="dashInput p-1" type="date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="userInput mb-2">
                                                            <div class="form-field mb-1">
                                                                <div class="d-xl-flex align-items-center justify-content-end">
                                                                    <div class="dataTables_filter">
                                                                        <div class="dashSearchWrap">
                                                                            <form action="" method="POST">
                                                                                <input type="search" id="search-inp" class="dashInput search-input w-100" placeholder="Search">
                                                                                <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-xl-flex align-items-end flex-wrap justify-content-between mb-xl-1">
                                                        <div class="userInput mb-2">
                                                            <label class="dashLabel d-inline-block mb-1 mb-xl-0 mr-1">Show</label>
                                                            <select class="d-inline-block dashInput sm-dropdown">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                            <label class="dashLabel d-inline-block mb-1 mb-xl-0 ml-1">Entries</label>
                                                        </div>
                                                    </div>
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
                                                            <th>Template</th>
                                                            <th>Created On Date</th>
                                                            <th>Status</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>Template ABC</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown br20" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-template.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <a class="dropdown-item">
                                                                            <i class="far fa-times"></i>Inactive</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>Template ABC</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown br20" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-template.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <a class="dropdown-item">
                                                                            <i class="far fa-times"></i>Inactive</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>03</td>
                                                            <td>Template ABC</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown br20" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-template.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <a class="dropdown-item">
                                                                            <i class="far fa-times"></i>Inactive</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>04</td>
                                                            <td>Template ABC</td>
                                                            <td>03/02/2020</td>
                                                            <td>Active</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown br20" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-template.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <a class="dropdown-item">
                                                                            <i class="far fa-times"></i>Inactive</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>05</td>
                                                            <td>Template ABC</td>
                                                            <td>03/02/2020</td>
                                                            <td>Inactive</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown br20" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-template.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <a class="dropdown-item">
                                                                            <i class="far fa-check"></i>Active</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>06</td>
                                                            <td>Template ABC</td>
                                                            <td>03/02/2020</td>
                                                            <td>Inactive</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <button type="button" class="btn transparent-btn ellipsis-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                                    <div class="dropdown-menu text-left custom-dropdown br20" x-placement="bottom-start">
                                                                        <a class="dropdown-item" href="view-template.php">
                                                                            <i class="far fa-eye"></i>View</a>
                                                                        <a class="dropdown-item">
                                                                            <i class="far fa-check"></i>Active</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-2">
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
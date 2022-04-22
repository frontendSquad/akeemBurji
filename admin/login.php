<?php
$title = "Login";
include('header.php');
?>

<section class="loginPage">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 loginBgLeft">
                <div class="loginCard">
                    <div class="loginLogo text-center">
                        <img src="images/loginLogo.png" alt="" class="img-fluid">
                    </div>
                    <div class="formBox">
                        <div class="formHeading my-1 my-lg-2">
                            <h2 class="formHeadingLg accentColor text-uppercase">Login</h2>
                            <h2>Please login to your account</h2>
                        </div>
                        <form action="dashboard.php" method="POST" class="py-2">
                            <div class="form-field">
                                <label for="" class="site-label">Email<span class="red">*</span>:</label>
                                <div class="position-relative">
                                    <input type="email" class="site-input" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="form-field m-0">
                                <label for="" class="site-label">Password<span class="red">*</span>:</label>
                                <div class="position-relative passwordWrapper">
                                    <input type="password" class="site-input passInput" placeholder="Enter Password">
                                    <i class="fas fa-eye-slash passDisplay" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="d-lg-flex justify-content-between align-items-center mt-1">
                                <div class="w-100">
                                    <input type="checkbox" id="rememberMe" name="rememberMe" value="rememberMe">
                                    <label for="rememberMe">Remember Me</label>
                                </div>
                                <div class="w-100 text-right">
                                    <a href="password-recovery.php" class="forgotLink red">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="form-field mt-2 mt-lg-3">
                                <button type="submit" class="siteBtn w-100">Sign in</button>
                            </div>
                            <!-- <div class="w-100 text-center">
                                <a href="#_" class="backToSite secondaryColor">Back To Website</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div class="loginBgRight"></div>
            </div>
        </div>
    </div>

</section>



<?php include('footer.php') ?>
<?php
$title = "Password Recovery";
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
                            <h2 class="formHeadingLg accentColor text-uppercase">Forgot Password</h2>
                            <h2>Please Enter The Verification Code Sent To Your Email or Phone No.</h2>
                        </div>
                        <form action="password-recovery-3.php" method="POST" class="py-2">
                            <div class="form-field">
                                <label for="" class="site-label">Verificiation Code<span class="red">*</span>:</label>
                                <div class="position-relative">
                                    <input type="number" class="site-input" placeholder="Enter Code" name="" id="">
                                </div>
                            </div>
                            <div class="w-100 text-right">
                                <a href="#_" class="forgotLink red">Resend Code</a>
                            </div>

                            <div class="form-field mt-2 mt-lg-3">
                                <button type="submit" class="siteBtn w-100">Continue</button>
                            </div>
                            <div class="w-100 text-center">
                                <a href="login.php" class="backToSite red"><i class="fas fa-long-arrow-alt-left mr-1"></i>Back To Login</a>
                            </div>
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
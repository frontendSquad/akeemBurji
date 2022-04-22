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
                            <h2>Please Enter Your Email Address To Receive Verification Code</h2>
                        </div>
                        <form action="password-recovery-2.php" method="POST" class="py-2">
                            <div class="form-field">
                                <label for="" class="site-label">Email<span class="red">*</span>:</label>
                                <div class="position-relative">
                                    <input type="email" class="site-input" placeholder="Enter Email Address" name="" id="">
                                </div>
                            </div>
                            <h3 class="text-center py-1 m-0">OR</h3>
                            <div class="form-field">
                                <label for="" class="site-label">Phone No<span class="red">*</span>:</label>
                                <div class="position-relative">
                                    <input type="tel" class="site-input" placeholder="Enter Phone No" name="" id="">
                                </div>
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
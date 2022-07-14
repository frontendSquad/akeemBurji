<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akeem Burji | <?php echo ((isset($title)) ? $title : 'Home'); ?></title>
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

    <!-- FontAwesome -->
    <!-- <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <header>
        <div class="headerWrapper userHeader">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-xl navbar-light bg-transparent">
                            <div class="container-fluid g-0">
                                <a class="navbar-brand" href="../home/">
                                    <img src="../assets/images/logo.png" alt="">
                                </a>

                                <div class="navSide">
                                    <button class="navbar-toggler offcanvasButton" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="main-nav-wrap offcanvas offcanvas-start align-self-center align-self-xl-start pt-3 pt-lg-0" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header justify-content-end">
                                            <button type="button" class="btn-close text-reset offCanvasClose" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="../home/">Home</a>
                                                </li>

                                                <li class="nav-item navDropdown">
                                                    <button type="button" class="nav-link navButton dropdown-toggle">
                                                        Services
                                                    </button>
                                                    <ul class="navDropContent navDropdownContent ">
                                                        <li><a class="dropdown-item" href="../services/sunday-services.php">Sunday Services</a></li>
                                                        <li><a class="dropdown-item" href="../services/weekday-services.php">Weekday Services</a></li>
                                                        <li><a class="dropdown-item" href="../services/prayer.php">Prayer</a></li>
                                                        <li><a class="dropdown-item" href="../services/counseling-comfort.php">Counseling & Comfort</a></li>
                                                        <li><a class="dropdown-item" href="../services/plan-visit.php">Plan a visit/What to expect</a></li>
                                                        <li><a class="dropdown-item" href="../services/more-services.php">More Services</a></li>
                                                        <li><a class="dropdown-item" href="../services/schools-academy.php">Schools & E- Academy</a></li>
                                                        <li><a class="dropdown-item" href="../services/funeral.php">Funeral</a></li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item navDropdown">
                                                    <button type="button" class="nav-link navButton dropdown-toggle">
                                                        Explore
                                                    </button>
                                                    <ul class="navDropContent navDropdownContent ">
                                                        <li><a class="dropdown-item" href="#">COVID - 19</a></li>
                                                        <li><a class="dropdown-item" href="#">Recommended Blogs</a></li>
                                                        <li><a class="dropdown-item" href="../explore/we-believe-statement.php">We Believe Statement</a></li>
                                                        <li><a class="dropdown-item" href="../explore/our-story.php">Our Story</a></li>
                                                        <li><a class="dropdown-item" href="../explore/statement-of-faith.php">Statement of Faith</a></li>
                                                        <li class="nav-item navDropend">
                                                            <button type="button" class="dropdown-item navButton dropdown-toggle">
                                                                Who We Are
                                                            </button>
                                                            <ul class="navDropContent navDropendContent ">
                                                                <li><a class="dropdown-item" href="#">COVID - 19</a></li>
                                                                <li><a class="dropdown-item" href="../explore/staff-volunteers.php">Staff & Volunteers</a></li>
                                                                <li><a class="dropdown-item" href="../explore/recommendations.php">Recommendations</a></li>
                                                                <li><a class="dropdown-item" href="../explore/testimonials.php">Testimonials</a></li>
                                                                <li><a class="dropdown-item" href="../explore/careers.php">Careers</a></li>
                                                                <li><a class="dropdown-item" href="../explore/blogs.php">Blogs</a></li>
                                                                <li class="nav-item navDropend">
                                                                    <button type="button" class="dropdown-item navButton dropdown-toggle">
                                                                        Audio
                                                                    </button>
                                                                    <ul class="navDropContent navDropendContent ">
                                                                        <li><a class="dropdown-item" href="../explore/audio-teachings.php">Hear Our Teachings</a></li>
                                                                        <li><a class="dropdown-item" href="../explore/artists.php">Artists</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Sermon Notes</a></li>
                                                                <li><a class="dropdown-item" href="#">Audio Bible</a></li>
                                                                <li><a class="dropdown-item" href="#">Bible Versions</a></li>
                                                                <li><a class="dropdown-item" href="#">Organization Structure</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="../explore/mission-statement.php">Mission Statement</a></li>
                                                        <li><a class="dropdown-item" href="../explore/vision-statement.php">Vision Statement</a></li>
                                                        <li><a class="dropdown-item" href="../explore/convenant-statement.php">Convenant Statement</a></li>
                                                        <li><a class="dropdown-item" href="../explore/leadership.php">Leadership</a></li>
                                                        <li class="nav-item navDropend">
                                                            <button type="button" class="dropdown-item navButton dropdown-toggle">
                                                                Ministries
                                                            </button>
                                                            <ul class="navDropContent navDropendContent ">
                                                                <li><a class="dropdown-item" href="#">COVID - 19</a></li>
                                                                <li><a class="dropdown-item" href="#">COVID - 19</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="../explore/faqs.php">FAQs</a></li>
                                                        <li class="nav-item navDropend">
                                                            <button type="button" class="dropdown-item navButton dropdown-toggle">
                                                                Resources
                                                            </button>
                                                            <ul class="navDropContent navDropendContent ">
                                                                <li><a class="dropdown-item" href="../explore/prayer-warriors.php">Prayer Warriors</a></li>
                                                                <li><a class="dropdown-item" href="../explore/music-tech.php">Music & Teach Team</a></li>
                                                                <li><a class="dropdown-item" href="../explore/kids-children.php">Kids/Children</a></li>
                                                                <li><a class="dropdown-item" href="../explore/youth.php">Youth</a></li>
                                                                <li><a class="dropdown-item" href="../explore/ladies.php">Ladies</a></li>
                                                                <li><a class="dropdown-item" href="../explore/men.php">Men</a></li>
                                                                <li><a class="dropdown-item" href="../explore/outreach.php">Outreach</a></li>
                                                                <li><a class="dropdown-item" href="../explore/world-mission.php">World Mission</a></li>
                                                                <li><a class="dropdown-item" href="../explore/media.php">Media</a></li>
                                                                <li><a class="dropdown-item" href="../explore/video-statement.php">Video Statement</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item navDropend">
                                                            <button type="button" class="dropdown-item navButton dropdown-toggle">
                                                                Our Locations
                                                            </button>
                                                            <ul class="navDropContent navDropendContent">
                                                                <li><a class="dropdown-item" href="#">COVID - 19</a></li>
                                                                <li><a class="dropdown-item" href="#">COVID - 19</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link active" href="../home/">Subscription</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link active" href="../home/">Request Forms</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link active" href="../home/">Events</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link active" href="../home/">Contact Us</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="authBox">
                                        <a class="authButton primaryBg">Login</a>
                                        <a class="authButton secondaryBg">Sign Up</a>
                                    </div>
                                    <div class="userBox">
                                        <div class="userBoxitem dropdown">
                                            <button type="button" class="notButton notificationButton" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="far fa-bell"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                        <div class="userBoxitem dropdown">
                                            <button type="button" class="notButton userButton dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="avatar"><img src="../assets/images/user.jpg" alt=""></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>

    </header>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- #keywords -->
    <meta name="keywords" content="" />
    <!-- #description -->
    <meta name="description" content="" />
    <!-- #title -->
    <title>Association</title>
    <!-- #favicon -->
    <!-- <link rel="shortcut icon" href="images/NIT_Puducherry_Official_logo.png" type="image/x-icon" /> -->
    <link rel="shortcut icon" href="<?= $this->Url->build('/images/NIT_Puducherry_Official_logo.png') ?>" type="image/x-icon">

    <!-- ==== css dependencies start ==== -->

    <?php echo $this->Html->css('bootstrap.min'); ?>

    <?php echo $this->Html->css('style.min.css'); ?>
    <?php echo $this->Html->css('plugins/animate'); ?>
    <?php echo $this->Html->css('plugins/aos'); ?>
    <?php echo $this->Html->css('plugins/fontawesome.min'); ?>
    <?php echo $this->Html->css('plugins/jquery-ui-min'); ?>
    <?php echo $this->Html->css('plugins/magnific-popup'); ?>
    <?php echo $this->Html->css('plugins/materialicons'); ?>
    <?php echo $this->Html->css('plugins/nice-select'); ?>
    <?php echo $this->Html->css('plugins/odometer-min'); ?>
    <?php echo $this->Html->css('plugins/quill.snow'); ?>
    <?php echo $this->Html->css('plugins/swiper.min'); ?>
    <?php echo $this->Html->css('plugins/tabler-icons.min'); ?>


    <!-- ==== js dependencies start ==== -->
    <?php echo $this->Html->script('jquery.min'); ?>
    <?php echo $this->Html->script('plugins/aos');
    ?>
    <?php //echo $this->Html->script('plugins/plugin-custom'); 
    ?>

    <?php //echo $this->Html->script('plugins/plugins'); 
    ?>
    <?php echo $this->Html->script('main');
    ?>
    <?php echo $this->Html->script('jquery.validate.min'); ?>

    <?php //echo $this->Html->script('apexcharts'); 
    ?>
</head>

<body>
    <!-- start preloader -->
    <div id="preloader">
        <img alt="img" src="<?php echo $this->Url->image('/images/NIT_Puducherry_Official_logo.png'); ?>" />

        <!-- <img src="/images/NIT_Puducherry_Official_logo.png" alt="img" class="bookicon-preloader" style="width: 150px" /> -->
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-md-flex d-center" aria-label="scroll Bar Button">
        <i class="mat-icon fas fa-angle-double-up"></i>
    </button>
    <!-- Scroll To Top End -->

    <!-- Start Custom Cursor -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Custom Cursor -->

    <!-- header-section start -->
    <header class="header-section cmn-s2color-header header-v3 header-v5">
        <!-- top header start -->
        <div class="one__header header-cmnbg-added head-border pb-5">
            <!-- top header end -->
            <div class="container">
                <!-- main header start -->
                <div class="main-navbar one__mainheader">
                    <!-- header-section start -->
                    <nav class="navbar-custom">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>" class="nav-brand d-lg-none">

                                <img class="w-100" style="width: 100px !important;" alt="logo" src="<?php echo $this->Url->image('../images/NIT_Puducherry_Official_logo.png'); ?>" />

                                <!-- <img class="w-100" src="images/NIT_Puducherry_Official_logo.png" style="width: 100px !important;" alt="logo" /> -->
                            </a>
                            <div class="d-flex gap-3 align-items-center position-relative">
                                <div class="switch-wrapper-top d-flex d-lg-none"></div>
                                <button class="navbar-toggle-btn d-block d-lg-none" type="button">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="navbar-toggle-item cus__scroll">
                            <div class="d-flex gap-5 flex-column flex-lg-row align-items-start align-items-lg-center justify-content-center mt-5 mt-lg-0">
                                <div class="left__navbox d-flex align-items-center gap-4 gap-xl-6 gap-xxl-10">
                                    <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>" class="navbar-brand d-none d-lg-block">

                                        <!-- <img src="images/NIT_Puducherry_Official_logo.png" alt="logo" style="width: 100px" /> -->
                                        <img class="w-100" style="width: 100px !important;" alt="logo" src="<?php echo $this->Url->image('/images/NIT_Puducherry_Official_logo.png'); ?>" />

                                    </a>
                                    <ul class="custom-nav d-lg-flex d-grid gap-4 gap-xl-6">
                                        <li class="menu-item fix_button position-relative">
                                            <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">
                                                <button class=" position-relative itembg__1  fw_500 n500-color">Home</button>
                                            </a>
                                        </li>
                                        <li class="menu-item position-relative">
                                            <button class="position-relative itembg__1 pe-5 fw_500 n500-color cus-z1">
                                                About Us
                                            </button>
                                            <ul class="sub-menu p-lg-5 box-shadow3">
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Mission</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Vision</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Office bearers</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Message from director</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Message from president</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item position-relative fix_button"><button class=" position-relative itembg__1 fw_500 n500-color">Map of alumni</button></li>
                                        <li class="menu-item position-relative">
                                            <button class="position-relative itembg__1 pe-5 fw_500 n500-color cus-z1">
                                                Support
                                            </button>
                                            <ul class="sub-menu p-lg-5 box-shadow3">
                                                <li class="menu-link py-1">
                                                    <a href="<?php echo $this->Url->build(['controller' => 'GuesthouseBookingDetails', 'action' => 'add']); ?>" class="fw_500 n500-color">Guest house booking</a>

                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="<?php echo $this->Url->build(['controller' => 'CardApplicationDetails', 'action' => 'add']); ?>" class="fw_500 n500-color">Alumni Card Application</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="<?php echo $this->Url->build(['controller' => 'GetTranscriptDetails', 'action' => 'add']); ?>" class="fw_500 n500-color">Get Transcript</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item position-relative">
                                            <button class="position-relative itembg__1 pe-5 fw_500 n500-color cus-z1">
                                                Engage
                                            </button>
                                            <ul class="sub-menu p-lg-5 box-shadow3">
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Job opportunities</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Volunteer for Leadership Talks</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="<?php echo $this->Url->build(['controller' => 'VolunteerInterviewDetails', 'action' => 'add']); ?>" class="fw_500 n500-color">Volunteer for mockinterview</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="<?php echo $this->Url->build(['controller' => 'DonateBooksDetails', 'action' => 'add']); ?>" class="fw_500 n500-color">Donate Books</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item position-relative">
                                            <button class="position-relative itembg__1 pe-5 fw_500 n500-color cus-z1">
                                                Events
                                            </button>
                                            <ul class="sub-menu p-lg-5 box-shadow3">
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Alumni Meetups</a>
                                                </li>
                                                <li class="menu-link py-1">
                                                    <a href="" class="fw_500 n500-color">Alumni Reunions</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item position-relative fix_button"><button href="" class="position-relative itembg__1  fw_500 n500-color">Contact</button></li>

                                        <!-- <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>">
                                            <button>logout</button>

                                        </a> -->
                                        <div class="d-flex align-items-center gap-4 gap-xxl-6">
                                            <?php if ($user['id'] == '') : ?>
                                                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>" class="cmn-btn d-none d-sm-block second-alt n700-color gap-2 d-flex align-items-center radius30 py-2 py-xxl-4 px-xxl-8 px-5">
                                                    <span>Login</span>
                                                    <i class="ti ti-arrow-up-right "></i>
                                                </a>
                                            <?php else : ?>
                                                <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>" class="cmn-btn n700-color gap-2 d-flex align-items-center radius30 py-2 py-xxl-4 px-xxl-8 px-5">
                                                    <span>Logout</span>
                                                    <i class="ti ti-arrow-down-left fs-six"></i>
                                                </a>
                                            <?php endif; ?>

                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- main header end -->
            </div>
        </div>
    </header>

    <!-- header-section end -->

    <!-- BLUE CONTENT -->
    <div class="container-fluid px-2">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>

    <!-- footer Start -->
    <footer class="footer__four bg1-color overflow-hidden">
        <div class="footer__topfour pt-120 pb-120 position-relative">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="d-flex edubox-f5-form gap-6 bb-opa03 mb-10 mb-xl-15 pb-10 pb-xl-15">
                            <div class="edubox-f5" data-aos="zoom-in-left" data-aos-duration="1400">
                                <a href="index.php" class="mb-3 mb-md-5 mb-xl-8 d-block">
                                    <!-- <img src="images/logo-theme.png" alt="img" /> -->
                                    <img alt="img" src="<?php echo $this->Url->image('/images/logo-theme.png'); ?>" />

                                </a>
                                <p class="n0-color">
                                    Welcome to our diverse and dynamic course catalog.
                                </p>
                            </div>
                            <div class="box subscribebox w-100" data-aos="zoom-in-down" data-aos-duration="1400">
                                <h5 class="n0-color mb-6 mb-md-8">
                                    Subscribe for newsletters
                                </h5>
                                <form action="#0" class="d-flex radius32 align-items-center">
                                    <input type="text" placeholder="Enter Email..." />
                                    <button class="d-center btn__v4">
                                        <span>
                                            <i class="ti ti-send n0-color"></i>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="footer-fivelink d-flex justify-content-between">
                            <div class="box" data-aos="zoom-in-left" data-aos-duration="1400">
                                <h4 class="n0-color mb-5 mb-md-8">Navigation</h4>
                                <ul class="widget__linkone">
                                    <li>
                                        <a href="about.php" class="p1hover"> About us </a>
                                    </li>
                                    <li>
                                        <a href="" class="p1hover"> Courses </a>
                                    </li>
                                    <li>
                                        <a href="community.php" class="p1hover"> Community </a>
                                    </li>
                                    <li>
                                        <a href="" class="p1hover"> FAQs </a>
                                    </li>
                                    <li>
                                        <a href="" class="p1hover"> Blogs </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer__onewidget__lin" data-aos="zoom-in-left" data-aos-duration="1400">
                                <h4 class="n0-color mb-5 mb-md-8">Contact</h4>
                                <ul class="widget__contactone">
                                    <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                                        <span class="icon cmn__icon48 bg2-color radius100 d-center">
                                            <i class="ti ti-phone p1-color fs-six"></i>
                                        </span>
                                        <a href="#0" class="p1hover">
                                            (303) 555-0105
                                            <span class="d-block n0-color"> (303) 555-0105 </span>
                                        </a>
                                    </li>
                                    <li class="d-flex gap-3 gap-xl-5 mb-4 mb-xl-6">
                                        <span class="icon cmn__icon48 bg2-color radius100 d-center">
                                            <i class="ti ti-mail-opened p1-color fs-six"></i>
                                        </span>
                                        <a href="#0" class="p1hover">
                                            info@gmail.com
                                            <span class="d-block n0-color">
                                                example@gmail.com
                                            </span>
                                        </a>
                                    </li>
                                    <li class="d-flex gap-3 gap-xl-5">
                                        <span class="icon cmn__icon48 bg2-color radius100 d-center">
                                            <i class="ti ti-map-pin-check p1-color fs-six"></i>
                                        </span>
                                        <a href="#0" class="p1hover">
                                            3605 Parker Rd.
                                            <span class="d-block n0-color"> 3890 Poplar Dr. </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-soc" data-aos="zoom-in-left" data-aos-duration="1400">
                                <h4 class="n0-color mb-5 mb-md-8">Follow Us</h4>
                                <ul class="social-area d-flex gap-3 gap-xl-4">
                                    <li>
                                        <a href="javascript:void(0)" class="d-center">
                                            <i class="ti ti-brand-facebook fw_400 fs-seven"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="d-center">
                                            <i class="ti ti-brand-twitter fw_400 fs-seven"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="d-center">
                                            <i class="ti ti-brand-instagram fw_400 fs-seven"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="d-center">
                                            <i class="ti ti-brand-pinterest fw_400 fs-seven"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4">
                        <div class="footer5-recent mt-6 mt-sm-0">
                            <h4 class="n0-color mb-5 mb-md-8" data-aos="zoom-in-right" data-aos-duration="1400">
                                Recent Post
                            </h4>
                            <ul class="f5-recent">
                                <li class="d-flex align-items-center gap-3 gap-xl-6 mb-xxl-8 mb-xl-6 mb-lg-4 mb-4" data-aos="zoom-in-right" data-aos-duration="1000">
                                    <!-- <img src="images/common/rc1.png" alt="img" class="radius100" /> -->
                                    <img class="radius100" alt="img" src="<?php echo $this->Url->image('/images/common/rc1.png'); ?>" />

                                    <a href="" class="cont">
                                        <h6 class="fs20">
                                            Demystifying Data Science
                                            <span class="s1-color d-block mt-2 fw_400 fs-seven">
                                                23/10/23
                                            </span>
                                        </h6>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center gap-3 gap-xl-6 mb-xxl-8 mb-xl-6 mb-lg-4 mb-4" data-aos="zoom-in-right" data-aos-duration="1200">
                                    <!-- <img src="images/common/rc2.png" alt="img" class="radius100" /> -->
                                    <img class="radius100" alt="img" src="<?php echo $this->Url->image('/images/common/rc2.png'); ?>" />

                                    <a href="" class="cont">
                                        <h6 class="fs20">
                                            Crafting Compelling Presentations
                                            <span class="s1-color d-block mt-2 fw_400 fs-seven">
                                                23/10/23
                                            </span>
                                        </h6>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center gap-3 gap-xl-6 mb-xxl-8 mb-xl-6 mb-lg-4 mb-4" data-aos="zoom-in-right" data-aos-duration="1400">
                                    <!-- <img src="images/common/rc3.png" alt="img" class="radius100" /> -->
                                    <img class="radius100" alt="img" src="<?php echo $this->Url->image('/images/common/rc3.png'); ?>" />

                                    <a href="" class="cont">
                                        <h6 class="fs20">
                                            The Psychology of Learning
                                            <span class="s1-color d-block mt-2 fw_400 fs-seven">
                                                23/10/23
                                            </span>
                                        </h6>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center gap-3 gap-xl-6" data-aos="zoom-in-right" data-aos-duration="1600">
                                    <!-- <img src="images/common/rc4.png" alt="img" class="radius100" /> -->
                                    <img class="radius100" alt="img" src="<?php echo $this->Url->image('/images/common/rc4.png'); ?>" />

                                    <a href="" class="cont">
                                        <h6 class="fs20">
                                            The Role of Emotional
                                            <span class="s1-color d-block mt-2 fw_400 fs-seven">
                                                23/10/23
                                            </span>
                                        </h6>
                                    </a>
                                </li>
                            </ul>
                            <a href="" class="d-inline-flex align-items-center mt-6 gap-1 p1-color fw_600 themeborder">
                                See all
                                <i class="ti ti-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottomone">
            <div class="container">
                <div class="footer__bottomone__content bt-dash d-grid justify-content-center text-center py-6 py-lg-10 d-md-flex align-items-center justify-content-lg-between gap-2 gap-md-15">
                    <p class="fs-seven n0-color">
                        Copyright &copy; 2024
                        <a href="index.php" class="p1-color">Edufast</a> All Rights
                        Reserved.
                    </p>
                    <ul class="terms__one d-flex justify-content-center align-items-center gap-4 gap-lg-6">
                        <li>
                            <a href="contact.php" class="fs-seven n0-color p1hover">
                                Helps
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-seven n0-color p1hover">
                                Terms & Conditions
                            </a>
                        </li>
                        <li>
                            <a href="" class="fs-seven n0-color p1hover">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


</body>

</html>
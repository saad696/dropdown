<!DOCTYPE html>
<html lang="en">


<body>
    <!-- navbar start -->
    <section class="navigation">
        <div id="info">
            <p class="is-size-6 py-2 ml-6 mb-0 has-text-weight-medium is-white has-text-white">info@sagartech.co.in</p>
        </div>
        <nav class="navbar sticky-top navbar-expand-lg is-white" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand"><img src="../../../../images/sagartech.png" alt="Logo"></a>
                <button class="navbar-toggler" style="color: transparent;" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                    <span class="sr-only">Toggle navigation</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="navbar-items">
                        <ul class="navbar-nav">
                            <li class="nav-item" id="nav-item">
                                <a class="nav-link is-size-6-desktop is-size-7-mobile has-text-weight-normal" id="nav-link" href="#" id="links">HOME</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle has-text-weight-normal is-size-6-desktop is-size-7-mobile services" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SERVICES
                                </a>
                                <ul class="dropdown-menu dropdown-menu-light animate__animated animate__fadeInDown" aria-labelledby="navbarDarkDropdownMenuLink">

                                    <div class="d-md-flex align-items-start justify-content-start">

                                        <div class="has-text-centered">
                                            <div class="dropdown-header is-size-6 has-text-weight-bold  px-3">Web Development</div>
                                            <a <?php echo ($page == 'staticWeb') ? 'class=active' : ''; ?> class="dropdown-item is-size-7 py-0" href="staticWebsite.php">Static Website</a>
                                            <a <?php echo ($page == 'dynamicWeb') ? 'class=active' : ''; ?> class="dropdown-item is-size-7 py-0" href="dynamicWebsite.php">Dynamic Website</a>
                                            <a class="dropdown-item is-size-7 py-0" href="eCommerce.php">E-commerce Website</a>
                                            <a class="dropdown-item is-size-7 py-0" href="blogging.php ">Blogging Website</a>
                                        </div>

                                        <div class="has-text-centered">
                                            <div class="dropdown-header is-size-6 has-text-weight-bold px-4">Accounting Services</div>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages\Accounting Services/gstRegistration.php">GST Registration</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages\Accounting Services/gstReturnFile.php">GST Return File</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages\Accounting Services/itReturnFile.php">IT Return File</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages\Accounting Services/accountsWriting.php">Accounts Writing</a>
                                        </div>

                                        <div class="has-text-centered">
                                            <div class="dropdown-header is-size-6 has-text-weight-bold px-3">Graphic Designing</div>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/Graphic Designing/logoDesigning.php">Logo Designing</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/Graphic Designing/posterDesigning.php">Poster Designing</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/Graphic Designing/brochureDesigning.php">Brochure Designing</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/Graphic Designing/hoardingDesigning.php">Hoarding Designing</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>

                                    <div class="d-md-flex align-items-start justify-content-start">
                                        <div class="has-text-centered">
                                            <div class="dropdown-header is-size-6 has-text-weight-bold px-1">App Development</div>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/App Development/androidApp.php">Android App</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/App Development/iosApp.php">Ios App</a>
                                        </div>

                                        <div class="has-text-centered">
                                            <div class="dropdown-header is-size-6 has-text-weight-bold px-1">Digital Marketing</div>
                                            <div class="dropdown-header is-size-7 has-text-weight-semibold">Offline</div>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/Digital Marketing/offline/bulkSms.php">Bulk SMS</a>
                                            <div class="dropdown-header is-size-7 has-text-weight-semibold">Online</div>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/Digital Marketing/online/smo.php">Social Media Optimization</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/Digital Marketing/online/smm.php">Social Media Marketing</a>
                                        </div>
                                        <div class="has-text-centered">
                                            <div class="dropdown-header is-size-6 has-text-weight-bold">SEO</div>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/SEO/localSeo.php">Local SEO</a>
                                            <a class="dropdown-item is-size-7 py-0" href="C:\xampp\htdocs\dropdown\src\php\pages/SEO/panIndia.php">PAN India</a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a id="links" class="nav-link is-size-6-desktop is-size-7-mobile has-text-weight-normal" href="#">PORTFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link is-size-6-desktop is-size-7-mobile has-text-weight-normal" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link is-size-6-desktop is-size-7-mobile has-text-weight-normal" href="#">CONTACT US</a>
                            </li>
                            <li class="nav-item">
                                <a id="links" class="nav-link active is-size-6-desktop is-size-7-mobile has-text-weight-normal" href="#">REQUEST A QUOTE!</a>
                            </li>
                            <li class="nav-item">
                                <a id="links" class="button is-size-6-desktop is-size-7-mobile has-text-weight-normal" href="#">OUR SOCIALS</a>
                            </li>
                    </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar end -->
</body>
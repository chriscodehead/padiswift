        <!-- Start Navbar Area -->
        <nav class="navbar navbar-expand-lg top-navbar style5" id="navbar">
            <div class="container-fluid style4">
                <a class="navbar-brand" href="./">
                    <img width="160" src="assets/images/logo-main.png" class="navbar-logo" alt="logo">
                </a>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto style2">

                        <li class="nav-item">
                            <a href="./" class="nav-link <?php print @$active1;?>">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="about" class="nav-link <?php print @$active2;?>">
                                About 
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="services" class="nav-link <?php print @$active3;?>">
                                Services 
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="faq" class="nav-link <?php print @$active4;?>">
                                FAQs 
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="blog" class="nav-link <?php print @$active5;?>">
                                Blog 
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="contact" class="nav-link <?php print @$active6;?>">Contact 
                                <span>Us</span> </a>
                        </li>
                    </ul>

                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <a href="{{env('GOOGLE_STORE_LINK')}}" class="default-btn home-one-main" style="">Get App</a>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
        <!-- End Navbar Area -->

        <!-- Start Mobile Device Navbar Area -->
       <div class="responsive-navbar offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <a href="index.html" class="logo d-inline-block">
                <img src="assets/images/logo-main.png" width="160" alt="logo">
            </a>
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>

        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">

                <div class="accordion-item">
                    <a class="accordion-button without-icon <?php print @$active1;?>" href="./">
                        Home
                    </a>
                </div>

                <div class="accordion-item">
                    <a class="accordion-button without-icon <?php print @$active2;?>" href="about">
                        About
                    </a>
                </div>

                <div class="accordion-item">
                    <a class="accordion-button without-icon <?php print @$active3;?>" href="services">
                        Services
                    </a>
                </div>

                <div class="accordion-item">
                    <a class="accordion-button without-icon <?php print @$active4;?>" href="faq">
                        FAQs
                    </a>
                </div>

                <div class="accordion-item">
                    <a class="accordion-button without-icon <?php print @$active5;?>" href="blog">
                        Blog
                    </a>
                </div>

                <div class="accordion-item">
                    <a class="accordion-button without-icon <?php print @$active6;?>" href="contact">
                        Contact Us
                    </a>
                </div>

            </div>

            <div class="others-option d-flex align-items-center">
                <div class="option-item">
                    <a href="{{env('GOOGLE_STORE_LINK')}}" class="default-btn home-one-main">Download App</a>
                </div>
            </div>

        </div>
        </div>
        <!-- End Mobile Device Navbar Area -->
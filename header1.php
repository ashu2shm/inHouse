
    </head>
    <body>

<!--  
        <div class="loader-wrapper">
            <div class="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div> -->
    

        <!-- Theme Switcher Start -->
        <!-- <div class="switch-theme-mode">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div> -->
        <!-- Theme Switcher End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area style-two" id="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <!-- <img class="logo-light" src="assets/img/logo.webp" alt="logo">
                        <img class="logo-dark" src="assets/img/logo-white.webp" alt="logo"> -->
                        <span class="logo-modern">MBBS IN RUSSIA</span>
                    </a>
                    <div class="other-option d-flex align-items-center justify-content-end d-lg-none">
                        <!-- <button type="button" class="search-btn d-lg-none" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="flaticon-search"></i>
                        </button> -->
                        <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                            <span class="burger-menu">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link active">
                                    Home
                                </a>
                              
                            </li>
                             <li class="nav-item">
                                <a href="about" class=" nav-link">
                                About Us
                                </a>
                               
                            </li>
                            <li class="nav-item">
                                <a href="colleges" class=" nav-link">
                                  Colleges
                                </a>
                               
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="dropdown-toggle nav-link">
                                    University
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            University One
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                           University Two
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                          University Three
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
                            <!--<li class="nav-item">-->
                            <!--    <a href="#" class=" nav-link">-->
                            <!--        Faq-->
                            <!--    </a>-->
                                
                            <!--</li>-->
                            <li class="nav-item">
                                <a href="#" class=" nav-link">
                                    Blog
                                </a>
                                <!-- <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                            Blog Layout
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="blog-no-sidebar.html" class="nav-link">
                                                    Blog Grid
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-left-sidebar.html" class="nav-link">
                                                    Blog Left Sidebar
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-right-sidebar.html" class="nav-link">
                                                    Blog Right Sidebar
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                            Single Blog Layout
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="blog-details-no-sidebar.html" class="nav-link">
                                                    Blog Details Without Sidebar
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-details-left-sidebar.html" class="nav-link">
                                                    Blog Details Left Sidebar
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="blog-details-right-sidebar.html" class="nav-link">
                                                    Blog Details Right Sidebar
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a href="contact" class="nav-link">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                        <div class="others-option d-flex align-items-center">
                            <!-- <div class="option-item">
                                <button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <i class="flaticon-search"></i>
                                </button>
                            </div> -->
                            <div class="option-item">
                                <div class="contact-item">
                                
                                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">Apply Now</button>
                                    
                                   <?php include_once('modal-form.php');?>
                                   
                                </div>
                            </div>
                            <div class="option-item">
                                <a class="sidebar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                                    <i class="flaticon-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Responsive Navbar Area -->
        <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a href="/" class="logo d-inline-block">
                    <!-- <img class="logo-light" src="assets/img/logo.webp" alt="logo">
                    <img class="logo-dark" src="assets/img/logo-white.webp" alt="logo"> -->
                    <span class="logo-modern" style="text-wrap:nowrap">MBBS in Russia</span>
                </a>
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="navbarAccordion">
                    <div class="accordion-item">
                          <a class="accordion-button without-icon" href="#">
                        Home
                        </a>
                    </div>
                    
                    <div class="accordion-item">
                       
                        <a class="accordion-button without-icon" href="about">
                         About Us
                        </a>
                      
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="colleges">
                         Colleges
                        </a>
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="#">
                            Blog
                        </a>
                       
                    </div>
                    <div class="accordion-item">
                        <a class="accordion-button without-icon" href="contact">
                            Contact Us
                        </a>
                    </div>
                </div>
               
            </div>
        </div>

        <!-- Start Search Modal -->
        <!-- <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                     <form>
                        <input type="text" class="form-control" placeholder="Search here....">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </form>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-fill"></i></button>
                </div>
            </div>
        </div> -->
        <!-- End Search Modal -->
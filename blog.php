<!-- 
////////////////////////////////////////////////////////////////

Author: Free-Template.co
Author URL: http://free-template.co.
License: https://creativecommons.org/licenses/by/3.0/
License URL: https://creativecommons.org/licenses/by/3.0/
Site License URL: https://free-template.co/template-license/
  
Website:  https://free-template.co
Facebook: https://www.facebook.com/FreeDashTemplate.co
Twitter:  https://twitter.com/Free_Templateco
RSS Feed: https://feeds.feedburner.com/Free-templateco

////////////////////////////////////////////////////////////////
-->
<?php require 'basic/head.php' ;?>

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">Coach<span
                                class="text-primary">.</span> </a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="index.html#home-section" class="nav-link">Home</a></li>
                            <li class="has-children">
                                <a href="index.html#about-section" class="nav-link">About</a>
                                <ul class="dropdown">
                                    <li><a href="https://free-template.co" target="_blank" class="nav-link"><span
                                                class="text-primary">More Free Templates</span></a></li>
                                    <li><a href="index.html#training-section" class="nav-link">Our Training</a></li>
                                    <li><a href="index.html#testimonials-section" class="nav-link">Testimonials</a></li>
                                    <li><a href="index.html#gallery-section" class="nav-link">Gallery</a></li>
                                    <li><a href="index.html#blog-section" class="nav-link">Blog</a></li>
                                    <li class="has-children">
                                        <a href="#">More Links</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="index.html#training-section" class="nav-link">Our Training</a></li>
                            <li><a href="index.html#services-section" class="nav-link">Services</a></li>
                            <li><a href="index.html#contact-section" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                            class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>


    <?php 
        $articalName = $_GET['a'];
        require("articals/".$articalName.".php");
    ?>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="footer-heading mb-4">About Us</h2>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                        decided to leave for the far World of Grammar.</p>
                </div>


                <div class="col-md-3 ml-auto">
                    <h2 class="footer-heading mb-4">Quick Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                        <li><a href="#training-section" class="smoothscroll">Our Training</a></li>
                        <li><a href="#services-section" class="smoothscroll">Services</a></li>
                        <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                        <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <div class="mb-5">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>

                    <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                    <form action="#" method="post" class="footer-subscribe">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-secondary text-white bg-transparent"
                                placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-black" type="button"
                                    id="button-addon2">Send</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <div class="row pt-5 mt-5 text-left">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                        <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright"><small>&copy; <script>
                                document.write(new Date().getFullYear());
                                </script> Coach. All Rights Reserved. <br> Designed &amp; Developed by <a
                                    href="https://free-template.co" target="_blank">Free-Template.co</a></small></p>

                    </div>
                </div>

            </div>

        </div>
    </footer>

</div> <!-- .site-wrap -->

<?php require 'basic/foot.php'; ?>
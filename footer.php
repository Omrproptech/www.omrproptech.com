<!--/footer-9-->
    <footer class="w3l-footer9">
        <section class="footer-inner-main py-5">
            <div class="container py-md-4">
                <div class="right-side">
                    <div class="row footer-hny-grids sub-columns">
                        <div class="col-lg-3 sub-one-left">
                            <h6>About </h6>
                            <p class="footer-phny pe-lg-5">At OMR Proptech, we are not only help you search but help you find. we help you find joy.</p>
                            <div class="columns-2 mt-4 pt-lg-2">
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/omrproptech"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/omrproptech"><span class="fab fa-instagram"></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Company</h6>
                            <ul>

                                <li><a href="#why"><i class="fas fa-angle-right"></i> Why Us</a>
                                </li>
                                <li><a href="#licence"><i class="fas fa-angle-right"></i>Our Agents
                                    </a>
                                </li>
                                <li><a href="#log"><i class="fas fa-angle-right"></i>Our Offers
                                    </a></li>

                                <li><a href="#career"><i class="fas fa-angle-right"></i> Careers</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Services</h6>
                            <ul>
                                <li><a href="#processing"><i class="fas fa-angle-right"></i> Buy Properties</a>
                                </li>
                                <li><a href="#research"><i class="fas fa-angle-right"></i> Sell Properties</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Rent Properties</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Property Search</a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Explore</h6>
                            <ul>
                                <li><a href="#processing"><i class="fas fa-angle-right"></i> Homes for Rent</a>
                                </li>
                                <li><a href="#research"><i class="fas fa-angle-right"></i> Apartments for Rent</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Homes for Sale</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i> Apartments for Sale</a>
                                </li>


                            </ul>
                        </div>
                        
                    </div>
                </div>
                <div class="below-section mt-5 pt-lg-3">
                    <div class="copyright-footer">
                        <div class="columns text-left">
                            <p>© 2022 by the OMR Proptech – All Rights Reserved</p>
                        </div>
                        <ul class="footer-w3list text-right">
                            <li><a href="TnC.php">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>
    <!--//footer-9 -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
   
    <!--/search-->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/demo1.js"></script>
    <!--//search-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
	 <script>
    /*function check(e)
    {
    alert(e.keyCode);
    }*/
    document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
                alert('not allowed');
            }
            return false;
    };
    </script>

</body>

</html>

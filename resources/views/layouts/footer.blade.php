<footer>
    <div class="footer-top ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-12 col-sm-12 footer_links ">
                    <h4 class="navbar-brand"><img src="img/logo-footer.svg" class="footer-logo" alt="logo"></h4>
                    <p>Yuniro is a software house based in Rome,
                        Italy. We offer a wide range of software
                        solutions for businesses of all sizes.</p>
                    <div class="col-auto social-icons">
                        <a href="#"><i class='fa fa-facebook'></i></a>
                        <a href="#"><i class='fa fa-twitter'></i></a>

                        <a href="#"><i class='fa fa-linkedin'></i></a>
                        <a href="#"><i class='fa fa-instagram'></i></a>
                    </div>

                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">

                    <!-- Footer links -->
                    <div class="footer_section footer_links">
                        <div class="footer_title">MENU</div>
                        <div class="footer_links_container">
                            <ul>

                                <li><a href="{{ route('dashboard') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us </a></li>
                                <li><a href="{{  route('services') }}">Our Services </a></li>
                                <li><a href="{{ route('work') }}">Projects</a></li>
                                {{-- <li><a href="{{ route('dashboard') }}">Latest Blog </a></li> --}}
                                <li><a href="{{ route('contact') }}">Contact </a></li>
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">

                    <!-- Footer links -->
                    <div class="footer_section footer_links">
                        <div class="footer_title">CONTACT</div>
                        <div class="footer_links_container">
                            <ul>

                                <li><strong>Yuniro s.r.l.</strong></li>
                                <li>Via Salvatore Talamo 20, </li>
                                <li>00177, Roma, Italia </li>
                                <li>P.IVA 16226421002</li>
                                <li><a href="tel:0621802375"> 06.21802375</a></li>
                                <li><a href="mailto:info@yuniro.it"> info@yuniro.it</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-12 col-sm-12 footer_links">
                    <div class="footer_title">SUBSCRIBE</div>

                    <form class="subscribe-form p-r-40" action="#" method="post" novalidate="novalidate">
                        <div class="input-group">
                            <input aria-required="true" name="widget-subscribe-form-email"
                                class="form-control required email" placeholder="Email..." type="email">
                            <span class="input-group-btn">
                                <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"
                                    aria-label="Submit"><img src="img/sent.svg" class="img-fluid " alt="element"
                                        title="element"></button>
                            </span>
                        </div>
                        <p>Unsubscribe anytime.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">© Copyright 2020. </p>
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
</body>



</html>

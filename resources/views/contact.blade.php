@extends('layouts.main')
@section('main-container')
    <div class="inner-banner">
        <img src="img/Contact.webp" alt="Picture">
        <div class="overlay">
            <div class="inner-banner-text">
                <h2>Contact</h2>
            </div>
        </div>
    </div>



    <section id="contact-area" class="contact-area">

        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-4  col-md-4 same-hei-row">
                    <div class="box same-hei-col">
                        <div class="training-curriculum-icon-2"><img src="img/contact-icon3.svg" alt="Picture"></div>


                        <h2 class="">Visit Us Anytime
                        </h2>
                        <p>
                            16, Trinity Ave Hights, Upper Level Pasadena Road,
                            United Status.</p>

                    </div>

                </div>

                <div class="col-12 col-lg-4  col-md-4 same-hei-row">
                    <div class="box same-hei-col">
                        <div class="training-curriculum-icon-2"><img src="img/contact-icon1.svg" alt="Picture"></div>


                        <h2 class="">Send An Email
                        </h2>
                        <p>
                            <a href="mailto:support@yuniro.com">Support@yuniro.com</a> <br> <a
                                href="mailto:customer@yuniro.com">Customer@yuniro.com </a>
                        </p>

                    </div>

                </div>

                <div class="col-12 col-lg-4  col-md-4 same-hei-row">
                    <div class="box same-hei-col">
                        <div class="training-curriculum-icon-2"><img src="img/contact-icon2.svg" alt="Picture"></div>


                        <h2 class="">Visit Us Anytime
                        </h2>
                        <p>
                            <a href="tel:44548745896">+44 548 745896 </a><br> <a href="tel:44156956246">+44 156 956246 </a>
                        </p>

                    </div>

                </div>

            </div>

        </div>




    </section>



    <section id="contact " class="contact ">
        <div class="backgroun-element-15">
            <img src="img/Rectangle254.webp" class="img-fluid" alt="element" title="element">
        </div>
        <div class="container">

            <div class="contact contactbg">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 text-white contact-text">

                            <h1 class="display-3 my-4">Contact Us.</h1>
                            <p>We would like to know more about the needs of your business.
                                Please fill out the form below and let's grow together.
                                We look forward to hearing from you.</p>


                        </div>
                        <div class="col-12 col-lg-6 element-1 ">
                            <div class="form  formbg text-center">

                                <form action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Firstname" placeholder="First name"
                                            name="name">

                                        <input type="text" class="form-control" id="LastName" placeholder="Last Name"
                                            name="name">

                                        <input type="email" class="form-control" id="email" placeholder="Email Id"
                                            name="email">

                                        <input type="text" class="form-control" id="contact" placeholder="Phone"
                                            name="contact">



                                        <textarea rows="4" class="form-control" id="discription" placeholder="Describe your Business Challenges..."
                                            name="contact"> </textarea>
                                    </div>

                                    <button type="submit" class="btn btn-brand">
                                        <span> SEND </span>
                                        <div class="icon-slider">
                                            <img src="img/sent.svg" class="img-fluid icon-wid " alt="element"
                                                title="element">
                                        </div>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="backgroun-element-5">
            <img src="img/Ellipse5.webp" class="img-fluid" alt="element" title="element">
        </div>



    </section>


    <section id="map " class="map pb-0 ">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.6701265589923!2d12.558464576872506!3d41.89995090049743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f63b2bb7478fb%3A0x29443644d26911ff!2sVia%20Salvatore%20Talamo%2C%2020%2C%2000177%20Roma%20RM%2C%20Italy!5e0!3m2!1sen!2sin!4v1685531453542!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>


    </section>
@endsection

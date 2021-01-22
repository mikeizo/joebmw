<?php get_header(); ?>

    <section class="home-wrapper">
        <div id="slideshow" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#slideshow" data-slide-to="0" class="active"></li>
            <li data-target="#slideshow" data-slide-to="1"></li>
            <li data-target="#slideshow" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/slide1.png)"></div>
            <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/slide4.jpg)"></div>
            <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/slide2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/img/slide3.jpg)"></div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slideshow" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slideshow" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>
    </section>

    <section id="who">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-1 pt-5 px-5 mb-5" data-aos="fade-right">
                    <h2 class="mb-5">Who We Are</h2>
                    <p>Our mission is to provide our customers with a complete turnkey bespoke built Zeppieri Motorsport E30 M3. Utilizing our in-house engineering and fabrication talent we give the standard E30 M3 a renewed, rebuilt, and re-engineered purpose, that is custom tailored to your desires.</p>
                    <a href="<?php echo get_site_url(); ?>/about-us" class="btn btn-red">Learn More</a>
                </div>
                <div class="col-md-5 px-0 mb-5 mb-md-0" data-aos="fade">
                   <img class="img-cover" src="<?php echo get_template_directory_uri();?>/assets/img/bmw-e30-1.jpg" alt="BMW e30">
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <section id="vehicles" class="dark py-5">
        <div class="container">
            <div class="row px-4 px-md-0">
                <div class="col-md-12 my-3" data-aos="fade">
                    <h2 class="text-center mb-5">What we Offer</h2>
                    <p>We work with our clients to custom tailor each build to their desires and wishes. However, the decision making can be dauting for some, that is why we offer 2 build packages. Both packages include full disassembly, concourse paint, reassembly of the chassis, rebuilt suspension, engine, drivetrain, brakes, interior as well as all other major components. In addition to these packages, we can offer custom builds and options of your choice. The final product is a fully restored E30 M3, built to the client’s specifications.</p>
                    <p>The main differences between the two packages are shown below</p>
                    <hr class="my-5">
                </div>
                <div class="col-md-12" data-aos="fade-right">
                    <div class="row">
                        <div class="col-md-4 vehicle-image">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/bmw-classic-sport.jpg" alt="bmw classic sport">
                        </div>
                        <div class="col-md-5">
                            <h3 class="font-weight-boldmt-4 mt-md-0">Classic Sport</h3>
                            <h4>(starting at $185,000)</h4>
                            <ul class="list">
                                <li>2.5-liter high compression naturally aspirated S14 – 300WHP</li>
                                <li>Premium coil-over suspension system and sway bars</li>
                                <li>Upgraded brake system</li>
                                <li>Upgraded Aero package</li>
                                <li>Premium interior with Recaro seats and leather trimmed dashboard and console</li>

                            </ul>
                        </div>
                        <div class="col-md-3 text-right">
                            <a class="btn btn-transparent" href="<?php echo get_site_url(); ?>/classic-sport">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 my-3" data-aos="fade"><hr></div>
                <div class="col-md-12" data-aos="fade-right">
                    <div class="row">
                        <div class="col-md-4 vehicle-image">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/bmw-classic.jpg" alt="bmw classic">
                        </div>
                        <div class="col-md-5">
                            <h3 class="font-weight-bold mt-4 mt-md-0">Classic</h3>
                            <h4>(starting at $150,000)</h4>
                            <ul class="list">
                                <li>2.5-liter naturally aspirated S14 – 225WHP</li>
                                <li>Entry level coil-over system with factory sway bars</li>
                                <li>Factory rebuilt brake system</li>
                                <li>Factory rebuilt interior</li>

                            </ul>
                        </div>
                        <div class="col-md-3 text-right">
                            <a class="btn btn-transparent" href="<?php echo get_site_url(); ?>/classic">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    <section id="logos" class="bg--gray py-4">
        <div class="d-flex justify-content-center flex-wrap">
            <div class="px-3">
                <img class="" src="<?php echo get_template_directory_uri();?>/assets/img/logos/bbs.png" alt="bbs">
            </div>
            <div class="px-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logos/brembo.png" alt="brembo">
            </div>
            <div class="px-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logos/hr.png" alt="hr">
            </div>
            <div class="px-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logos/koni.png" alt="koni">
            </div>
            <div class="px-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logos/bilstein.png" alt="bilstein">
            </div>
            <div class="px-3">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logos/supersprint.png" alt="supersprint">
            </div>
        </div>
    </section>
    -->

    <section class="parallax">
        <div class="container-fluid">
            <div class="row"></div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <section class="contact my-5">
        <div class="container" data-aos="fade-up">
            <div class="row px-4 px-md-0">
                <div class="col-md-8 offset-md-2 text-center">
                    <h3>Contact</h3>
                    <p>Please fill out the contact form below and I will get back to you as soon as possible.</p>
                        <?php echo do_shortcode( '[contact-form-7 id="18" title="Contact Form"]' ); ?>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

<?php get_footer(); ?>

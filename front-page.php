<?php get_header(); ?>

    <section class="home-wrapper">
        <div class="position-relative overflow-hidden text-center">
            <div class="intro col-md-9 p-md-5 mx-auto my-5">
                <h1 data-aos="fade-down" data-aos-delay="10">Welcome to <span class="text--red">Zeppieri</span> Motorsport</h1>
                <h4 data-aos="fade-down" data-aos-delay="0">Customized for peak performance </h4>
                <img class="img-fluid" data-aos="fade-left" data-aos-delay="0"src="<?php echo get_template_directory_uri();?>/assets/img/bmw-e30m3.png" alt="bmw E30 M3">
            </div>
            <div id="scroll" class="col-md-12 mb-5">
                <a href="#scroll"><i class="fas fa-chevron-down fa-3x"></i></a>
            </div>
        </div>
    </section>

    <section id="who">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-1 pt-5 px-5 mb-5" data-aos="fade-right">
                    <h3>Who We Are</h3>
                    <p>Our mission is to provide our customers with a complete turnkey bespoke built Zeppieri Motorsport E30 M3. Utilizing our in-house engineering and fabrication talent we give the standard E30 M3 a renewed, rebuilt, and re-engineered purpose.</p>
                    <a href="" class="btn btn-red">Learn More</a>
                </div>
                <div class="col-md-5 px-0 mb-5 mb-md-0" data-aos="fade">
                   <img class="img-cover" src="<?php echo get_template_directory_uri();?>/assets/img/bmw-325is.jpg" alt="bmw 325 IS">
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <section id="vehicles" class="dark py-5">
        <div class="container">
            <div class="row px-4 px-md-0">
                <div class="col-md-12 my-3" data-aos="fade">
                    <h2 class="text-center display-4 mb-5">Vehicles</h2>
                    <hr>
                </div>
                <div class="col-md-12" data-aos="fade-right">
                    <div class="row">
                        <div class="col-md-4 vehicle-image">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/bmw-325is.jpg" alt="bmw 325 IS">
                        </div>
                        <div class="col-md-5">
                            <h3 class="font-weight-bold mt-4 mt-md-0">High end level – called XXX </h3>
                            <ul class="list">
                                <li>2.5-liter high compression naturally aspirated S14</li>
                                <li>300<strong>WHP</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-right">
                            <a class="btn btn-transparent" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 my-3" data-aos="fade"><hr></div>
                <div class="col-md-12" data-aos="fade-right">
                    <div class="row">
                        <div class="col-md-4 vehicle-image">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/bmw-325is.jpg" alt="bmw 325 IS">
                        </div>
                        <div class="col-md-5">
                            <h3 class="font-weight-bold mt-4 mt-md-0">Entry Level – Called XXX</h3>
                            <ul class="list">
                                <li>2.5-liter naturally aspirated S14</li>
                                <li>225<strong>WHP</strong></li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-right">
                            <a class="btn btn-transparent" href="#">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Imphal Angels | Think beyond</title>
   

 

 <meta property="og:image" content="http://www.imphalangels.com/assets/img_thumbnail.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.imphalangels.com"/>
    <meta property="og:title" content="Imphal Angels | Think Beyond"/>
    <meta property="og:description" content="We help tenacious entrepreneurs from North East India build disruptive & scalable startups."/>
    <meta property="fb:app_id" content="XXXXXXXXXXXXXXX" />
    
    
  

    <meta name="author" content="">


    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
    <!-- <link rel="stylesheet" href="css/font-awesome/css/fontawesome.css"> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- script
    ================================================== -->
    <script src="<?php echo base_url()?>assets/js/modernizr.js"></script>
    <script src="<?php echo base_url()?>assets/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url()?>assets/favicon.png" type="image/x-icon">

</head>

<body id="top">
<span><?php echo	$this->session->flashdata('message');?></span>
    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="<?php echo base_url()?>">
                <img src="<?php echo base_url()?>assets/images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll" href="#investors" title="investors">Investors</a></li>
                    <li><a class="smoothscroll" href="#entrepreneurs" title="entrepreneurs">Entrepreneurs</a></li>
                    <li><a class="smoothscroll" href="#team" title="team">Team</a></li>
                    <li><a class="smoothscroll" href="#event" title="event">Event</a></li>
                    <li><a class="smoothscroll" href="#terminology" title="terminology">Terminology </a></li>
                    <li><a class="smoothscroll" href="#partners" title="partners">Partners</a></li>
                    <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
                </ul>

                <p>We help tenacious entrepreneurs from North East India build disruptive & scalable startups.</p>

                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/ImphalAngels/ " target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/ImphalAngels" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/imphalangels/ " target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>

                    
                    
                </ul>

            </div> <!-- end header-nav__content -->

        </nav> <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="<?php echo base_url()?>assets/images/hero-bg.jpg"
        data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to Imphal Angels</h3>

                <!-- <h1>
                    We are a creative group <br>
                    of people who design <br>
                    influential brands and <br>
                    digital experiences.
                </h1> -->

                <h1>
                    We help tenacious <br>
                    entrepreneurs from<br>
                    North East India<br>
                    build disruptive & scalable<br>
                    startups.
                </h1>

                <div class="home-content__buttons">
                    <a href="<?php echo base_url()?>angels" class=" btn btn--stroke">
                        Become an Angel
                    </a>
                    <a href="<?php echo base_url()?>entrepreneurs" class=" btn btn--stroke">
                        Apply to pitch
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
                <li>
                        <a href="https://www.facebook.com/ImphalAngels/ " target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li> 
                        <a href="https://twitter.com/ImphalAngels" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/imphalangels/ " target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
        </ul>
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <!-- <h3 class="subhead subhead--dark">Hello There</h3> -->
                <h1 class="display-1 display-1--light">Who We Are</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                    Imphal Angels provides early stage equity based funds to disruptive startups founded by tenacious
                    entrepreneurs.
                    We are primarily focused on founders from north eastern India building disruptive startups with
                    asset light scalable business models and going after a large market. However, we are open to invest
                    in opportunities from all over India.
                </p>

                <h2 class="display-3 display-3--light">Vision</h2>
                <p>
                    To create a vibrant and diverse startup ecosystem in North East India, facilitating world class
                    products and services serving large markets.
                </p>
                <h2 class="display-3 display-3--light">Mission</h2>
                <p>
                    To help and nurture innovative startups from North East India reach multi-million dollars valuation.
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-3 block-m-1-2 block-mob-full" data-aos="fade-up">

            <div class="col-block stats__col ">
                <div class="stats__count">15</div>
                <h5>Angel Investors</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">50</div>
                <h5>Startups</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">20</div>
                <h5>Industries</h5>
            </div>
            <!-- <div class="col-block stats__col">
                <div class="stats__count">102</div>
                <h5>Happy Clients</h5> 
            </div> -->

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- investors
    ================================================== -->
    <section id='investors' class="s-investors">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">For Angel Investors</h3>
                <h1 class="display-2">Opportunity to invest in next <br> multi million dollars worth high potential startups from
                    North East India.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-diamond"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Untapped Opportunities</h3>
                    <p>With the surge of entrepreneurship spirit in the North East region and many qualified
                        individuals from the region having global exposure and world class skill sets, we are witnessing an
                        increasing amount of innovative ventures from the region.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">High Return Potential</h3>
                    <p>Because of our significant outreach, the Angels are provided with the opportunity to meet and
                        invest in good quality and angel-investment ready companies.  The companies who present at Imphal Angels are pre-screened and vetted.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-cubes"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Development of the region</h3>
                    <p>By becoming a member of Imphal Angels one will have a unique opportunity to become an early stage 
                        investors of some of the most innovative ventures from the region, which are largely untapped,
                        and not only gain financially but also have an impact in the economic development of the
                        region.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Quality Networks & Learning</h3>
                    <p>Angels also enjoy the knowledge pool arising from diverse skill sets and subject matter
                        understanding everyone brings to the table. Our members and entrepreneurs are all driven
                        towards common objectives of creating valuable impacts.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

        <div class="investors-content__buttons col-full">
            <a href="<?php echo base_url()?>angels" class=" btn btn--stroke">
                Become an Angel
            </a>
        </div>

    </section> <!-- end s-investors -->

    <!-- Entrepreneurs
    ================================================== -->
    <section id='entrepreneurs' class="s-entrepreneurs">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead--light">FOR ENTREPRENEURS</h3>
                <h1 class="display-2">Get funding and mentoring, as well as access to our network of investors &
                    industry experts.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">


            <div class="col-block service-item" data-aos="fade-up">
                <div class="entrepreneurs-icon">
                    <i class="fa fa-pie-chart"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Equity based funding</h3>
                    <p>We usually invest in the range of 10 Lakhs to 50 lakhs in each early-stage business; however, we
                        are flexible to meet the needs of the start-up and make larger investments too. We are sector
                        agnostic and are interested in for-profit, innovative startups.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="entrepreneurs-icon">
                    <i class="fa fa-handshake-o"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Mentoring & Networking</h3>
                    <p>Along with the capital, Imphal Angels believe in helping the founders in their entrepreneurial
                        journey with timely mentoring and access to our large network of industry experts and VC funds.

                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="entrepreneurs-icon">
                    <i class="fa fa-book"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Curriculum</h3>
                    <p>Right from the basics of team management, finance, recruitment, marketing to how to scale your
                        startups to how to get Series A funding, Imphal Angels will be providing training and reading
                        materials on a regular basis.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="entrepreneurs-icon">
                    <i class="fa fa-user-plus"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Partnership Opportunities</h3>
                    <p>Wherever possible we would like to help startups by partnering with accelerators, incubators,
                        co-working spaces, events, and other ecosystem enablers to further grow their business.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

        <div class="entrepreneurs-content__buttons col-full">
            <a href="<?php echo base_url()?>entrepreneurs" class="btn btn--stroke">
                Apply to pitch
            </a>
        </div>


    </section> <!-- end s-services -->




















    <!-- portfolio
    ================================================== -->
    <section id="team" class="s-portfolio target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <!-- <h3 data-num="03" class="subhead">Recent Works</h3> -->
                <h1 class="display-1">
                    Meet our Team
                </h1>
            </div>
        </div>

        <div class="portfolio block-1-6 block-m-1-3 block-tab-1-3 collapse">

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Priyo.png" class="thumb-link" title="Chingakham Priyobrata Singh"
                        data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Priyo.png" srcset="<?php echo base_url()?>assets/images/portfolio/Priyo.png 1x, <?php echo base_url()?>assets/images/portfolio/Priyo@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Chingakham Priyobrata Singh
                    </h3>
                    <p class="item-folio__cat">
                        Co-founder and Managing Director, Neopath Technologies Pvt. Ltd.
                    </p>
                </div>
                <div class="item-folio__caption">
                    <p>Co-founder and Managing Director, Neopath Technologies Pvt. Ltd.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Fisher.png" class="thumb-link" title="Fisher Laishram" data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Fisher.png" srcset="<?php echo base_url()?>assets/images/portfolio/Fisher.png 1x, <?php echo base_url()?>assets/images/portfolio/Fisher@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Fisher Laishram
                    </h3>
                    <p class="item-folio__cat">
                        Co-Founder & Director Mobimp Services Pvt. Ltd., Co-Founder & Director Swerve Tech Pvt. Ltd,
                        Co-Founder & Director Incote Foundation
                    </p>
                </div>

                <div class="item-folio__caption">
                    <p>Co-Founder & Director Mobimp Services Pvt. Ltd., Co-Founder & Director Swerve Tech Pvt. Ltd,
                        Co-Founder & Director Incote Foundation
                    </p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/Niranjan.png" class="thumb-link" title="Lairenjam Niranjan Singh"
                        data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Niranjan.png" srcset="<?php echo base_url()?>assets/images/portfolio/Niranjan.png 1x, <?php echo base_url()?>assets/images/portfolio/Niranjan@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Lairenjam Niranjan Singh
                    </h3>
                    <p class="item-folio__cat">
                        Managing Director JCRE (Big Concepts Foundation Pvt. Ltd.), Director Neopath Technologies Pvt.
                        Ltd.
                    </p>
                </div>

                <div class="item-folio__caption">
                    <p>Managing Director JCRE (Big Concepts Foundation Pvt. Ltd.), Director Neopath Technologies Pvt.
                        Ltd.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Devkanta.png" class="thumb-link" title="Rajkumar Devkanta Singh"
                        data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Devkanta.png" srcset="<?php echo base_url()?>assets/images/portfolio/Devkanta.png 1x, <?php echo base_url()?>assets/images/portfolio/Devkanta@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Rajkumar Devkanta Singh
                    </h3>
                    <p class="item-folio__cat">
                        Ex-Director Retail (India), Levi Strauss & Co.
                    </p>
                </div>

                <!-- <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a> -->

                <div class="item-folio__caption">
                    <p>Ex-Director Retail (India), Levi Strauss & Co.</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Prasenjit.png" class="thumb-link" title="Prasenjit Laikangbam"
                        data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Prasenjit.png" srcset="<?php echo base_url()?>assets/images/portfolio/Prasenjit.png 1x, <?php echo base_url()?>assets/images/portfolio/Prasenjit@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Prasenjit Laikangbam
                    </h3>
                    <p class="item-folio__cat">
                        Co-Founder & Director Mobimp Services Pvt. Ltd.
                    </p>
                </div>

                <!-- <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a> -->

                <div class="item-folio__caption">
                    <p>Co-Founder & Director Mobimp Services Pvt. Ltd.</p>
                </div>

            </div> <!-- end item-folio -->



            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Athouba.png" class="thumb-link" title="Dr. Arambam Athouba"
                        data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Athouba.png" srcset="<?php echo base_url()?>assets/images/portfolio/Athouba.png 1x, <?php echo base_url()?>assets/images/portfolio/Athouba@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Dr. Arambam Athouba
                    </h3>
                    <p class="item-folio__cat">
                        Director at Imphal Heart Institute.
                    </p>
                </div>

                <!-- <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                        Project Link
                    </a> -->

                <div class="item-folio__caption">
                    <p>Director at Imphal Heart Institute.</p>
                </div>

            </div> <!-- end item-folio -->

        </div> <!-- end portfolio -->












        <div class="portfolioSecond block-1-5 block-m-1-2 block-tab-1-2 collapse">
            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Jiten.png" class="thumb-link" title="Dr. Arambam Athouba"
                        data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Jiten.png" srcset="<?php echo base_url()?>assets/images/portfolio/Jiten.png 1x, <?php echo base_url()?>assets/images/portfolio/Jiten@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Nongmaithem Jiten Singh
                    </h3>
                    <p class="item-folio__cat">
                        Founder & Managing Partner of Manipurtimes and Manipurtimes Shopping. Co-founder and Chief Coordinator (2015-16) & Vice-President (2016-17) of Dynamic Manipur with projects on Dynamic Startup & Dynamic Inspiration.

                    </p>
                </div>

                <div class="item-folio__caption">
                    <p>   Founder & Managing Partner of Manipurtimes and Manipurtimes Shopping. Co-founder and Chief Coordinator (2015-16) & Vice-President (2016-17) of Dynamic Manipur with projects on Dynamic Startup & Dynamic Inspiration.</p>
                </div>

            </div> <!-- end item-folio -->




            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Budha.png" class="thumb-link" title="Dr. Yengkokpam Budhachandra"
                        data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Budha.png" srcset="<?php echo base_url()?>assets/images/portfolio/Budha.png 1x, <?php echo base_url()?>assets/images/portfolio/Budha@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Dr. Yengkokpam Budhachandra
                    </h3>
                    <p class="item-folio__cat">
                        Psychologist, PHD
                    </p>
                </div>


                <div class="item-folio__caption">
                    <p>Psychologist, PHD</p>
                </div>

            </div> <!-- end item-folio -->

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Loken.png" class="thumb-link" title="Loken Laishram" data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Loken.png" srcset="<?php echo base_url()?>assets/images/portfolio/Loken.png 1x, <?php echo base_url()?>assets/images/portfolio/Loken@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Loken Laishram
                    </h3>
                    <p class="item-folio__cat">
                        Co-Founder & Director Mobimp Services Pvt. Ltd.
                    </p>
                </div>


                <div class="item-folio__caption">
                    <p>Co-Founder & Director Mobimp Services Pvt. Ltd.</p>
                </div>

            </div> <!-- end item-folio -->

          

            <div class="col-block item-folio" data-aos="fade-up">

                <div class="item-folio__thumb">
                    <a href="<?php echo base_url()?>assets/images/portfolio/gallery/Gautam.png" class="thumb-link" title="Gautam" data-size="600x600">
                        <img src="<?php echo base_url()?>assets/images/portfolio/Gautam.png" srcset="<?php echo base_url()?>assets/images/portfolio/Gautam.png 1x, <?php echo base_url()?>assets/images/portfolio/Gautam@2x.png 2x"
                            alt="">
                    </a>
                </div>

                <div class="item-folio__text">
                    <h3 class="item-folio__title">
                        Gautam Thockchom
                    </h3>
                    <p class="item-folio__cat">
                        TiE Silicon Valley, CTO & Chief Strategy Officer, Akasia Inc - Advisor
                    </p>
                </div>

                <!-- <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                    Project Link
                </a> -->

                <div class="item-folio__caption">
                    <p>TiE Silicon Valley, CTO & Chief Strategy Officer, Akasia Inc - Advisor.</p>
                </div>

            </div> <!-- end item-folio -->

        </div> <!-- end portfolio -->


        <div class="investors-content__buttons col-full" style=" padding-top: 25px; ">
                <a href="<?php echo base_url()?>team" class=" btn btn--stroke">
                    Learn More
                </a>
            </div>

    </section>


    <!-- portfolio 
        ================================================== -->




    <!-- event
    ================================================== -->
    <section id='event' class="s-event">


            
        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1 display-1--light">Upcoming Event</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row event-stats stats block-1-3 block-m-1-2 block-mob-full" data-aos="fade-up">

            <div class="col-block event__col ">
                <div class="event__inside">18 </div>
                <h2>NOV </h1>
            </div>
            <div class="col-block event__col">
                <div class="event__inside">VENUE</div>
                <h2 style="font-size:2.3rem;">The Classic Hotel, North AOC, <br> Imphal, Manipur</h2>
                
                
            </div>
            <div class="col-block event__col">
                <div class="event__inside">5</div>
                <h2>PM</h2>
            </div>



        </div> <!-- end event-stats -->

        <div class="about__line"></div>



         <form name="contactForm"  method="post" action="<?php echo base_url();?>contactform/registration" >
            <fieldset>

                <div class="row event-stats-form block-1-3 block-m-1-2 block-mob-full" data-aos="fade-up">

                    <div class="col-block stats__col event__col_form ">
                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="Your Name" value=""
                                maxlength="50" required class="full-width name">
                        </div>
                    </div>
                    <div class="col-block stats__col event__col_form">
                        <div class="form-field">
                            <input name="contactEmail" type="email" maxlength="50" id="contactEmail" placeholder="Your Email" value=""
                                required class="full-width">
                        </div>
                    </div>
                    <div class="col-block stats__col event__col_form">
                        <div class="form-field">
                            <input name="contactPhone" type="tel" id="contactPhone" maxlength="10" required placeholder="Mobile Number" value=""
                                class="full-width number">
                        </div>
                    </div>



                </div> <!-- end event-stats-form -->

                <div class="form-field">
                    <button class="  btn--greenform" type="submit">Submit</button>
                    <div class="submit-loader">
                        <div class="text-loader">Sending...</div>
                        <div class="s-loader">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>

    </section> <!-- end s-event -->


    <!-- End of event 
        ================================================== -->






    <!-- terminology
    ================================================== -->
    <section id="terminology" class="s-terminology target-section">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 data-num="02" class="subhead">
                    Startup
                </h3>
                <h1 class="display-1 display-1--light">
                    Terminology 101
                </h1>
            </div>
        </div>

        <div class="row terminology-list block-1-3 block-m-1-2 block-tab-full">

            <div class="col-block item-terminology" data-aos="fade-up">
                <h4>Angel Investor</h4>
                <p>
                    A high net-worth individual with rich experience in a particular domain, who invests in a startup,
                    seed-stage or early-stage company in return for an ownership stake. Angel investors usually invest
                    their own money.
                </p>
            </div>

            <div class="col-block item-terminology" data-aos="fade-up">
                <h4>Elevator Pitch</h4>
                <p>
                    A short speech describing an idea for a business or project crisply and in as few words as
                    possible. The term elevator pitch comes from the idea that the pitch is so brief that you could
                    give it to someone you met in an elevator, during the time it takes to complete the ride.
                </p>
            </div>

            <div class="col-block item-terminology" data-aos="fade-up">
                <h4>Bootstrapping</h4>
                <p>
                    The phase where founders use personal assets and operating revenues to found and build a company.
                    Valuation is both art and science, the science is the easy part, the art is more subjective.
                </p>
            </div>

            <div class="col-block item-terminology" data-aos="fade-up">
                <h4>Pre & Post Money Valuation</h4>
                <p>
                    The pre-money valuation is the value put on the company before raising capital. The post-money
                    valuation is the value of the company after it has raised capital. For eg. If Company X raised $1
                    million at a pre-money valuation of $3 million. It’s Post-money valuation would be $ 4 million
                    (3+1).
                </p>
            </div>

            <div class="col-block item-terminology" data-aos="fade-up">
                <h4>Seed Funding</h4>
                <p>
                    This is the initial funding used to start a business, usually one that has not yet started to
                    produce revenues. Seed funding often comes from the assets of the founders and their friends and
                    families but may also come from other sources, such as seed accelerator programs, angel investors,
                    micro VC’s and private equity funds.
                </p>
            </div>

            <div class="col-block item-terminology" data-aos="fade-up">
                <h4>Early-Stage Funding</h4>
                <p>
                    This is the startup’s first round of substantial funding. Early-stage funding is usually provided
                    by venture capital firms and generally consists of two parts Series A financing and Series B
                    financing.
                </p>
            </div>


        </div> <!-- end terminology-list -->

        <div class="terminology-content__buttons col-full " data-aos="fade-up">
            <a href="<?php echo base_url()?>terminology" class="btn btn--stroke">
                Read More
            </a>
        </div>



    </section> <!-- end s-terminology -->























    <!-- clients ECOSYSTEM PARTNERS
    ================================================== -->
    <section id="partners" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">ECOSYSTEM PARTNERS</h3>
                <!-- <h1 class="display-2">Imphal Angels has been honored to
                partner up with these clients</h1> -->
            </div>
        </div> <!-- end section-header -->

        <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/nasscom.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/yourstory.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/gsf.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/spiralventures.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/innnov8.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/northeasttoday.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/innerchef.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/jcre.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/mobimp.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/manipurtimes.png" /></a>
                     <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/startupgrind.png" /></a>
                    
                    <a href="#0" title="" class="clients__slide"><img src="<?php echo base_url()?>assets/images/clients/t9l.png" /></a>

                    






                    
                    


                </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer -->



    </section> <!-- end s-clients -->

    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 class="display-2 display-2--light">If you think beyond, send us a message</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">

            <div class="contact-primary">

                <h3 class="h6">Send Us A Message</h3>

                 <form name="contactForm"  method="post" action="<?php echo base_url();?>contactform/contact" >
                    <fieldset>

                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" maxlength="50" placeholder="Your Name" value=""
                                minlength="2" required class="full-width name">
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" maxlength="50" id="contactEmail" placeholder="Your Email" value=""
                               required class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" maxlength="100" type="text" id="contactSubject" required placeholder="Subject" value=""
                                class="full-width">
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" maxlength="200" id="contactMessage" placeholder="Your Message" rows="10"
                                cols="50" required class="full-width"></textarea>
                        </div>
                        <div class="form-field">
                            <button class="full-width btn--primary" type="submit">Submit</button>
                            <div class="submit-loader">
                                <div class="text-loader">Sending...</div>
                                <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div>

                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            Imphal Angels HQ, <br>
                            2nd Floor, Bank of India ATM <br>
                            RIMS Road, Imphal 795001 <br>

                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            contact@imphalangels.com
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: (+91) 0385 2411 048<br>
                        </p>
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="https://www.facebook.com/ImphalAngels/ " target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ImphalAngels" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/imphalangels/ " target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                We help tenacious entrepreneurs from North East India build disruptive & scalable startups.

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Subscribe to the latest news and announcements from us.</p>

                <div class="subscribe-form">
                    <form name="contactForm"  method="post" action="<?php echo base_url();?>contactform/subscribe" >
                        <input type="email" value="" maxlength="50" required name="email" class="email"  id="mc-email" placeholder="Email Address">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Imphal Angels 2018</span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs"
                        title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

<script>
// Validation start here



$('.name').keypress(function (e) {
    var regex = new RegExp("^[a-z A-Z\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});

$('.number').keypress(function (e) {
    var regex = new RegExp("^[0-9\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});

$('.address').keypress(function (e) {
    var regex = new RegExp("^[0-9 a-z A-Z -- . ,\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});

$('.text_number').keypress(function (e) {
    var regex = new RegExp("^[0-9 a-z A-Z -- . ,\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});
$('.percentage').keypress(function (e) {
    var regex = new RegExp("^[0-9 .\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});
$('.email').keypress(function (e) {
    var regex = new RegExp("^[0-9 a-z A-Z -- . @\b]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
    e.preventDefault();
    return false;
});

// Validation end here
</script>
</html>
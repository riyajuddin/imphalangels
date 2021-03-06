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
    <title>Imphal Angels</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

    <style type="text/css" media="screen">
        .s-styles { 
            background: white;
            padding-top: 15rem;
            padding-bottom: 12rem;
        }
     </style> 

    <!-- script
    ================================================== -->
    <script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
    <script src="<?php echo base_url();?>assets/js/pace.min.js"></script>

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
            <a class="site-logo" href="<?php echo base_url();?>">
                <img src="<?php echo base_url();?>assets/images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>

                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll" href="<?php echo base_url();?>" title="home">Home</a></li>
                    <li><a  href="<?php echo base_url();?>#about" title="about">About</a></li>
                    <li><a  href="<?php echo base_url();?>#investors" title="investors">Investors</a></li>
                    <li><a  href="<?php echo base_url();?>entrepreneurs" title="entrepreneurs">Entrepreneurs</a></li>
                    <li><a  href="<?php echo base_url();?>team" title="team">Team</a></li>
                    <li><a  href="<?php echo base_url();?>#event" title="event">Event</a></li>
                    <li><a  href="<?php echo base_url();?>terminology" title="terminology">Terminology </a></li>
                    <li><a  href="<?php echo base_url();?>#partners" title="partners">Partners</a></li>
                    <li><a  href="<?php echo base_url();?>#contact" title="contact">Contact</a></li>
                </ul>
    
                <p>We help tenacious entrepreneurs from North East India build disruptive & scalable startups.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home terminologyPage target-section" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets/images/hero-inside-bg.jpg" data-natural-width=3000 data-natural-height=100 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content terminologyPage">

            <div class="row home-content__main terminologyPage">




            </div>

            <!-- <div class="home-content__scroll">
                <a href="#styles" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div> -->

        </div> <!-- end home-content -->




    </section> <!-- end s-home -->


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
                    <h4>Founder</h4>
                    <p>
                        A person who founds a startup.
                    </p>
                </div>
    
                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4>Angel Investor</h4>
                    <p>
                        A high net-worth individual with rich experience in a particular domain, who invests in a startup, seed-stage or early-stage company in return for an ownership stake. Angel investors usually invest their own money (unlike venture capital firms, who, for the most part, invest other people’s money) and may do this individually or as part of an angel group.
                    </p>
                </div>
    
                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4>Elevator Pitch</h4>
                    <p>
                        A short speech describing an idea for a business or project crisply and in as few words as possible. The term elevator pitch comes from the idea that the pitch is so brief that you could give it to someone you met in an elevator, during the time it takes to complete the ride.
                    </p>
                </div>
    
                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4>Bootstrapping</h4>
                    <p>
                        The phase where founders use personal assets and operating revenues to found and build a company. Valuation is both art and science, the science is the easy part, the art is more subjective.
                    </p>
                </div>
    
                <div class="col-block item-terminology" data-aos="fade-up">
                        <h4>Friends & Family Round</h4>
                        <p>
                            A round of startup financing in which seed funding is received from friends and family members.
                        </p>
                    </div>

                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4>Valuation</h4>
                    <p>
                        Investopedia defines valuation as the process of determining the current worth of an asset or company.
                    </p>
                </div>

                <div class="col-block item-terminology" data-aos="fade-up">
                        <h4>Pre-Money Valuation</h4>
                        <p>
                            The pre-money valuation is the value put on the company before raising capital.
                        </p>
                 </div>
    
                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4>Post-Money Valuation</h4>
                        <p>
                            The value of the company after it has raised capital. For eg. If Company X raised $1 million at a pre-money valuation of $3 million. It’s Post-money valuation would be $ 4 million (3+1).
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Accelerator </h4>
                        <p>
                            This is typically an entity or a program normally lasting a few months which has been designed to help startups grow rapidly. Accelerator programs typically provide startups with some combination of business education, mentoring, office space and funding, often, but not always, in exchange for stock in the startup. 
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Angel Round </h4>
                        <p>
                            A round of startup financing received from angel investors.
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Seed Funding </h4>
                        <p>
                            This is the initial funding used to start a business, usually one that has not yet started to produce revenues. Seed funding often comes from the assets of the founders and their friends and families but may also come from other sources, such as seed accelerator programs, angel investors, micro VC’s and private equity funds.
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Early-Stage Funding </h4>
                        <p>
                            This is the startup’s first round of substantial funding. Early-stage funding is usually provided by venture capital firms and generally consists of two parts Series A financing and Series B financing.
                                
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Series A Financing </h4>
                        <p>
                            The first financing after seed funding, it usually involves the sale of preferred stock in the company to venture capitalists. Series A financing usually occurs after a startup has begun generating revenue, but generally prior to the point at which the startup begins to generate profits.   
                        </p>
                 </div>



                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Series B Financing </h4>
                        <p>
                            The financing stage following Series A financing, it usually takes place after a startup has achieved certain business milestones.   
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Bridge Loan </h4>
                        <p>
                            A short-term loan, usually to tide over immediate expenses in the anticipation of future funding.   
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Common Stock </h4>
                        <p>
                            It’s a class of stock in a company. Holders of common stock or shares have the right to receive dividends and, in liquidation, the right to share in the assets of the company, but only after other claims (such as those of preferred stockholders) have been paid. Holders of common stock have voting rights, unlike holders of preferred stock, who usually do not have the right to vote.   
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Convertible Debt </h4>
                        <p>
                            A debt obligation that may be exchanged at an appropriate time in the future, by the lender, for an equity interest in a company, usually at the time of a future financing.  
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Convertible Preferred Stock </h4>
                        <p>
                            Preferred stock that may be converted by the holder into a fixed number of common shares. The terms and triggers for the same are discussed at the issuance stage.  
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Initial Public Offering or IPO </h4>
                        <p>
                            The first public sale of stock by a company.  
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Lean Startup  </h4>
                        <p>
                            A method for developing startups proposed by Eric Ries and discussed in his book, The Lean Startup: How Today’s Entrepreneurs Use Continuous Innovation to Create Radically Successful Businesses.  
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Pivot  </h4>
                        <p>
                            To change a company’s direction quickly, based on what the company has learned about its customers, its technology and the business environment. 
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Coworking Space  </h4>
                        <p>
                            A workspace shared by unrelated businesses or by companies who have made co-working space their core business offering, often with shared equipment, conference rooms and support services.
                        </p>
                 </div>


                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Crowdfunding </h4>
                        <p>
                            A fairly evolved and a relatively new way of seeking finance for a project with small amounts of capital obtained from a large number of individuals, usually via the Internet.
                        </p>
                 </div>

                 <div class="col-block item-terminology" data-aos="fade-up">
                        <h4> Down Round </h4>
                        <p>
                            A round of financing for which the share price is lower than it was for the previous round, usually because the company is not performing well.
                        </p>
                 </div>




    
            </div> <!-- end terminology-list --> 

            <!-- <div class="terminology-content__buttons col-full " data-aos="fade-up">
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        Read More
                    </a>
            </div> -->
            
    
        </section> <!-- end s-terminology -->





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
                            <input name="contactName" type="text" id="contactName" placeholder="Your Name" value=""
                                minlength="2" required class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value=""
                               required class="full-width">
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" required placeholder="Subject" value=""
                                class="full-width">
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10"
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
                        <input type="email" value="" required name="email" class="email"  id="mc-email" placeholder="Email Address">
                        <input type="submit" name="subscribe" value="Subscribe" >
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
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
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
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
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

</html>
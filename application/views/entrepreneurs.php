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
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">

    <style type="text/css" media="screen">
        .s-styles { 
            background: white;
            padding-top: 15rem;
            padding-bottom: 12rem;
        }
     </style> 
     
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- script
    ================================================== -->
    <script src="<?php echo base_url()?>assets/js/modernizr.js"></script>
    <script src="<?php echo base_url()?>assets/js/pace.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/formvalidation.js"></script>
    

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
                    <li class="current"><a class="smoothscroll" href="<?php echo base_url()?>" title="home">Home</a></li>
                    <li><a  href="<?php echo base_url()?>#about" title="about">About</a></li>
                    <li><a  href="<?php echo base_url()?>#investors" title="investors">Investors</a></li>
                    <li><a  href="<?php echo base_url()?>entrepreneurs" title="entrepreneurs">Entrepreneurs</a></li>
                    <li><a  href="<?php echo base_url()?>team" title="team">Team</a></li>
                    <li><a  href="<?php echo base_url()?>#event" title="event">Event</a></li>
                    <li><a  href="<?php echo base_url()?>terminology" title="terminology">Terminology </a></li>
                    <li><a  href="<?php echo base_url()?>#partners" title="partners">Partners</a></li>
                    <li><a  href="<?php echo base_url()?>#contact" title="contact">Contact</a></li>
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

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home terminologyPage target-section" data-parallax="scroll" data-image-src="<?php echo base_url()?>assets/images/hero-inside-bg.jpg" data-natural-width=3000 data-natural-height=100 data-position-y=center>

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








    <!-- investors
    ================================================== -->
    <section id='investors' class="s-investors angels">


            <div class="row narrow section-intro add-bottom text-center">

                    <div class="col-twelve tab-full">
        
                        <h1 class="display-2">For Entrepreneurs</h1>
        
                        <p class="lead">We aim to partner with promising entrepreneurs on their entrepreneurship journey and are always looking for opportunities to invest in startups that are addressing a big market with asset light disruptive ideas that have the potential for rapid, scalable growth within a reasonable time frame.</p>

                        <p>We prefer early stage/seed stage investments and exiting over 3 to 5 years time frame through further fundraising, Merger or Strategic Acquisition. </p>
                        <p> We usually invest in the range of 10 Lakhs to 50 lakhs in each early-stage business; however, we are flexible to meet the needs of the start-up and make larger investments too. We are fairly involved in the companies we invest in, start-ups will get inputs and expertise from the collective experience of 30+ members who are at the top of their own fields themselves. </p>
        
                    </div>
        
                </div>

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <!-- <h3 class="subhead">For Angel Investors</h3> -->
                <h1 class="display-2">
                        Benefits of Imphal Angels
                </h1>

                <p>Entrepreneurs from the north east region are limited to very few options when it comes to funding and mentorship, they also don’t have a network or community to help them through their entrepreneurship journey. By applying to Imphal Angels entrepreneurs can benefit from our mentoring, as well as our network of investors & industry experts.</p>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-pie-chart"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Equity based funding</h3>
                    <p>
                        We usually invest in the range of 10 Lakhs to 50 lakhs in each early-stage business; however, we are flexible to meet the needs of the start-up and make larger investments too. We are sector agnostic and are interested in for-profit, innovative startups.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-handshake-o"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Mentoring & Networking</h3>
                    <p>
                            Along with the capital, Imphal Angels believe in helping the founders in their entrepreneurial journey with timely mentoring and access to our large network of industry experts and VC funds.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-book"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Curriculum</h3>
                    <p>
                            Right from the basics of team management, finance, recruitment, marketing to how to scale your startups to how to get Series A funding, Imphal Angels will be providing training and reading materials on a regular basis.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-user-plus"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Partnership Opportunities</h3>
                    <p>
                            Where ever possible we would like to help startups by partnering with accelerators, incubators, co-working spaces, events, and other ecosystem enablers to further grow their business.  
                    </p>
                </div>
            </div>



        </div> <!-- end services-list -->


    </section> <!-- end s-investors -->







<!-- Member-Type
    ================================================== -->

    <section id="styles" class="s-styles">
        
            <div class="row narrow section-intro add-bottom text-center">
    
                <div class="col-twelve tab-full">
    
                    <h1 class="display-2">Funding Criteria</h1>
    
                </div>
    
            </div>
    
            <div class="row">
    
                <div class="col-six tab-full">
    
            
                        <p>
                            
                                <ul class="disc">
                                        <li>Startups that are addressing a big market with asset light disruptive ideas that has potential for rapid, scalable growth within a reasonable time frame.
                                            </li>
                                        <li>Startups with proprietary technology or services, early market lead and other strong barriers to entry.</li>

                                        <li>A strong  team to execute the business plan.</li>
                                        <li>A team with a desire for mentoring and coaching.
                                            </li>
                                        
                                    </ul>

                        </p>
            
            
                    </div>        
    
                <div class="col-six tab-full">
    
                    <p >
                        
                            <ul class="disc">
                                    <li>Entrepreneurs who can provide evidence of the validation of their concept and particularly those who have begun to engage with the market have a stronger proposition.</li>

                                    
                                    <li>A reasonable valuation that fits within the risk/reward expectations of our members.
                                        </li>

                                    <li>A credible exit strategy for investors.</li>

                                    <li>Preference for ventures from North East India or founders from the region.</li>
                                </ul>
                            
                    </p>
    
                </div>
    
            </div> <!-- end row -->
    
        </section> <!-- end Member-type -->

<!-- terminology
    ================================================== -->
    <section id="terminology" class="s-terminology target-section">

            <div class="row section-header" data-aos="fade-up">
                <div class="col-full">
                    <!-- <h3 data-num="02" class="subhead">
                        Startup
                    </h3> -->
                    <h1 class="display-1 display-1--light">
                        Funding Process
                    </h1>
                </div>
            </div>
    
            <div class="row terminology-list block-1-3 block-m-1-2 block-tab-full">
    
                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4>Business plan submission</h4>

                    

                    <p>
                        Entrepreneurs submit the business plan through the website. Entrepreneurs can submit their business plan through the year.
                        <a class="smoothscroll" href="#angel-form">Click here to apply.</a>
                    </p>
                </div>
    
                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4>Business plan review</h4>
                    <p>
                            Business plan review will be done by Imphal Angels.
                    </p>
                </div>
    
                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4> Pre Screening</h4>
                    <p>
                            If, after reviewing the business plan, Imphal Angels believes that the idea could be an attractive investment opportunity for some of our Members, then Imphal Angels will collects further information by meeting the entrepreneurs personally or through phone calls.
                    </p>
                </div>
    
                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4> Imphal Angels Governing Body Screening</h4>
                    <p>
                            The Governing Body vets the applications (those who passed the pre-screening and basic due diligence) and shortlist applications further for elevator pitch sessions. 
                    </p>
                </div>
    
                <div class="col-block item-terminology" data-aos="fade-up">
                    <h4>Elevator Pitch Sessions</h4>
                    <p>
                            The shortlisted applications will be invited to participate in an elevator pitch session with the Imphal Angels’s  Governing Body team.
                    </p>
                </div>


                <div class="col-block item-terminology" data-aos="fade-up">
                        <h4>Formal presentation / Final Pitch Sessions</h4>
                        <p>
                                Applicants  who are selected from the elevator pitch session will be invited to present their plan to the entire member community of the Imphal Angels. Formal presentation of shortlisted startups will be conducted four times a year (every quarter).

                                <a href="#imagepresentation" >For key points to be addressed in the presentation click here
                                    </a>
                        </p>
                    </div>



                    <div class="col-block item-terminology" data-aos="fade-up">
                            <h4>Follow up</h4>
                            <p>
                                    In the period following the presentations, the members will decide whether your business plan is of interest to them and whether they wish to participate in the due diligence for the purpose of individual investment. Each member will look at the deal individually and holistically to see if the deal is appropriate based upon host of criteria. Angels invest their own money and may choose to rely on their instinct, experience and the opinions of other members, rather than relying only on the diligence process.
                            </p>
                        </div>

                        <div class="col-block item-terminology" data-aos="fade-up">
                                <h4>Due diligence</h4>
                                <p>
                                        Once we receive enough interests from our members, Imphal Angels will connect with the entrepreneurs to conduct due diligence and deep dive into the business, financial and other aspects. This usually takes 3-4 weeks depending on the business and other factors.
                                </p>
                            </div>


                            <div class="col-block item-terminology" data-aos="fade-up">
                                    <h4>Term Sheet Negotiation</h4>
                                    <p>
                                            After successful completion of the due diligence process, interested Members will present the entrepreneur with a Term Sheet that defines the structure of the investment deal – including the amount / type of equity, valuation, shareholder agreement, as well as rights relating to our representation on the board of directors, amongst other things.
                                    </p>
                                </div>

                                <div class="col-block item-terminology" data-aos="fade-up">
                                        <h4>Investment</h4>
                                        <p>
                                                Members invest individually and not through the Imphal Angels entity. The members decide among themselves how much each individual wishes to invest. Post successful due diligence, when all the parties are satisfied with the terms and language contained in the Term Sheet, the deal can be executed. 

                                        </p>
                                    </div>



                                    <div class="col-block item-terminology" data-aos="fade-up">
                                            <h4>Beyond Funding</h4>
                                            <p>
                                                    Closing the deal is only the beginning of the involvement of Imphal Angels in the company/startup. Imphal Angel believes that early stage businesses require more than just money to succeed. We aim at enhancing the success rate of early-stage businesses significantly through mentoring, networks and inputs on strategy as well as execution.
 
    
                                            </p>
                                        </div>
    
    
            </div> <!-- end terminology-list -->
    
            <!-- <div class="terminology-content__buttons col-full " data-aos="fade-up">
                <a href="terminology.html" class="btn btn--stroke">
                    Read More
                </a>
            </div> -->
    
    
    
        </section> <!-- end s-terminology -->
    

<!-- image
    ================================================== -->
    <section id='imagepresentation' class="s-investors angels " style=" padding-top: 10px; padding-bottom: 30px; ">

        <div class="row  " data-aos="fade-up">
            <div class="col-full">
                <!-- <h3 class="subhead">key points to be addressed in the presentation</h3> -->


                <center>
                        <h3 ">
                                Key points to be addressed in the presentation 
                        </h3>
                    <img src="<?php echo base_url()?>assets/images/6.png" alt="" height="100%" width="70%" >
                </center>
                
            </div>
        </div> <!-- end section-header -->




    </section> <!-- image -->





<!-- angel-form    ================================================== -->

    <section id="pitch-form" class="s-angel-form">

            <div class="row section-header " data-aos="fade-up">
                <div class="col-full">
                    <h1 class="display-1 display-1--light">Apply to Pitch</h1>
                </div>
            </div> <!-- end section-header -->



    <form name="contactForm"  method="post" action="<?php echo base_url();?>contactform/pitch_apply" enctype="multipart/form-data" >
            <fieldset>
    
                <div class="row angel-form-stats-form block-1-3 block-m-1-2 block-mob-full" data-aos="fade-up">
    
                    <div class="col-block stats__col angel-form__col_form ">
                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="Your Name" value=""
                                maxlength="50" required class="full-width" onkeyup="runescape();" onfocus="runescape();" onchange="runescape();" onkeydown="runescape();"onblur="runescape();">
                        </div>
                                    <script type="text/javascript">
											function runescape()
											{
											var string = document.getElementById('contactName').value;
											
											document.getElementById('contactName').value= string.replace(/[^a-zA-Z \b]/g,"");
											
											}
										</script>
                        
                    </div>

                    
                    <div class="col-block stats__col angel-form__col_form">
                        <div class="form-field">
                            <input name="contactCompanyName" maxlength="100" type="text" id="contactCompanyName" placeholder="Company Name" value=""
                                required class="full-width">
                        </div>
                    </div>

                    <div class="col-block stats__col angel-form__col_form">
                            <div class="form-field">
                                <input name="contactJobTitle" maxlength="50" type="text" id="contactJobTitle" placeholder="Job Title" value=""
                                    required class="full-width">
                            </div>
                        </div>
    
                </div> <!-- end angel-form-stats-form -->

                <div class="row angel-form-stats-form block-1-3 block-m-1-2 block-mob-full" data-aos="fade-up">

                        <div class="col-block stats__col angel-form__col_form">
                                <div class="form-field">
                                    <input name="contactPhone" maxlength="10" minlength="10" type="tel" required id="contactPhone" placeholder="Mobile Number" value=""
                                        class="full-width" onkeyup="runescape_no();" onfocus="runescape_no();" onchange="runescape_no();" onkeydown="runescape_no();"onblur="runescape_no();">
                                </div>
                                <script type="text/javascript">
											function runescape_no()
											{
											var string = document.getElementById('contactPhone').value;
											
											document.getElementById('contactPhone').value= string.replace(/[^0-9]/g,"");
											
											}
										</script>
                            </div>
    
                        <div class="col-block stats__col angel-form__col_form ">
                            <div class="form-field">
                                <input name="contactEmail"  maxlength="50" type="email" id="contactEmail" placeholder="Email" value=""
                                    minlength="2" required class="full-width">
                            </div>
                        </div>
                        <div class="col-block stats__col angel-form__col_form">
                            <div class="form-field">
                            
                            

                            	<div class="upload-btn-wrapper">
                					<button class="upload_btn">Attach Pitch Deck</button>
                					<input type="file" required id="contactUpload"  name="contactFileUpload" />
                				</div>


                            </div>
                        </div>
 
        
        
        
                    </div> <!-- end angel-form-stats-form -->
    
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
    
    </section> <!-- end s-angel-form -->
    
    
    <!-- End of angel-form 
        ================================================== -->






    


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
                                    minlength="2" required="" aria-required="true" class="full-width name">
                            </div>
                            <div class="form-field">
                                <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value=""
                                    required="" aria-required="true" class="full-width">
                            </div>
                            <div class="form-field">
                                <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value=""
                                    class="full-width">
                            </div>
                            <div class="form-field">
                                <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10"
                                    cols="50" required="" aria-required="true" class="full-width"></textarea>
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
    <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script>

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
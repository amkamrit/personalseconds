
@extends('frontend_app.app')

@section('content')
<!-- header -->
    <div class="banner">
        <div class="container">
            <div class="header">
                <div class="menu">                                              
                        <a href="#" class="right_bt" id="activator"><img src="images/menu.png" alt=""/></a>
                            <div class="box" id="box">
                                <div class="box_content">
                                   <div class="menu_box_list">
                                       <ul>
                                           <li class="active"><a href="#home" class="scroll">home</a></li>
                                            <li><a href="#about" class="scroll">About us</a></li>
                                            <li><a href="#services" class="scroll">Services</a></li>
                                            <li><a href="#portfolio" class="scroll">portfolio</a></li>
                                            <li><a href="#contact-us" class="scroll">contact </a></li>
                                                <div class="clearfix"></div>
                                        </ul>
                                    </div>
                                    <a class="boxclose" id="boxclose"><img src="images/close.png" alt=""/></a>
                                </div>                
                            </div>
                            <script type="text/javascript" src="js/easing.js"></script>
                                 <script type="text/javascript">
                                        var $ = jQuery.noConflict();
                                            $(function() {
                                                $('#activator').click(function(){
                                                        $('#box').animate({'top':'0px'},500);
                                                });
                                                $('#boxclose').click(function(){
                                                        $('#box').animate({'top':'-700px'},500);
                                                });
                                            });
                                            $(document).ready(function(){
                                            
                                            //Hide (Collapse) the toggle containers on load
                                            $(".toggle_container").hide(); 
                                            
                                            //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
                                            $(".trigger").click(function(){
                                                $(this).toggleClass("active").next().slideToggle("slow");
                                                return false; //Prevent the browser jump to the link anchor
                                            });
                                            
                                            });
                                        </script>
                </div> 
                <div class="messg">
                    <a href="mailto:info@company.com"><i class="msg"></i></a>       
                </div>
                        <div class="clearfix"></div>
            </div>
                <div class="banner-info">
                    <h1>I am a <span>Freelancer Designer</span></h1>
                    <p>Web Development - IOS Developer - Internet Marketer - Your Freelance</p>
                    <a class="learn" href="#">Learn More</a>
                </div>
        </div>
    </div>
    <!-- header -->
    <!-- branding -->
    <div class="branding" id="home">
        <div class="container">
            <div class="col-md-3 mobi">
                <i class="mobile"> </i>
                <label> </label>
                <h4>Web Design</h4>
            </div>
            <div class="col-md-3 devic">
                <i class="device"> </i>
                <label> </label>
                <h4>Web Development</h4>
            </div>
            <div class="col-md-3 rock-1">
                <i class="rocket"> </i>
                <label> </label>
                <h4>Internet Marketing</h4>
            </div>
            <div class="col-md-3 appl">
                <i class="apple"> </i>
                <h4>IOS Development</h4>
            </div>
                <div class="clearfix"></div>
        </div>
    </div>
    <div class="b-design">
        <div class="container">
                <div class="col-md-6 dsg-1">
                    <h3>Branding Design</h3>
                    <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                    <a class="more" href="#">Read More</a>
                </div>
                <div class="col-md-6 dsg-2">
                    <img src="images/img1.png" class="img-responsive" alt="" />
                </div>
                    <div class="clearfix"></div>
        </div>
    </div>
    <!-- branding -->
    <!-- about-me -->
    <div class="about-me" id="about">
        <div class="container">
            <h2>About<span>Me</span></h2>
            <i class="acent"></i>
            <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat v lutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat. adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequa.</p>
            <p>Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequa.</p>
                <div class="col-md-6 medi">
                    <h5>Social Media Accounts</h5>
                </div>
                <div class="col-md-6 soci">
                    <a href="#"><i class="social"></i></a>
                </div>
                    <div class="clearfix"></div>
        </div>          
                <div class="location">
                    <div class="container">
                        <div class="col-md-6 igb">
                            <h6>LOCATION:<span>Igbalangao, Bugasong, Antique, PH, 5704</span></h6>
                        </div>
                        <div class="col-md-3 pon">
                            <h6>PHONE:<span>(123)456-7890<span></h6>
                        </div>
                        <div class="col-md-3">
                            <h6>EMAIL:<a href="#"> name@example.com</a></h6>
                        </div>
                            <div class="clearfix"></div>
                    </div>
                </div>
    </div>
    <!-- about-me -->
    <!-- portfolio-section -->
     <div class="portfolio"  id="portfolio">
        <div class="container">
            <h2>Recent <span>Works</span></h2>
            <i class="accent"></i>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
            <ul id="filters" class="clearfix">
                <li><span class="filter active" data-filter="app card icon logos web">All</span></li>
                <li><span class="filter" data-filter="app">Branding</span></li>
                <li><span class="filter" data-filter="card">illustrations</span></li>
                <li><span class="filter" data-filter="icon">web Design</span></li>
            </ul>
                <div id="portfoliolist">
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="images/bc2.jpg" class="swipebox"  title="Image Title"> <img src="images/bc2.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                    </div>              
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="images/food.jpg" class="swipebox"  title="Image Title"> <img src="images/food.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                    </div>                  
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="images/brand.jpg" class="swipebox"  title="Image Title"> <img src="images/brand.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                    </div>
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="images/pho.jpg" class="swipebox"  title="Image Title"> <img src="images/pho.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                    </div>          
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="images/sign.jpg" class="swipebox"  title="Image Title"> <img src="images/sign.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                    </div>  
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="images/bcard.jpg" class="swipebox"  title="Image Title"> <img src="images/bcard.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                    </div>  
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="images/pp.jpg" class="swipebox"  title="Image Title"> <img src="images/pp.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                        </div>
                        <div class="portfolio logos mix_all wow bounceIn" data-wow-delay="0.4s" data-cat="logos" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="images/diamond.jpg" class="swipebox"  title="Image Title"> <img src="images/diamond.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>                    
                </div>
                    <div class="clearfix"></div>
    </div>
      <!-- Script for gallery Here -->
                <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
                    <script type="text/javascript">
                    $(function () {
                        
                        var filterList = {
                        
                            init: function () {
                            
                                // MixItUp plugin
                                // http://mixitup.io
                                $('#portfoliolist').mixitup({
                                    targetSelector: '.portfolio',
                                    filterSelector: '.filter',
                                    effects: ['fade'],
                                    easing: 'snap',
                                    // call the hover effect
                                    onMixEnd: filterList.hoverEffect()
                                });             
                            
                            },
                            
                            hoverEffect: function () {
                            
                                // Simple parallax effect
                                $('#portfoliolist .portfolio').hover(
                                    function () {
                                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');             
                                    },
                                    function () {
                                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');                               
                                    }       
                                );              
                            
                            }
                
                        };
                        
                        // Run the show!
                        filterList.init();
                        
                        
                    }); 
                    </script>
<!-- portfolio-section  -->
<!-- slider -->
<div class="dan" id="services">
<section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="slider-info">
                                        <img src="images/man.jpg"  alt="">
                                        <h6> Dan Cederholm</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="slider-info">
                                        <img src="images/man.jpg"  alt="">
                                        <h6> Dan Cederholm</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </li>
                                <li>    
                                    <div class="slider-info">
                                        <img src="images/man.jpg"  alt="">
                                        <h6> Dan Cederholm</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </li>
                                <li>    
                                    <div class="slider-info">
                                        <img src="images/man.jpg"  alt="">
                                        <h6> Dan Cederholm</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                
                        <!-- FlexSlider -->
                              <script defer src="js/jquery.flexslider.js"></script>
                              <script type="text/javascript">
                                $(function(){
                                  SyntaxHighlighter.all();
                                });
                                $(window).load(function(){
                                  $('.flexslider').flexslider({
                                    animation: "slide",
                                    start: function(slider){
                                      $('body').removeClass('loading');
                                    }
                                  });
                                });
                              </script>
                        <!-- FlexSlider -->
    <!-- slider -->
    </div>
    <!-- contact -->
    <div class="contact" id="contact-us">
        <div class="container">
        <h3><span>Contact</span>me</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
            <div class="col-md-6">
                    <form>
                        <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                        <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                        <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                    </form>
            </div>
            <div class="col-md-6">
                    <form>
                        <textarea value="Message:" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='MESSAGE';">Message</textarea>
                    </form>
            </div>
                <div class="clearfix"></div>
            <div class="button-1">
                        <a class="view" href="#">SUBMIT<i class="rock"></i></a>
        </div>
    </div>
    <!-- contact -->
    <div class="map">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d403200.04170320276!2d145.07961605!3d-37.86028279999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1417257392681" width="" height="" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fb"></i></a></li>
                <li><a href="#"><i class="cam"></i></a></li>
                <li><a href="#"><i class="beh"></i></a></li>
                <li><a href="#"><i class="goog"></i></a></li>
                <li><a href="#"><i class="twt"></i></a></li>
                <li><a href="#"><i class="drib"></i></a></li>
            </ul>
        </div>
    </div>
    <!-- footer -->
    <div class="footer-bottom">
        <div class="container">
            <p>Template by <a href="http://w3layouts.com" target="_blank"> Creative Wave Information Technology</a></p>
        </div>
    </div>  
    <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    @endsection
<!DOCTYPE html>
<html>
  
<head>
    <title>Grannypinion.de</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    
    
    <!-- Included Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300,100' rel='stylesheet' type='text/css'>
    
    
    <!-- CSS Files comes here -->
    <link href="/landing/css/grid12.css" rel="stylesheet" media="screen">                                 <!-- Grid System -->
    <link href="/landing/css/james_typography.css" rel="stylesheet" media="screen">                       <!-- Framework - TYPOGRAPHY -->
    <link href="/landing/css/main.css" rel="stylesheet" media="screen">                        <!-- Main CSS file -->
    <link href="/landing/css/color_scheme_light.css" rel="stylesheet" media="screen">                      <!-- Color scheme (dark/light)-->
    <link href="/landing/css/colors/color_palette_deep-purple.css" rel="stylesheet" media="screen">              <!-- Color palette -->
    <link href="/landing/css/rapid-icons.css" rel="stylesheet" media="screen">                            <!-- James Framework - ICONS -->
    <link href="/landing/css/js_styles/jquery.maximage.min.css" rel="stylesheet" media="screen">          <!-- MaxImage background image slideshow -->
    <link href="/landing/css/responsivity.css" rel="stylesheet" media="screen">                           <!-- Responsive Fixes -->
    <link href="/landing/css/animate.css" rel="stylesheet" media="screen">                                <!-- Animate - animations -->
    <link href="/landing/css/nivo-lightbox.css" rel="stylesheet" media="screen">                          <!-- Lightbox Styles -->
    <link href="/landing/css/nivo_lightbox_themes/default/default.css" rel="stylesheet" media="screen">   <!-- Lightbox Styles -->
    <link href="/landing/css/owl.carousel.css" rel="stylesheet" media="screen">                           <!-- Owl - Carousel -->
    <link href="/landing/css/owl.theme.css" rel="stylesheet" media="screen">                              <!-- Owl - Carousel -->
    <link href="/landing/css/owl.transitions.css" rel="stylesheet" media="screen">                        <!-- Owl - Carousel -->
    
    
    <!-- Modernizer and IE specyfic files -->  
    <script src="/landing/js/modernizr.custom.js"></script>  
       
</head>
  
  <body>
  
    <!-- Mobile nav -->      
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <div class="mobile_nav_close_button"><a href="#" id="hideRight"><div data-icon="&#xe13f;" class="button_icon close_icon"></div></a></div>
        <nav id="mobile_menu_content">
            <a href="/login" >{{ trans('landing.log_in') }}</a>
            <a href="#" >{{ trans('landing.sign_up') }}</a>
            @include('landing.lang')
        </nav>
    </div>
    <!-- //Mobile nav -->
  
    <div id="preloader_container">
        
        <!-- Preloader Screen -->
        <header class="preloader_header">    
            <div class="preloader_loader">
                <svg class="preloader_inner" width="60px" height="60px" viewBox="0 0 80 80">
                    <path class="preloader_loader_circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                    <path id="preloader_loader_circle" class="preloader_loader_circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                </svg>
            </div>
        </header>
        <!-- //Preloader Screen -->
    
    
        <!-- Fullscreen homepage -->
        <section class="hero_fullscreen background_solid mockups menu_bar-waypoint" data-animate-down="menu_bar-hide" data-animate-up="menu_bar-hide" >
        <!-- This section class is where you can edit background choice (background_single, background_slider, background_video) you can also enable gradient overlay (gradient_overlay) and mockups (mockups)-->
        

            <!-- Logo and navigation -->
            <div class="container top_bar" >
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="/landing/images/logo2.png" alt="logo" class="logo" width="100" />
                    <nav class="navigation_desktop">
                        <ul>
                            <li>
                                @include('landing.lang')
                            </li>
                            <li><a href="/login" class="visible-lg visible-md go_to_overview">{{ trans('landing.log_in') }}</a></li>
                            <li><a href="#features" class="visible-lg visible-md">{{ trans('landing.sign_up') }}</a></li>
                            
                            <li><div class="mobile_nav_open_button hidden-lg hidden-md"  ><a href="#" id="showRight_1" ><div data-icon="&#xe2f3;" class="button_icon close_icon"></div></a></div></li>
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>
            <!-- //Logo and navigation -->


            <!-- Main content -->
            <div class="container align-left" id="main_content">
                <div class="content_container row" >
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 home_content">
                        <h2 class="slogan">{{ trans('landing.slogan') }}</h2>
                        <h6>{{ trans('landing.sub_slogan') }}</h6>
                        
                        <!-- CTA Buttons-->
                        <div class="cta_button_area">
                            <div><button class="btn waves-effect waves-light subscribe-submit">{{ trans('landing.sign_up') }}</button></div>
                            <a href="#more_info"><small>{{ trans('landing.not_sure') }}</small></a> 
                        </div>
                        <!-- //CTA Buttons-->
                                    
                    </div>
                    <style>
                        .signup_form
                        {
                            top: -100px;
                        }
                        .signup_form input
                        {
                            color: #fff;
                            border-bottom: 1px solid #fff;
                        }
                        ::-webkit-input-placeholder { /* Chrome */
                          color: #fff;
                        }
                        :-ms-input-placeholder { /* IE 10+ */
                          color: #fff;
                        }
                        ::-moz-placeholder { /* Firefox 19+ */
                          color: #fff;
                          opacity: 1;
                        }
                        :-moz-placeholder { /* Firefox 4 - 18 */
                          color: #fff;
                          opacity: 1;
                        }
                    </style>
                    <!-- Mockups-->
                    <div class="hidden-xs hidden-sm col-md-6 col-lg-6 home_mockup signup_form">
                        <h5>{{ trans('landing.10_sec_reg') }}</h5>
                        <form action="/landing/register" method="POST">
                        {{csrf_field()}}
                          <div class="form-group">
                            <!-- <label for="exampleInputEmail1">Email address</label> -->
                            <div class="input-field">
                                <div data-icon="&#xe563;" class="prefix"></div>
                                <input id="email" type="email" name="email" class="validate">
                                <label for="email">{{ trans('landing.email') }}</label>    
                            </div>
                          </div>
                          <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <div class="input-field">
                                <!-- <i class="prefix glyphicon glyphicon-eye-close"></i> -->
                                <div data-icon="&#xe562;" class="prefix"></div>
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">{{ trans('landing.password') }}</label>  
                            </div>
                          </div>
                          <button type="submit" class="btn btn-default">{{ trans('landing.sign_up') }}</button>
                        </form>
                    </div>
                    <!-- //Mockups-->
                </div>          
            </div>  
            <!-- //Main content -->
            
            
            
            <!-- Single Image Background -->
            <div id="maximage_single">
                <img src="/landing/images/home_background_01.jpg" alt=""/>
            </div>
            <!-- //Single Image Background -->
            
            
        </section><!-- //Homepage -->
        
        
        <!-- Menu bar -->
        <header id="menu_bar" class="menu_bar">
            <div class="container">
                <a href="#" class="go_to_home logo_dark"><img src="/landing/images/logo2-black.png" alt="logo" class="logo" width="40" /></a>
                <a href="#" class="go_to_home logo_light"><img src="/landing/images/logo2.png" alt="logo" class="logo"/></a>
                <nav class="menu_bar_navigation">
                    <ul>
                        <li>
                          @include('landing.lang')
                        </li>
                        <li class="visible-lg visible-md"><a href="/login" class="go_to_overview" >{{ trans('landing.log_in') }}</a></li>
                        <li class="visible-lg visible-md"><a href="#features" >{{ trans('landing.sign_up') }}</a></li>
                        <li class="hidden-lg hidden-md"><div class="mobile_nav_open_button "><a href="#" id="showRight_2"><div data-icon="&#xe2f3;" class="button_icon close_icon"></div></a></div></li>
                    </ul>
                </nav>
            </div>
        </header><!-- // Menu bar -->
    
        
        <!-- More Info #################### -->
        
        <section id="more_info" data-animate-down="menu_bar-show" data-animate-up="menu_bar-hide" class="menu_bar-waypoint subsection">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 align-center content_anim1 intro">
                        <h3>{{ trans('landing.slogan2') }}</h3>
                        <p></p>  
                    </div>
                </div>              
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="iconbox content_anim3">
                            <div class="iconbox_content">
                                <h5>{{ trans('landing.step1') }}</h5>
                                <p>{{ trans('landing.step1_desc') }}</p>
                            </div>
                        </div>  
                    </div>
                    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="iconbox content_anim4">
                            <div class="iconbox_content">
                                <h5>{{ trans('landing.step2') }}</h5>
                                <p>{{ trans('landing.step2_desc') }}</p>
                            </div>
                        </div>  
                    </div>
                    
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="iconbox content_anim5">
                            <div class="iconbox_content">
                                <h5>{{ trans('landing.step3') }}</h5>
                                <p>{{ trans('landing.step3_desc') }}</p>
                            </div>
                        </div>  
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="iconbox content_anim5">
                        <i class="fa fa-pen"></i>
                            <div class="iconbox_content">
                                <h5>{{ trans('landing.step4') }}</h5>
                                <p>{{ trans('landing.step4_desc') }}</p>
                            </div>
                        </div>  
                    </div>
                    
                </div>              
            </div>
            
        </section><!-- //More info -->
        
        <!-- Reviews #################### -->
        
        <section id="reviews" class="subsection_parallax"  data-stellar-background-ratio="0.6">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 content_anim17">
                        <div class="owl-carousel">
                        
                            <div class="single_review">
                                <img src="/landing/images/review_01.jpg" alt="" class="img-circle">
                                <div class="review_content">
                                    <h6>{{ trans('landing.review_text_1') }}</h6>
                                    <p>- {{ trans('landing.review_author_1') }}</p>
                                </div>
                            </div>
                            
                            <div class="single_review">
                                <img src="/landing/images/review_02.jpg" alt="" class="img-circle">
                                <div class="review_content">
                                    <h6>{{ trans('landing.review_text_2') }}</h6>
                                    <p>- {{ trans('landing.review_author_2') }}</p>
                                </div>
                            </div>
                            
                            <div class="single_review">
                                <img src="/landing/images/review_03.jpg" alt="" class="img-circle">
                                <div class="review_content">
                                    <h6>{{ trans('landing.review_text_3') }}</h6>
                                    <p>- {{ trans('landing.review_author_3') }}</p>
                                </div>
                            </div>
                            
                            <div class="single_review">
                                <img src="/landing/images/review_04.jpg" alt="" class="img-circle">
                                <div class="review_content">
                                    <h6>{{ trans('landing.review_text_4') }}</h6>
                                    <p>- {{ trans('landing.review_author_4') }} </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>  
                </div>      
            </div>
        </section><!-- //Reviews -->
        
        <section id="contact" class="subsection">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 content_anim29">
                    <h3>{{ trans('landing.contact_info') }}</h3>
                    {!! trans('landing.contact_desc') !!}
                    
                    <ul class="icon_list">
                        <li><div data-icon="&#xe1b4;" class="icon_small float-left"></div><h6>{{ trans('landing.address') }}</h6></li>
                        <li><div data-icon="&#xe23a;" class="icon_small float-left"></div><h6>{{ trans('landing.phone') }}</h6></li>
                        <li><div data-icon="&#xe242;" class="icon_small float-left"></div><h6><a href="mailto:info@grannypinion.de">info@grannypinion.de</a></h6></li>
                    </ul>
                    
                    <p>{{ trans('landing.author') }}</p>   
                    </div>
                    
                    
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 content_anim30">
                        <h3>{{ trans('landing.contact_us') }}</h3>
                        <p>{{ trans('landing.contact_us_desc') }} </p>
                    
                    
                        <!-- Contact Form -->
                        <form action="/contact"  method="post">
                        {{csrf_field()}}
                            <div class="contact_form">
                                <div class="input-field">
                                    <input id="first_name" type="text" name="name">
                                    <label for="first_name">{{ trans('landing.your_name') }}</label>
                                </div>
                                <div class="input-field">
                                    <input id="contact_email" type="email" name="email">
                                    <label for="contact_email">{{ trans('landing.email') }}</label>
                                </div>
                                <div class="input-field">
                                    <textarea class="materialize-textarea" name="message"></textarea>
                                    <label>{{ trans('landing.message') }}</label>
                                </div>
                            </div>  
                            <button class="btn waves-effect waves-light" type="submit" name="action">{{ trans('landing.send') }}</button>
                        </form>
                        <!-- //Contact Form -->
                    
                    
                        <div id="message"><div id="alert"></div></div><!-- Message container --> 
                    </div>
                    
                    

                </div>              
            </div>
        </section><!-- //More info -->
        
        
        <section id="footer" class="subsection">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">
                    
                        <!-- Social Icons -->
                        <div class="social_icons_container align-center">
                            <div class="social_icons">
                                <ul>
                                    <li><div data-icon="&#xe282;" class="social_icon twitter_icon" onclick="location.href='#'"></div></li>
                                    <li><div data-icon="&#xe281;" class="social_icon facebook_icon" onclick="location.href='#'"></div></li>
                                </ul>
                            </div>
                        </div>  
                        <!-- //Social Icons -->

                    <p><small>Copyright © {{date('Y')}} Grannypinion, Made with ❤ by Enes Witwit</small></p> 
                    </div>
                </div>              
            </div>
        </section><!-- //More info -->
        

    </div><!-- //preloader -->
    
   
    <!-- JavaScript plugins comes here -->  
    <script src="/landing/js/jquery-2.1.3.min.js"></script>        <!-- jQuery -->
    <script src="/landing/js/jquery.easing.min.js"></script>       <!-- jQuery easing -->    
    <script src="/landing/js/jquery.scrollTo.js"></script>         <!-- Scroll to -->
    <script src="/landing/js/jquery.cycle.all.min.js"></script>    <!-- jQuery cycle -->
    <script src="/landing/js/jquery.form.js"></script>             <!-- jQuery form -->
    <script src="/landing/js/jquery.maximage.min.js"></script>     <!-- MaxImage background image slideshow -->
    <script src="/landing/js/materialize.js"></script>             <!-- Materialize -->
    <script src="/landing/js/classie.js"></script>                 <!-- Class helper function -->
    <script src="/landing/js/pathLoader.js"></script>              <!-- Preloader Loading Animation -->
    <script src="/landing/js/preloader.js"></script>               <!-- Preloader -->
    <script src="/landing/js/count_down.js"></script>              <!-- Count Down Timer -->
    <script src="/landing/js/happy.js"></script>                   <!-- Newsletter form validation -->
    <script src="/landing/js/happy.methods.js"></script>           <!-- Newsletter form validation -->
    <script src="/landing/js/retina.js"></script>                  <!-- Retina.js - support for HiDPI Displays -->
    <script src="/landing/js/waypoints.min.js"></script>           <!-- Waypoints -->
    <script src="/landing/js/nivo-lightbox.min.js"></script>       <!-- Lightbox/Modalbox -->
    <script src="/landing/js/jquery.fitvids.js"></script>          <!-- Responsive Video -->
    <script src="/landing/js/jquery.stellar.js"></script>          <!-- Parallax backgrounds -->
    <script src="/landing/js/owl.carousel.js"></script>            <!-- Owl Carousel --> 
    <script src="/landing/js/main.js"></script>                    <!-- Main Js file -->
    
    
    <!-- Show message after newsletter form submit -->
    <script type="text/javascript">
        $('document').ready(function()
            {
            $('#subscribe-form').ajaxForm( {
                target: '#preview',
                success: function() {       
                      $('#preview').addClass( "show_message" );
                    }
                });
            });
    </script>

    <!-- MOBILE NAVIGATION -->
    <script>
        var showRight_1 = document.getElementById( "showRight_1" ),
        showRight_2 = document.getElementById( "showRight_2" ),
        hideRight = document.getElementById( 'hideRight' ),
        menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        body = document.body;
        
        showRight_1.onclick = function(event) {
            "use strict";
            event.preventDefault();
            classie.toggle( this, 'active' );
            classie.toggle( menuRight, 'cbp-spmenu-open' );
            disableOther( 'showRight_1' );
            return false;
        };
        
        showRight_2.onclick = function(event) {
            "use strict";
            event.preventDefault();
            classie.toggle( this, 'active' );
            classie.toggle( menuRight, 'cbp-spmenu-open' );
            disableOther( 'showRight_2' );
            return false;
        };
    
        hideRight.onclick = function(event) {
            "use strict";
            event.preventDefault();
            classie.toggle( this, 'active' );
            classie.toggle( menuRight, 'cbp-spmenu-open' );
            disableOther( 'showRight_2' );
            return false;
        };
    </script>
    
    
    <!-- Nav Bar show/hide after scrolling -->
    <script>
    var $head = $( '#menu_bar' );
    $( '.menu_bar-waypoint' ).each( function(i) {
        var $el = $( this ),
            animClassDown = $el.data( 'animateDown' ),
            animClassUp = $el.data( 'animateUp' );
            

        $el.waypoint( function( direction ) {
            if( direction === 'down' && animClassDown ) {
                $head.attr('class', 'menu_bar ' + animClassDown);
            }
            else if( direction === 'up' && animClassUp ){
                $head.attr('class', 'menu_bar ' + animClassUp);
            }
        }, { offset: function() {
            navbarheight = $("#menu_bar").outerHeight()+1;
            return navbarheight;
            }
         } );
    } );
    </script>
  </body>

</html>
@extends('layouts.layoutone')

@section('content')

    <!-- Full Body Container -->
    <div id="container">
        
        
        <!-- Start Header Section --> 
        <div class="hidden-header"></div>
        <header class="clearfix">
            
            <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info -->
                            <ul class="contact-details">
                                <li><a href="#"><i class="fa fa-envelope-o"></i> info@pms-bd.com</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i> +880 17 00 00 00 00</a>
                                </li>
                            </ul>
                            <!-- End Contact Info -->
                        </div><!-- .col-md-6 -->
                        <div class="col-md-5">
                            <!-- Start Social Links -->
                            <ul class="social-list">
                                <li>
                                    <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li>
                                    <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                </li>
                                <li>
                                    <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                            <!-- End Social Links -->
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .top-bar -->
            <!-- End Top Bar -->
            
            
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="#">
                            <img style="max-height: 50px; margin-top: -10px;" alt="" src="{{ asset('main/img/logo.jpg')}}">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Stat Search -->
                        <div class="search-side">
                            <a href="#" class="show-search"><i class="fa fa-search"></i></a>
                            <div class="search-form">
                                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                                    <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                                </form>
                            </div>
                        </div>
                        <!-- End Search -->
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="active" href="#">Home</a>
                            </li>
                            <!-- <li>
                                <a class="active" href="index.html">Home</a>
                                <ul class="dropdown">
                                    
                                    
                                </ul>
                            </li> -->
                            <li>
                                <a href="about.html">About</a>
                                <ul class="dropdown">
                                    <li><a href="about.html">About</a>
                                    </li>
                                    <li><a href="services.html">Services</a>
                                    </li>
                                    <li><a href="right-sidebar.html">Right Sidebar</a>
                                    </li>
                                    <li><a href="left-sidebar.html">Left Sidebar</a>
                                    </li>
                                    <li><a href="404.html">404 Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Skill Development</a>
                                <ul class="dropdown">
                                    <li><a href="tabs.html">Tabs</a>
                                    </li>
                                    <li><a href="buttons.html">Buttons</a>
                                    </li>
                                    <li><a href="action-box.html">Action Box</a>
                                    </li>
                                    <li><a href="testimonials.html">Testimonials</a>
                                    </li>
                                    <li><a href="latest-posts.html">Latest Posts</a>
                                    </li>
                                    <li><a href="latest-projects.html">Latest Projects</a>
                                    </li>
                                    <li><a href="pricing.html">Pricing Tables</a>
                                    </li>
                                    <li><a href="animated-graphs.html">Animated Graphs</a>
                                    </li>
                                    <li><a href="accordion-toggles.html">Accordion & Toggles</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="portfolio-3.html">Consultancy</a>
                                <ul class="dropdown">
                                    <li><a href="portfolio-2.html">2 Columns</a>
                                    </li>
                                    <li><a href="portfolio-3.html">3 Columns</a>
                                    </li>
                                    <li><a href="portfolio-4.html">4 Columns</a>
                                    </li>
                                    <li><a href="single-project.html">Single Project</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Research</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Blog - right Sidebar</a>
                                    </li>
                                    <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                                    </li>
                                    <li><a href="single-post.html">Blog Single Post</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
            
        </header> 
        <!-- End Header Section -->
        
        
        
        <!-- Start Home Page Slider -->
        <section id="home">
            <!-- Carousel -->
            <div id="main-slide" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slide" data-slide-to="1"></li>
                    <li data-target="#main-slide" data-slide-to="2"></li>
                </ol>
                <!--/ Indicators end-->

                <!-- Carousel inner -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="{{ asset('main/img/slider/slide03.jpg')}}" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated2">
                        		  <span>Welcome to <strong>PMS BD</strong></span>
                        	    </h2>
                                <h3 class="animated3">
                            		<span>Professional Training Programme</span>
                            	</h3>
                                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->
                    <div class="item">
                        <img class="img-responsive" src="{{ asset('main/img/slider/slide02.jpg')}}" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated4">
                                <span><strong>PMS BD</strong> for the highest</span>
                            </h2>
                                <h3 class="animated5">
                            	<span>The Key of your Success</span>
                            </h3>	
                                <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Join Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->
                    <div class="item">
                        <img class="img-responsive" src="{{asset('main/img/slider/slide01.jpg') }}" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated7 white">
                                <span>The way of <strong>Success</strong></span>
                            </h2>
                                <h3 class="animated8 white">
                            	<span>Why you are waiting</span>
                            </h3>	
                                <div class="">
                                    <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Carousel item end -->
                </div>
                <!-- Carousel inner end-->

                <!-- Controls -->
                <a class="left carousel-control" href="#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
            <!-- /carousel -->
        </section>
        <!-- End Home Page Slider -->
        
        
        <!-- Start Services Section -->
        <div class="section service">
            <div class="container">
                <div class="row">
                    
                    <!-- Start Service Icon 1 -->
                    <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                        <div class="service-icon">
                            <i class="fa fa-leaf icon-large"></i>
                        </div>
                        <div class="service-content">
                            <h4>Research Project</h4>
                            <p>Research comprises ``creative work undertaken on a systematic basis in order to increase the stock of knowledge, including knowledge of humans, culture and society, and the use of this stock of knowledge to</p>

                        </div>
                    </div>
                    <!-- End Service Icon 1 -->

                    <!-- Start Service Icon 2 -->
                    <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
                        <div class="service-icon">
                            <i class="fa fa-desktop icon-large"></i>
                        </div>
                        <div class="service-content">
                            <h4>Professional Consulating</h4>
                            <p>The act or an instance of consulting. 2. A business or agency offering expert or professional advice in a field: opened a financial consultancy. 3. A position as a consultant: accepted a three-year consultancy abroad.</p>
                        </div>
                    </div>
                    <!-- End Service Icon 2 -->

                    <!-- Start Service Icon 3 -->
                    <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
                        <div class="service-icon">
                            <i class="fa fa-download icon-large"></i>
                        </div>
                        <div class="service-content">
                            <h4>Business Solution</h4>
                            <p>Our Development and Solution philosophy is to adopt an innovative use of technology, and understand the optimal business use of the project we Our Development and Solution philosophy is to adopt</p>
                        </div>
                    </div>
                    <!-- End Service Icon 3 -->

                    <!-- Start Service Icon 4 -->
                    <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="05">
                        <div class="service-icon">
                            <i class="fa fa-rocket icon-large"></i>
                        </div>
                        <div class="service-content">
                            <h4>Training Program</h4>
                            <p>Take your workout routines to the next level with our full-body programs and ... This training approach takes the best from power lifting and bodybuilding for ...Take your workout routines to the next level with our full-body programs</p>
                        </div>
                    </div>
                    <!-- End Service Icon 4 -->

                  

                </div><!-- .row -->
            </div><!-- .container -->
        </div>
        <!-- End Services Section -->
        
        
        <!-- Start Purchase Section -->
        <div class="section purchase">
            <div class="container">

                <!-- Start Video Section Content -->
                <div class="section-video-content text-center">

                    <!-- Start Animations Text -->
                    <h1 class="fittext wite-text uppercase tlt">
                      <span class="texts">
                        <span>Modern</span>
                        <span>Clean</span>
                        <span>Awesome</span>
                        <span>Cool</span>
                        <span>Great</span>
                      </span>
                        Project Management Professional<br/>Ready for <strong>YOUR</strong> Creative Portfolios
                    </h1>
                    <!-- End Animations Text -->


                    <!-- Start Buttons -->
                    
                    <a href="#" class="btn-system btn-large"><i class="fa fa-leaf"></i> Join Now</a>

                </div>
                <!-- End Section Content -->

            </div><!-- .container -->
        </div>
        <!-- End Purchase Section -->
        
        
        
        
        
        
        
        
        
        <!-- Start Portfolio Section -->
        <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

                <!-- Start Big Heading -->
                <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
                    <h1>This is Our Latest <strong>Work</strong></h1>
                </div>
                <!-- End Big Heading -->

                <p class="text-center">We understand project management as an integrated system which conforms with the client’s requirements and the project’s specific demands.<br/> In corporation with the client we develop a customized service package whose basis is to think ahead, creativity, business intelligence and strategic actions. We aim to meet the specific needs of our clients.
                    </p>


                <!-- Start Recent Projects Carousel -->
                <ul id="portfolio-list" data-animated="fadeIn">
                    <li>
                        <img src="{{ asset('main/img/gallery/port-1.jpg') }}" alt="" />
                        <div class="portfolio-item-content">
                            <span class="header">Town winter 2013</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <a href="#"><i class="more">+</i></a>

                    </li>
                    <li>
                        <img src="{{ asset('main/img/gallery/port-2.jpg') }}" alt="" />
                        <div class="portfolio-item-content">
                            <span class="header">Quarterly Musashino</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <a href="#"><i class="more">+</i></a>

                    </li>
                    <li>
                        <img src="{{ asset('main/img/gallery/port-3.jpg') }}" alt="" />
                        <div class="portfolio-item-content">
                            <span class="header">Mainichi April 2014</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <a href="#"><i class="more">+</i></a>

                    </li>
                    <li>
                        <img src="{{ asset('main/img/gallery/port-4.jpg') }}" alt="" />
                        <div class="portfolio-item-content">
                            <span class="header">Shitamachi Rocket</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <a href="#"><i class="more">+</i></a>

                    </li>
                    <li>
                        <img src="{{ asset('main/img/gallery/port-5.jpg') }}" alt="" />
                        <div class="portfolio-item-content">
                            <span class="header">Majesty express vol. 01</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <a href="#"><i class="more">+</i></a>

                    </li>
                    <li>
                        <img src="{{ asset('main/img/gallery/port-6.jpg') }}" alt="" />
                        <div class="portfolio-item-content">
                            <span class="header">Monocle issue 69</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <a href="#"><i class="more">+</i></a>

                    </li>
                    <li>
                        <img src="{{ asset('main/img/gallery/port-7.jpg') }}" alt="" />
                        <div class="portfolio-item-content">
                            <span class="header">Monocle issue 69</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <a href="#"><i class="more">+</i></a>

                    </li>
                    <li>
                        <img src="{{ asset('main/img/gallery/port-8.jpg') }}" alt="" />
                        <div class="portfolio-item-content">
                            <span class="header">Monocle issue 69</span>
                            <p class="body">web develpment, design</p>
                        </div>
                        <a href="#"><i class="more">+</i></a>

                    </li>
                    
                    
                </ul>

                <!-- End Recent Projects Carousel -->

                

        </div>
        <!-- End Portfolio Section -->
        
        
        
        
            
        
        
        
        
        <!-- Start Testimonials Section -->
        <div>
            <div class="container">
                <div class="row">
 <div class="col-md-8">
  
   <!-- Start Recent Posts Carousel -->
   <div class="latest-posts">
    <h4 class="classic-title"><span>Latest News</span></h4>
    <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">
      
      <!-- Posts 1 -->
      <div class="post-row item">
        <div class="left-meta-post">
          <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
          <div class="post-type"><i class="fa fa-picture-o"></i></div>
        </div>
        <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
        <div class="post-content">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
        </div>
      </div>
      
      <!-- Posts 2 -->
      <div class="post-row item">
        <div class="left-meta-post">
          <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
          <div class="post-type"><i class="fa fa-picture-o"></i></div>
        </div>
        <h3 class="post-title"><a href="#">Link Post</a></h3>
        <div class="post-content">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
        </div>
      </div>
      
      <!-- Posts 3 -->
      <div class="post-row item">
        <div class="left-meta-post">
          <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
          <div class="post-type"><i class="fa fa-picture-o"></i></div>
        </div>
        <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
        <div class="post-content">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
        </div>
      </div>
      
      <!-- Posts 4 -->
      <div class="post-row item">
        <div class="left-meta-post">
          <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
          <div class="post-type"><i class="fa fa-picture-o"></i></div>
        </div>
        <h3 class="post-title"><a href="#">Gallery Post</a></h3>
        <div class="post-content">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
        </div>
      </div>
      
      <!-- Posts 5 -->
      <div class="post-row item">
        <div class="left-meta-post">
          <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
          <div class="post-type"><i class="fa fa-picture-o"></i></div>
        </div>
        <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
        <div class="post-content">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
        </div>
      </div>
      
      <!-- Posts 6 -->
      <div class="post-row item">
        <div class="left-meta-post">
          <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
          <div class="post-type"><i class="fa fa-picture-o"></i></div>
        </div>
        <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
        <div class="post-content">
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
        </div>
      </div>
      
    </div>
  </div>
  <!-- End Recent Posts Carousel -->
  
</div>

<div class="col-md-4">
  
  <!-- Classic Heading -->
  <h4 class="classic-title"><span>Testimonials</span></h4>
  
  <!-- Start Testimonials Carousel -->
  <div class="custom-carousel show-one-slide touch-carousel" data-appeared-items="1">
    <!-- Testimonial 1 -->
    <div class="classic-testimonials item">
      <div class="testimonial-content">
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="testimonial-author"><span>John Doe</span> - Customer</div>
    </div>
    <!-- Testimonial 2 -->
    <div class="classic-testimonials item">
      <div class="testimonial-content">
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="testimonial-author"><span>John Doe</span> - Customer</div>
    </div>
    <!-- Testimonial 3 -->
    <div class="classic-testimonials item">
      <div class="testimonial-content">
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="testimonial-author"><span>John Doe</span> - Customer</div>
    </div>
  </div>
  <!-- End Testimonials Carousel -->
  
</div>
</div>
            </div>
        </div>
        <!-- End Testimonials Section -->
        
        
        
        
        
        
        <!-- Start Team Member Section -->
        <div class="section" style="background:#fff;">
            <div class="container">

                    <!-- Start Big Heading -->
                    <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
                        <h1>Our Great <strong>Team</strong></h1>
                    </div>
                    <!-- End Big Heading -->

                    <!-- Some Text -->
                    <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <span class="accent-color sh-tooltip" data-placement="right" title="Simple Tooltip">doloremque laudantium</span>, totam rem aperiam, eaque ipsa quae ab illo inventore
                        <br/>veritatis et quasi <span class="accent-color sh-tooltip" data-placement="bottom" title="Simple Tooltip">architecto</span> beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

                    
                    

                    <!-- Start Team Members -->
                    <div class="row">

                        <!-- Start Memebr 1 -->
                        <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
                            <div class="team-member modern">
                                <!-- Memebr Photo, Name & Position -->
                                <div class="member-photo">
                                    <img alt="" src="{{ asset('main/images/team/face_1.png')}}" />
                                    <div class="member-name">John Doe <span>Developer</span>
                                    </div>
                                </div>
                                <!-- Memebr Words -->
                                <div class="member-info">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                                </div>
                                <!-- Start Progress Bar 1 -->
                                <div class="progress-label">Photoshop</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                                        <span class="percentage">96%</span>
                                    </div>
                                </div>
                                <!-- Start Progress Bar 2 -->
                                <div class="progress-label">Logo Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="88%" data-appear-animation-delay="800">
                                        <span class="percentage">88%</span>
                                    </div>
                                </div>
                                <!-- Start Progress Bar 3 -->
                                <div class="progress-label">Vectors Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                                        <span class="percentage">100%</span>
                                    </div>
                                </div>
                                <!-- Memebr Social Links -->
                                <div class="member-socail">
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Memebr 1 -->

                        <!-- Start Memebr 2 -->
                        <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="04">
                            <div class="team-member modern">
                                <!-- Memebr Photo, Name & Position -->
                                <div class="member-photo">
                                    <img alt="" src="{{ asset('main/images/team/face_2.png')}}" />
                                    <div class="member-name">Silly Sally <span>Developer</span>
                                    </div>
                                </div>
                                <!-- Memebr Words -->
                                <div class="member-info">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                                </div>
                                <!-- Start Progress Bar 1 -->
                                <div class="progress-label">Photoshop</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                                        <span class="percentage">96%</span>
                                    </div>
                                </div>
                                <!-- Start Progress Bar 2 -->
                                <div class="progress-label">Logo Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="88%" data-appear-animation-delay="800">
                                        <span class="percentage">88%</span>
                                    </div>
                                </div>
                                <!-- Start Progress Bar 3 -->
                                <div class="progress-label">Vectors Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                                        <span class="percentage">100%</span>
                                    </div>
                                </div>
                                <!-- Memebr Social Links -->
                                <div class="member-socail">
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Memebr 2 -->

                        <!-- Start Memebr 3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="05">
                            <div class="team-member modern">
                                <!-- Memebr Photo, Name & Position -->
                                <div class="member-photo">
                                    <img alt="" src="{{ asset('main/images/team/face_3.png')}}" />
                                    <div class="member-name">Chris John <span>Developer</span>
                                    </div>
                                </div>
                                <!-- Memebr Words -->
                                <div class="member-info">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                                </div>
                                <!-- Start Progress Bar 1 -->
                                <div class="progress-label">Photoshop</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                                        <span class="percentage">96%</span>
                                    </div>
                                </div>
                                <!-- Start Progress Bar 2 -->
                                <div class="progress-label">Logo Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="94%" data-appear-animation-delay="800">
                                        <span class="percentage">94%</span>
                                    </div>
                                </div>
                                <!-- Start Progress Bar 3 -->
                                <div class="progress-label">Vectors Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="90%" data-appear-animation-delay="1200">
                                        <span class="percentage">90%</span>
                                    </div>
                                </div>
                                <!-- Memebr Social Links -->
                                <div class="member-socail">
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Memebr 3 -->

                        <!-- Start Memebr 4 -->
                        <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="06">
                            <div class="team-member modern">
                                <!-- Memebr Photo, Name & Position -->
                                <div class="member-photo">
                                    <img alt="" src="{{ asset('main/images/team/face_4.png')}}" />
                                    <div class="member-name">Sara John <span>Developer</span>
                                    </div>
                                </div>
                                <!-- Memebr Words -->
                                <div class="member-info">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
                                </div>
                                <!-- Start Progress Bar 1 -->
                                <div class="progress-label">Photoshop</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                                        <span class="percentage">96%</span>
                                    </div>
                                </div>
                                <!-- Start Progress Bar 2 -->
                                <div class="progress-label">Logo Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="85%" data-appear-animation-delay="800">
                                        <span class="percentage">85%</span>
                                    </div>
                                </div>
                                <!-- Start Progress Bar 3 -->
                                <div class="progress-label">Vectors Design</div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                                        <span class="percentage">100%</span>
                                    </div>
                                </div>
                                <!-- Memebr Social Links -->
                                <div class="member-socail">
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                                    <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Memebr 4 -->

                    </div>
                    <!-- End Team Members -->

            </div><!-- .container -->
        </div>
        <!-- End Team Member Section -->
        
        
        <div id="parallax-one" class="parallax" style="background-image:url({{ asset('main/images/parallax/bg-02.jpg') }});">
            <div class="parallax-text-container-1">
              <div class="parallax-text-item">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-cloud-upload"></i>
                        <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                        <h5>Files uploaded</h5>                               
                      </div>
                    </div>  
                    <div class="col-xs-12 col-sm-3 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="7394" data-speed="5000"></div>
                        <h5>Projects completed</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-code"></i>
                        <div class="timer" id="item3" data-to="18745" data-speed="5000"></div>
                        <h5>Lines of code written</h5>                               
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item4" data-to="8423" data-speed="5000"></div>
                        <h5>Happy clients</h5>                               
                      </div>
                    </div>                                                  
                  </div>         
                </div>       
              </div>
            </div>        
          </div>
            
            
         
        
        
        
        
        <!-- Start Client/Partner Section -->
        <div class="partner" style="margin-top: 100px; ">
        <div class="container">
            <div class="row">

                <!-- Start Big Heading -->
		<div class="big-title text-center">
			<h1>Our Happy <strong>Partners</strong></h1>
			<p class="title-desc">All Our Working Strength</p>
		</div>
		<!-- End Big Heading -->
		
		<!--Start Clients Carousel-->
		<div class="our-clients">
			<div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">
				
				<!-- Client 1 -->
				<div class="client-item item">
					<a href="#"><img src="{{ asset('main/img/partners/AARCED-LOGO.jpg')}}" alt="" /></a>
				</div>
				
				<!-- Client 2 -->
				<div class="client-item item">
					<a href="#"><img src="{{ asset('main/img/partners/AARCED-LOGO.jpg')}}" alt="" /></a>
				</div>
				
				<!-- Client 3 -->
				<div class="client-item item">
					<a href="#"><img src="{{ asset('main/img/partners/AARCED-LOGO.jpg')}}" alt="" /></a>
				</div>
				
				<!-- Client 4 -->
				<div class="client-item item">
					<a href="#"><img src="{{ asset('main/img/partners/AARCED-LOGO.jpg')}}" alt="" /></a>
				</div>
				
				<!-- Client 5 -->
				<div class="client-item item">
					<a href="#"><img src="{{ asset('main/img/partners/AARCED-LOGO.jpg')}}" alt="" /></a>
				</div>
				
				<!-- Client 6 -->
				<div class="client-item item">
					<a href="#"><img src="{{ asset('main/images/c6.png')}}" alt="" /></a>
				</div>
				
				<!-- Client 7 -->
				<div class="client-item item">
					<a href="#"><img src="{{ asset('main/img/partners/AARCED-LOGO.jpg')}}" alt="" /></a>
				</div>
				
				<!-- Client 8 -->
				<div class="client-item item">
					<a href="#"><img src="{{ asset('main/img/partners/AARCED-LOGO.jpg')}}" alt="" /></a>
				</div>
				
			</div>
		</div>
		<!-- End Clients Carousel -->
            </div><!-- .row -->
        </div><!-- .container -->
        </div>
        <!-- End Client/Partner Section -->
        
        
        
        
        
        <!-- Start Footer Section -->
        <footer>
            <div class="container">
                <div class="row footer-widgets">
                    
                    
                    <!-- Start Subscribe & Social Links Widget -->
                    <div class="col-md-3 col-xs-12">
                        <div class="footer-widget mail-subscribe-widget">
                            <h4>Get in touch<span class="head-line"></span></h4>
                            <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                            <form class="subscribe">
                                <input type="text" placeholder="mail@example.com">
                                <input type="submit" class="btn-system" value="Send">
                            </form>
                        </div>
                        <div class="footer-widget social-widget">
                            <h4>Follow Us<span class="head-line"></span></h4>
                            <ul class="social-icons">
                                <li>
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li>
                                    <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                                </li>
                                <li>
                                    <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col-md-3 -->
                    <!-- End Subscribe & Social Links Widget -->
                    
                    
                    <!-- Start Twitter Widget -->
                    <div class="col-md-3 col-xs-12">
                        <div class="footer-widget twitter-widget">
                            <h4>Twitter Feed<span class="head-line"></span></h4>
                            <ul>
                                <li>
                                    <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                                    <span>28 February 2014</span>
                                </li>
                                <li>
                                    <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                                    <span>26 February 2014</span>
                                </li>
                                <li>
                                    <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                                    <span>28 February 2014</span>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col-md-3 -->
                    <!-- End Twitter Widget -->


                    <!-- Start Flickr Widget -->
                    <div class="col-md-3 col-xs-12">
                        <div class="footer-widget flickr-widget">
                            <h4>Flicker Feed<span class="head-line"></span></h4>
                            <ul class="flickr-list">
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ asset('main/img/small/sm01.jpg')}}" class="lightbox">
                                        <img alt="" src="{{ asset('main/img/small/sm01.jpg')}}">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col-md-3 -->
                    <!-- End Flickr Widget -->

                    
                    <!-- Start Contact Widget -->
                    <div class="col-md-3 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <h4><img src="{{asset('main/images/footer-margo.png')}}" class="img-responsive" alt="Footer Logo" /></h4>
                            <p>Nurjahan Tower, 6th Floor,<br> Banglamotor, Dhaka-1000,<br> Bangladesh</p>
                            <ul>
                                <li><span>Phone Number:</span> +880 17 00 00 00 00</li>
                                <li><span>Email:</span> info@pms-bd.com</li>
                                <li><span>Website:</span> www.pms-bd.com</li>
                            </ul>
                        </div>
                    </div><!-- .col-md-3 -->
                    <!-- End Contact Widget -->

                    
                </div><!-- .row -->

                <!-- Start Copyright -->
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2016 BedBee Technologies -  All Rights Reserved <a href="#">GrayGrids</a> </p>
                        </div><!-- .col-md-6 -->
                        <div class="col-md-6">
                            <ul class="footer-nav">
                                <li><a href="#">Sitemap</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Contact</a>
                                </li>
                            </ul>
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                </div>
                <!-- End Copyright -->

            </div>
        </footer>
        <!-- End Footer Section -->
        
        
    </div>
    <!-- End Full Body Container -->

    <!-- Go To Top Link -->
   <!--  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    
    <div class="switcher-box">
        <a href="#" class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
        <h4>Style Switcher</h4>
        <span>12 Predefined Color Skins</span>
        <ul class="colors-list">
            <li>
                <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
            </li>
            <li>
                <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
            </li>
        </ul>
        <span>Top Bar Color</span>
        <select id="topbar-style" class="topbar-style">
            <option value="1">Light (Default)</option>
            <option value="2">Dark</option>
            <option value="3">Color</option>
        </select>
        <span>Layout Style</span>
        <select id="layout-style" class="layout-style">
            <option value="1">Wide</option>
            <option value="2">Boxed</option>
        </select>
        <span>Patterns for Boxed Version</span>
        <ul class="bg-list">
            <li>
                <a href="#" class="bg1"></a>
            </li>
            <li>
                <a href="#" class="bg2"></a>
            </li>
            <li>
                <a href="#" class="bg3"></a>
            </li>
            <li>
                <a href="#" class="bg4"></a>
            </li>
            <li>
                <a href="#" class="bg5"></a>
            </li>
            <li>
                <a href="#" class="bg6"></a>
            </li>
            <li>
                <a href="#" class="bg7"></a>
            </li>
            <li>
                <a href="#" class="bg8"></a>
            </li>
            <li>
                <a href="#" class="bg9"></a>
            </li>
            <li>
                <a href="#" class="bg10"></a>
            </li>
            <li>
                <a href="#" class="bg11"></a>
            </li>
            <li>
                <a href="#" class="bg12"></a>
            </li>
            <li>
                <a href="#" class="bg13"></a>
            </li>
            <li>
                <a href="#" class="bg14"></a>
            </li>
        </ul>
    </div> -->

@endsection
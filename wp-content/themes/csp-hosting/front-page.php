<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Csp_Hosting
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <!-- banner -->
            <div class="page_container">
                <div id="immersive_slider">
                    <div class="slide" data-blurred="<?php echo get_template_directory_uri().'/images/3a.jpg'; ?>">
                        <div class="col-md-6 image">
                            <img src="<?php echo get_template_directory_uri().'/images/3a.jpg'; ?>" alt="Slider 1" />
                        </div>
                        <div class="col-md-6 content">
                            <h3>Hosting <span>City</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur velit ac fringilla fermentum. Nulla sodales, magna eget pharetra feugiat, tellus metus lacinia nunc, nec vulputate purus nisl nec tortor. Mauris sem diam, interdum a euismod vitae, viverra non sapien. </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="slide" data-blurred="">
                        <div class="col-md-6 image">
                            <img src="../images/1a.jpg" alt="Slider 1" />
                        </div>
                        <div class="col-md-6 content">
                            <h3>Personal <span>Hosting</span></h3>
                            <p>Donec sagittis, dui sed lobortis convallis, ante eros auctor leo, vel commodo lacus nisl vitae velit. Nulla facilisi. Integer vehicula porta urna, id lacinia nisl semper vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="slide" data-blurred="">
                        <div class="col-md-6 image">
                            <img src="../images/2a.jpg" alt="Slider 1" />
                        </div>
                        <div class="col-md-6 content">
                            <h3>Shared <span>Hosting</span></h3>
                            <p>Aliquam at efficitur odio, et commodo odio. Nulla est lectus, tristique sit amet lorem at, porttitor dapibus nisi. Quisque bibendum sem ut ex pharetra sagittis. Vestibulum eu sapien non purus interdum tempus. Aenean varius elit sit amet lorem ultrices, at iaculis velit sodales. </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <a href="#" class="is-prev">&laquo;</a>
                    <a href="#" class="is-next">&raquo;</a>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready( function() {
                    $("#immersive_slider").immersive_slider({
                        container: ".main"
                    });
                });
            </script>
            <!-- //banner -->
            <div class="domain">
                <div class="container">
                    <form class="search-form domain-search" action="#" method="post">
                        <div class="two-fifth column first">
                            <h2>search your <span>domain</span></h2>
                        </div>
                        <div class="three-fifth column first">
                            <input type="text" class="text" name="Name" placeholder="Enter your domain name" required="">
                        </div>
                        <div class="one-fifth column">
					<span class="selection-box">
						<select class="domains valid" name="domains">
							<option>Year (0-1 Year)</option>
							<option>Year (0-2 Year)</option>
							<option>Year (0-4 Year)</option>
							<option>Year (0-8 Year)</option>
						</select>
					</span>
                        </div>
                        <div class="one-fifth column">
					<span class="selection-box">
						<select class="domains valid" name="domains">
							<option>.com</option>
							<option>.info</option>
							<option>.net</option>
							<option>.org</option>
						</select>
					</span>
                        </div>
                        <div class="one-fifth column">
                            <input type="submit" value="Search">
                        </div>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
            <!-- banner-bottom -->
            <div class="banner-bottom">
                <div class="container">
                    <div class="w3-banner-bottom-heading">
                        <h3>What <span>We Do?</span></h3>
                    </div>
                    <div class="agileits-banner-bottom">
                        <div class="col-md-3 agileits-banner-bottom-grid">
                            <div class="services-grid1">
                                <div class="services-grid-right agile-services-grid-right">
                                    <div class="services-grid-right-grid hvr-radial-out blue-grid">
                                        <span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="services-grid-left agile-services-grid-left">
                                    <h4>repreh qui in ea voluptate</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente
                                        delectus, ut aut reiciendis voluptatibus maiores alias</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 agileits-banner-bottom-grid">
                            <div class="services-grid1">
                                <div class="services-grid-right agile-services-grid-right">
                                    <div class="services-grid-right-grid hvr-radial-out orange-grid">
                                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="services-grid-left agile-services-grid-left">
                                    <h4>repreh qui in ea voluptate</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente
                                        delectus, ut aut reiciendis voluptatibus maiores alias</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 agileits-banner-bottom-grid">
                            <div class="services-grid1">
                                <div class="services-grid-right agile-services-grid-right">
                                    <div class="services-grid-right-grid hvr-radial-out green-grid">
                                        <span class="glyphicon glyphicon-magnet" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="services-grid-left agile-services-grid-left">
                                    <h4>repreh qui in ea voluptate</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente
                                        delectus, ut aut reiciendis voluptatibus maiores alias</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 agileits-banner-bottom-grid">
                            <div class="services-grid1">
                                <div class="services-grid-right agile-services-grid-right">
                                    <div class="services-grid-right-grid hvr-radial-out red-grid">
                                        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="services-grid-left agile-services-grid-left">
                                    <h4>repreh qui in ea voluptate</h4>
                                    <p>Itaque earum rerum hic tenetur a sapiente
                                        delectus, ut aut reiciendis voluptatibus maiores alias</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!-- //banner-bottom -->
            <!-- special -->
            <div class="special">
                <div class="container">
                    <div class="w3-banner-bottom-heading">
                        <h3>Special Introductory <span>Offers</span></h3>
                    </div>
                    <div class="wthree-special-grid">
                        <div class="flipster">
                            <ul>
                                <li>
                                    <div class="pricing">
                                        <div class="pricing-top green-top">
                                            <h3>Business</h3>
                                            <p>$50/month</p>
                                        </div>
                                        <div class="pricing-bottom">
                                            <div class="pricing-bottom-top">
                                                <p>1 Website</p>
                                                <p>1 Year Updates</p>
                                                <p>1 Year Email Support</p>
                                            </div>
                                            <div class="pricing-bottom-bottom">
                                                <p><span>Unlimited</span> Email Addresses</p>
                                                <p><span>65GB </span> of Storage</p>
                                                <p><span>75</span> Databases</p>
                                                <p><span>25</span> Domains</p>
                                                <p class="text"><span>24/7</span> Unlimited Support</p>
                                            </div>
                                            <div class="buy-button">
                                                <a href="plans.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pricing">
                                        <div class="pricing-top blue-top">
                                            <h3>Corporate</h3>
                                            <p>$70/month</p>
                                        </div>
                                        <div class="pricing-bottom">
                                            <div class="pricing-bottom-top">
                                                <p>1 Website</p>
                                                <p>1 Year Updates</p>
                                                <p>1 Year Email Support</p>
                                            </div>
                                            <div class="pricing-bottom-bottom">
                                                <p><span>Unlimited</span> Email Addresses</p>
                                                <p><span>85GB </span> of Storage</p>
                                                <p><span>65</span> Databases</p>
                                                <p><span>30</span> Domains</p>
                                                <p class="text"><span>24/7</span> Unlimited Support</p>
                                            </div>
                                            <div class="buy-button">
                                                <a href="plans.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pricing">
                                        <div class="pricing-top">
                                            <h3>Personal</h3>
                                            <p>$35/month</p>
                                        </div>
                                        <div class="pricing-bottom">
                                            <div class="pricing-bottom-top">
                                                <p>1 Website</p>
                                                <p>1 Year Updates</p>
                                                <p>1 Year Email Support</p>
                                            </div>
                                            <div class="pricing-bottom-bottom">
                                                <p><span>Unlimited</span> Email Addresses</p>
                                                <p><span>50GB </span> of Storage</p>
                                                <p><span>55</span> Databases</p>
                                                <p><span>21</span> Domains</p>
                                                <p class="text"><span>24/7</span> Unlimited Support</p>
                                            </div>
                                            <div class="buy-button">
                                                <a href="plans.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pricing">
                                        <div class="pricing-top green-top">
                                            <h3>Business</h3>
                                            <p>$50/month</p>
                                        </div>
                                        <div class="pricing-bottom">
                                            <div class="pricing-bottom-top">
                                                <p>1 Website</p>
                                                <p>1 Year Updates</p>
                                                <p>1 Year Email Support</p>
                                            </div>
                                            <div class="pricing-bottom-bottom">
                                                <p><span>Unlimited</span> Email Addresses</p>
                                                <p><span>65GB </span> of Storage</p>
                                                <p><span>75</span> Databases</p>
                                                <p><span>25</span> Domains</p>
                                                <p class="text"><span>24/7</span> Unlimited Support</p>
                                            </div>
                                            <div class="buy-button">
                                                <a href="plans.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="pricing">
                                        <div class="pricing-top">
                                            <h3>Personal</h3>
                                            <p>$35/month</p>
                                        </div>
                                        <div class="pricing-bottom">
                                            <div class="pricing-bottom-top">
                                                <p>1 Website</p>
                                                <p>1 Year Updates</p>
                                                <p>1 Year Email Support</p>
                                            </div>
                                            <div class="pricing-bottom-bottom">
                                                <p><span>Unlimited</span> Email Addresses</p>
                                                <p><span>50GB </span> of Storage</p>
                                                <p><span>55</span> Databases</p>
                                                <p><span>21</span> Domains</p>
                                                <p class="text"><span>24/7</span> Unlimited Support</p>
                                            </div>
                                            <div class="buy-button">
                                                <a href="plans.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //special -->
            <!-- choose -->
            <div class="choose jarallax">
                <div class="w3-agile-testimonial">
                    <div class="container">
                        <div class="w3-agileits-choose">
                            <div class="col-md-6 choose-grid">
                                <div class="w3-banner-bottom-heading choose-heading">
                                    <h3>Why Choose<span> Us?</span></h3>
                                </div>
                                <div class="top-choose-info">
                                    <div class="choose-info-top">
                                        <div class="choose-left-grid col-sm-6">
                                            <div class="choose-info-grid ">
                                                <ul>
                                                    <li><i class="fa fa-bell" aria-hidden="true"></i></li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="choose-right-grid col-sm-6">
                                            <div class="choose-info-grid ">
                                                <ul>
                                                    <li><i class="fa fa-cog" aria-hidden="true"></i></li>
                                                    <li>Nulla dictum</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="choose-info-top">
                                        <div class="choose-left-grid col-sm-6">
                                            <div class="choose-info-grid ">
                                                <ul>
                                                    <li><i class="fa fa-comments" aria-hidden="true"></i></li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="choose-right-grid col-sm-6">
                                            <div class="choose-info-grid ">
                                                <ul>
                                                    <li><i class="fa fa-user" aria-hidden="true"></i></li>
                                                    <li>Nulla dictum</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="choose-info-top">
                                        <div class="choose-left-grid col-sm-6">
                                            <div class="choose-info-grid ">
                                                <ul>
                                                    <li><i class="fa fa-money" aria-hidden="true"></i></li>
                                                    <li>Lorem ipsum</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="choose-right-grid col-sm-6">
                                            <div class="choose-info-grid ">
                                                <ul>
                                                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></li>
                                                    <li>Nulla dictum</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 choose-grid">
                                <div class="w3-banner-bottom-heading choose-heading">
                                    <h3>What People<span> say's?</span></h3>
                                </div>
                                <div class="top-choose-info testimonial-info">
                                    <div class="wthree-testimonial-grid">
                                        <div class="slider">
                                            <div class="callbacks_container">
                                                <ul class="rslides" id="slider3">
                                                    <li>
                                                        <div class="testimonial-top">
                                                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                                            <p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed luctus orci, at lacinia risus. Ut porttitor ante ac tincidunt elementum. Curabitur ex dolor, condimentum vitae nunc vel, pulvinar semper justo. Vestibulum et aliquet magna, maximus dapibus enim.</p>
                                                            <h5>John Smith <span>- Customer</span></h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="testimonial-top">
                                                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                                                            <p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.Donec sed </p>
                                                            <h5>Divide Rule <span>- Customer</span></h5>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <script>
                                                // You can also use "$(window).load(function() {"
                                                $(function () {
                                                    // Slideshow 4
                                                    $("#slider3").responsiveSlides({
                                                        auto: true,
                                                        pager:true,
                                                        nav:false,
                                                        speed: 500,
                                                        namespace: "callbacks",
                                                        before: function () {
                                                            $('.events').append("<li>before event fired.</li>");
                                                        },
                                                        after: function () {
                                                            $('.events').append("<li>after event fired.</li>");
                                                        }
                                                    });

                                                });
                                            </script>
                                            <!--banner Slider starts Here-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //choose -->
            <!-- subscribe -->
            <div class="subscribe">
                <div class="container">
                    <div class="w3-banner-bottom-heading">
                        <h3>Subscribe<span> with Us</span></h3>
                    </div>
                    <div class="w3-agile-subscribe-form">
                        <form action="#" method="post">
                            <input type="text" placeholder="Email" name="Email" required="">
                            <button class="btn1">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //subscribe -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

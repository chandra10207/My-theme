<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Csp_Hosting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'csp-hosting' ); ?></a>

    <header>
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="w3layouts-address">
                    <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +11 222 333 4444</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com"> mail@example.com</a></li>
                    </ul>
                </div>
                <div class="agileinfo-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header-top -->

        <!-- header -->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="w3layouts-logo">
                            <h1><a href="index.html">Hosting <span>City</span></a></h1>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="about.html" class="hvr-sweep-to-bottom">About</a></li>
                                <li><a href="plans.html" class="hvr-sweep-to-bottom">Plans</a></li>
                                <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="hvr-sweep-to-bottom" href="services.html">Services</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="faq.html">FAQs</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="login.html">Login</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="registration.html">Registration</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="icons.html">Icons</a></li>
                                        <li><a class="hvr-sweep-to-bottom" href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html" class="hvr-sweep-to-bottom">Blog</a></li>
                                <li><a href="mail.html" class="hvr-sweep-to-bottom">Mail Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
        <!-- //header -->



    </header>

	<div id="content" class="site-content">

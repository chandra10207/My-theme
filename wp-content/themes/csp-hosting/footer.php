<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Csp_Hosting
 */

?>

	</div><!-- #content -->


<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agile-footer-grids">
            <div class="col-md-4 agile-footer-grid">
                <h4>History of <span>Hosting</span></h4>
                <p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. <span>Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.</span></p>
            </div>
            <div class="col-md-4 agile-footer-grid">
                <h4>Twitter <span>Posts</span></h4>
                <ul class="w3agile_footer_grid_list">
                    <li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
                        <span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
                    <li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://example.com</a> ut aut
                        voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
                </ul>
            </div>
            <div class="col-md-4 agile-footer-grid">
                <h4>Popular <span>Posts</span></h4>
                <div class="popular-grids">
                    <div class="popular-grid">
                        <a href="#"><img src="<?php echo get_template_directory_uri().'/images/6.jpg'; ?>" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/7.jpg" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/8.jpg" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/9.jpg" alt=""></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="popular-grids agileits-w3layouts-popular">
                    <div class="popular-grid">
                        <a href="#"><img src="../images/10.jpg" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/4.jpg" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/6.jpg" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/7.jpg" alt=""></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="popular-grids">
                    <div class="popular-grid">
                        <a href="#"><img src="../images/8.jpg" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/9.jpg" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/10.jpg" alt=""></a>
                    </div>
                    <div class="popular-grid">
                        <a href="#"><img src="../images/4.jpg" alt=""></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="copyright">
        <p>© 2016 Hosting City. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>
<!-- //footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>

<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- pricing -->
<script>
    <!--

    $(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });

    -->
</script>
<!-- //pricing -->





</body>
</html>

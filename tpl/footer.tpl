<!-- footer -->
<div class="footer-cpy text-center">
    <!--<div class="social_banner">
            <ul class="social_list">
                    <li>
                            <a href="#" class="facebook">
                                    <span class="fa fa-facebook" aria-hidden="true"></span>
                            </a>
                    </li>
                    <li>
                            <a href="#" class="twitter">
                                    <span class="fa fa-twitter" aria-hidden="true"></span>
                            </a>
                    </li>
                    <li>
                            <a href="#" class="dribble">
                                    <span class="fa fa-dribbble" aria-hidden="true"></span>
                            </a>
                    </li>
                    <li>
                            <a href="#" class="vimeo">
                                    <span class="fa fa-vimeo" aria-hidden="true"></span>
                            </a>
                    </li>
            </ul>
    </div>-->
    <div class="footer-copy">
        <p>* Prix minimum, le prix peut être supérieur à celui indiqué</p>
        <p>© 2018 Domaine Les Raynals. Tous droits réservés.
        </p>
    </div>
</div>
<!--//footer-->
<!-- js -->
<script src="./web/js/jquery-2.2.3.min.js"></script>
<script src="./node_modules/moment/moment.js"></script>
<!-- //js -->
<!-- gallery light box -->
<script src="./web/js/lightbox-plus-jquery.min.js"></script>
<script src="./web/js/jquery-1.12.4.js"></script>
<script src="./web/js/jquery-ui.js"></script>
<link rel="stylesheet" href="./web/css/jquery-ui.css">
<!--<link rel="stylesheet" href="./resources/demos/style.css">-->
<!-- testimonials-->
<script src="./web/js/owl.carousel.js"></script>
<link href="./web/css/owl.carousel.css" rel="stylesheet">
<!-- requried-jsfiles-for owl -->
<script>
    $(document).ready(() => {
        $("#owl-demo2").owlCarousel({
            items: 1,
            lazyLoad: false,
            autoPlay: true,
            navigation: false,
            navigationText: false,
            pagination: true,
        });
    });
</script>
<!-- //requried-jsfiles-for owl -->
<!-- start-smooth-scrolling -->
<script src="./web/js/move-top.js"></script>
<script src="./web/js/easing.js"></script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(() => {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="./web/js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./web/js/bootstrap.js"></script>
</body>
</html>
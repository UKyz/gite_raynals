<?php /* Smarty version Smarty-3.1.12, created on 2018-07-13 10:59:19
         compiled from "/Users/victorfauquembergue/Sites/gite_projet/tpl/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8870759975b4869e7b7aa29-90815624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd37ef4cd3a7abce2d2a8864ce6a1046b25c110c0' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/gite_projet/tpl/footer.tpl',
      1 => 1531406157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8870759975b4869e7b7aa29-90815624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b4869e7c20bc7_65538202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4869e7c20bc7_65538202')) {function content_5b4869e7c20bc7_65538202($_smarty_tpl) {?><!-- footer -->
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
<!-- link menu scroll -->
<script>
    $(function () {
        $("#btn_reserver1").click(() => {
            $("#reservation").show();
            $('html, body').animate({
                scrollTop: $('#reservation').offset().top
            }, 'slow');
        });

        $("#btn_reserver2").click(() => {
            $("#reservation").show();
            $('html, body').animate({
                scrollTop: $('#reservation').offset().top
            }, 'slow');
        });

        $("#btn_reserver3").click(() => {
            $("#reservation").show();
            $('html, body').animate({
                scrollTop: $('#reservation').offset().top
            }, 'slow');
        });

        $("#btn_reserver_close").click(() => {
            $("#reservation").hide();
            $('html, body').animate({
                scrollTop: $('#prix').offset().top
            }, 'slow');
        });
    });
</script>
<!-- //link menu scroll -->

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
<!-- //testimonials -->

<!-- start-smooth-scrolling -->
<script src="./web/js/move-top.js"></script>
<script src="./web/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
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
</html><?php }} ?>
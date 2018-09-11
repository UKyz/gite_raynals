<?php /* Smarty version Smarty-3.1.12, created on 2018-08-31 15:04:54
         compiled from "/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3033981425b51e37cf405b3-02938543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '563fbe29b65aa897f94849302a4efd9e0496f232' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/footer.tpl',
      1 => 1535720693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3033981425b51e37cf405b3-02938543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b51e37d005606_09077557',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b51e37d005606_09077557')) {function content_5b51e37d005606_09077557($_smarty_tpl) {?><!-- footer -->
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
</html><?php }} ?>
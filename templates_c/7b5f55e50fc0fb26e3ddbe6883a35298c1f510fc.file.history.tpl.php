<?php /* Smarty version Smarty-3.1.12, created on 2018-08-31 16:01:44
         compiled from "/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/pages/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20241222315b87b357043f05-81422637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b5f55e50fc0fb26e3ddbe6883a35298c1f510fc' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/pages/history.tpl',
      1 => 1535724101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20241222315b87b357043f05-81422637',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b87b3570cf103_98038355',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b87b3570cf103_98038355')) {function content_5b87b3570cf103_98038355($_smarty_tpl) {?><script>
    document.getElementById("header_photo").style.backgroundImage =
        'url("./web/images/domaine/DSC_8891.JPG")';
    document.getElementById("fieldset_header").style.border = '0';
    document.getElementById("legend_header").style.border = '0';
    $(function() {
        $("#banner-sub-txt").text("");
    });
</script>

<div class="agile-section">
    <div class="container">
        <h3 class="text-center agileits-title">La vie du domaine</h3>
        <h4 class="text-center">Découvrez l'histoire du gîte</h4>

        <p>Nous avons acquis le domaine au milieu de l’année 2016 après que sa visite nous ait provoqué un véritable
            coup de cœur. Son ambiance et les « bonnes ondes » que nous y avons immédiatement ressenties nous ont
            immédiatement et durablement séduites.
            <br />
            Dans les années 2000, le Domaine Les Raynals était « la ferme des Raynals » : une ferme pédagogique qui
            proposait aux enfants, pour leur plus grand bonheur, la proximité des animaux de la ferme. Puis il fut
            de nouveau privatisé et exploité à des fins d’élevage d’animaux pendant environ 5 années avant que nous
            en fassions l’acquisition. Depuis, nous avons entrepris une remise en état globale du domaine afin d’en
            faire un agréable lieu de villégiature. Petit à petit, nous rénovons maisons et jardins afin d’en faire
            un endroit ouvert à la location et en amélioration constante.
        </p>
        <br />
        <p>Vous avez des informations ou des anecdotes sur l’histoire du domaine ? Vous avez autrefois visité la
            ferme pédagogique et vous disposez de photos que vous accepteriez de partager ? Aidez-nous à
            reconstituer l’histoire de ce lieu en nous envoyant vos précieuses informations.
        </p>
    </div>
    <div class="w3ls-contact agile-section" id="contact">
        <div class="container">
            <div class="contact-right-w3l">
                <div class="col-md-12 contact-right">
                    <h4>Appel à temoin</h4>
                    <form action="index.php?action=history" method="post" enctype="multipart/form-data">
                        <input type="text" class="name" name="name" placeholder="Nom" required="">
                        <input type="text" class="name" name="name_2" placeholder="Prénom" required="">
                        <input type="email" class="name" name="email" placeholder="Email" required="">
                        <input type="text" class="name" name="subject" placeholder="Sujet" required="">
                        <label style="text-align:center;">Vous pouvez ajouter des pièces-jointes (1Mo max):</label>
                        <div style="display: flex;justify-content: space-around; margin-top: 10px;">
                            <input type="file" class="file_form" name="piece_jointe_1" />
                            <input type="file" class="file_form" name="piece_jointe_2" />
                            <input type="file" class="file_form" name="piece_jointe_3" />
                        </div>
                        <textarea style="margin-bottom: 30px;margin-top: 30px;" placeholder="Votre Message"
                                  name="comment" required=""></textarea>
                        <div class="g-recaptcha" data-sitekey="6LerpmsUAAAAABhWoo26EUZdKAYsuRl5YeIXe2eR"
                             data-callback="recaptchaCallback"></div>
                        <input type="submit" value="ENVOYER" id="btn_contact" disabled>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function recaptchaCallback() {
        document.getElementById('btn_contact').disabled = false;
    }
</script><?php }} ?>
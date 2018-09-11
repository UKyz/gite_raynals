<?php /* Smarty version Smarty-3.1.12, created on 2018-08-24 14:34:26
         compiled from "/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/modal/refuse_captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20470718755b7ffb52f317f2-70903060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1c4ddc6bffc640844d0328ff8afd700165aeb4' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/modal/refuse_captcha.tpl',
      1 => 1535114065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20470718755b7ffb52f317f2-70903060',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b7ffb53230327_66104824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7ffb53230327_66104824')) {function content_5b7ffb53230327_66104824($_smarty_tpl) {?><div id="myModal2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header2">
            <span class="close" id="close2">&times;</span>
            <h2>Erreur</h2>
        </div>
        <div class="modal-body">
            <p>Une erreur est survenu</p>
            <p>Vérifiez que toutes les informations ont été saisies et recommencez. Si le problème perssiste veuillez
            nous contacter.
            </p>
        </div>
    </div>
</div>

<script>
    const modal2 = document.getElementById('myModal2');
    const span2 = document.getElementsByClassName("close")[0];

    span2.onclick = () => {
        modal2.style.display = "none";
    };

    window.onclick = (event) => {
        if (event.target === modal2) {
            modal2.style.display = "none";
        }
    };
</script>

<script>document.getElementById('myModal2').style.display = "block";</script><?php }} ?>
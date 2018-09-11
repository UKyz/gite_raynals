<?php /* Smarty version Smarty-3.1.12, created on 2018-07-13 16:06:26
         compiled from "/Users/victorfauquembergue/Sites/gite_raynals/tpl/modal/refuse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18423955165b48b07201c4a1-15785621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5030a7012be52230731366f1f4e9b96462de63c3' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/gite_raynals/tpl/modal/refuse.tpl',
      1 => 1531490689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18423955165b48b07201c4a1-15785621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b48b072081937_75665943',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b48b072081937_75665943')) {function content_5b48b072081937_75665943($_smarty_tpl) {?><div id="myModal2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header2">
            <span class="close" id="close2">&times;</span>
            <h2>Votre réservation a été refusée</h2>
        </div>
        <div class="modal-body">
            <p>La dates que vous avez choisie ne sont pas disponible</p>
            <p>Veuillez recommencer et vérifier que vos dates ne sont pas déjà réservées et qu'elles sont
                réservables</p>
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
<?php /* Smarty version Smarty-3.1.12, created on 2018-07-13 15:57:55
         compiled from "/Users/victorfauquembergue/Sites/gite_raynals/tpl/modal/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20244650285b48a97a547ac8-98928711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ba66441e3b8d408c00f4c7ddd7bbb46eb353f39' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/gite_raynals/tpl/modal/confirmation.tpl',
      1 => 1531489653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20244650285b48a97a547ac8-98928711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b48a97aa3af15_82070970',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b48a97aa3af15_82070970')) {function content_5b48a97aa3af15_82070970($_smarty_tpl) {?><div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Votre réservation a bien été envoyé</h2>
        </div>
        <div class="modal-body">
            <p>Un mail vous a été envoyé afin de récapituler votre demande de réservation.</p>
            <p>Pour plus d'information n'hésitez pas à nous joindre par téléphone.</p>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('myModal');
    const span = document.getElementsByClassName("close")[0];

    span.onclick = () => {
        modal.style.display = "none";
    };

    window.onclick = (event) => {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
</script>

<script>document.getElementById('myModal').style.display = "block";</script><?php }} ?>
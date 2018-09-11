<?php /* Smarty version Smarty-3.1.12, created on 2018-08-02 09:21:22
         compiled from "/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/modal/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15773979015b62b0f21c0fb1-59641065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab9e4df09efb07a2afc8f1f6ddf86bc426622d5d' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/modal/confirmation.tpl',
      1 => 1531489653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15773979015b62b0f21c0fb1-59641065',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b62b0f24cfbf0_13527529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b62b0f24cfbf0_13527529')) {function content_5b62b0f24cfbf0_13527529($_smarty_tpl) {?><div id="myModal" class="modal">
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
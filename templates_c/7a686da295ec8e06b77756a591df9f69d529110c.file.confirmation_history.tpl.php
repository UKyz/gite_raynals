<?php /* Smarty version Smarty-3.1.12, created on 2018-08-31 10:48:43
         compiled from "/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/modal/confirmation_history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14359981895b8900ebaec370-99360864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a686da295ec8e06b77756a591df9f69d529110c' => 
    array (
      0 => '/Users/victorfauquembergue/Sites/gite_raynals_front/tpl/modal/confirmation_history.tpl',
      1 => 1535702673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14359981895b8900ebaec370-99360864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5b8900ebb52b08_51680479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b8900ebb52b08_51680479')) {function content_5b8900ebb52b08_51680479($_smarty_tpl) {?><div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Votre message a bien été envoyé</h2>
        </div>
        <div class="modal-body">
            <p>Un mail est envoyé à l'hôte incluant votre message.</p>
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
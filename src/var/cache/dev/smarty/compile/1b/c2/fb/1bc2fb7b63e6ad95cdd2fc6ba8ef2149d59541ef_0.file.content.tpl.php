<?php
/* Smarty version 3.1.33, created on 2019-04-11 18:28:20
  from '/var/www/html/admin463awwqza/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caf40f4ed26d0_18912265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bc2fb7b63e6ad95cdd2fc6ba8ef2149d59541ef' => 
    array (
      0 => '/var/www/html/admin463awwqza/themes/default/template/content.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caf40f4ed26d0_18912265 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}

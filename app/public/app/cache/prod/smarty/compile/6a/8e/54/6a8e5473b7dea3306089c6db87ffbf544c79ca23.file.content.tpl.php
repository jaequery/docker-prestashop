<?php /* Smarty version Smarty-3.1.19, created on 2017-05-11 18:03:11
         compiled from "/var/app/public/admin940r7an5n/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16143410155914df9f786db4-59735433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8e5473b7dea3306089c6db87ffbf544c79ca23' => 
    array (
      0 => '/var/app/public/admin940r7an5n/themes/default/template/content.tpl',
      1 => 1492585692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16143410155914df9f786db4-59735433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5914df9f78d129_66049272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5914df9f78d129_66049272')) {function content_5914df9f78d129_66049272($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>

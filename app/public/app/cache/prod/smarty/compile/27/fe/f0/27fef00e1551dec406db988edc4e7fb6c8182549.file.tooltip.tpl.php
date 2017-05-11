<?php /* Smarty version Smarty-3.1.19, created on 2017-05-11 18:03:11
         compiled from "/var/app/public/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3659188445914df9fb15da3-21318436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27fef00e1551dec406db988edc4e7fb6c8182549' => 
    array (
      0 => '/var/app/public/modules/welcome/views/templates/tooltip.tpl',
      1 => 1492585822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3659188445914df9fb15da3-21318436',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5914df9fb2c443_46568645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5914df9fb2c443_46568645')) {function content_5914df9fb2c443_46568645($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>

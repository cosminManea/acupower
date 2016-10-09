<?php /* Smarty version Smarty-3.1.19, created on 2016-10-09 13:30:37
         compiled from "/var/www/acupower.plm/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187333689957fa467da57c17-41636793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '447953874e7f37192e2f2ccfdf924ee96f79b016' => 
    array (
      0 => '/var/www/acupower.plm/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1473163512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187333689957fa467da57c17-41636793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57fa467da59704_54607077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fa467da59704_54607077')) {function content_57fa467da59704_54607077($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>

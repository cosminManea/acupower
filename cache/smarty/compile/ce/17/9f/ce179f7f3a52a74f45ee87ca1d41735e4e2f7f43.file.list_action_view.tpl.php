<?php /* Smarty version Smarty-3.1.19, created on 2016-10-09 13:30:37
         compiled from "/var/www/acupower.plm/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63472438257fa467da41f75-19898212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce179f7f3a52a74f45ee87ca1d41735e4e2f7f43' => 
    array (
      0 => '/var/www/acupower.plm/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1473163512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63472438257fa467da41f75-19898212',
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
  'unifunc' => 'content_57fa467da44585_22414143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fa467da44585_22414143')) {function content_57fa467da44585_22414143($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-10-09 22:59:59
         compiled from "/var/www/acupower.plm/admin002pyovio/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5682465557faa1bf379100-29523491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9794478f984b0c1471e1f399618f48876e2aa096' => 
    array (
      0 => '/var/www/acupower.plm/admin002pyovio/themes/default/template/content.tpl',
      1 => 1473163512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5682465557faa1bf379100-29523491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57faa1bf37b704_80784590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57faa1bf37b704_80784590')) {function content_57faa1bf37b704_80784590($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

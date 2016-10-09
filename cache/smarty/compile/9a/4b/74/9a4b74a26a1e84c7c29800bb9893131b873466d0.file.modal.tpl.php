<?php /* Smarty version Smarty-3.1.19, created on 2016-10-09 13:30:37
         compiled from "/var/www/acupower.plm/admin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145160602057fa467d59fc88-54895873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a4b74a26a1e84c7c29800bb9893131b873466d0' => 
    array (
      0 => '/var/www/acupower.plm/admin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1473163512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145160602057fa467d59fc88-54895873',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57fa467d5a05f4_23435137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fa467d5a05f4_23435137')) {function content_57fa467d5a05f4_23435137($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>

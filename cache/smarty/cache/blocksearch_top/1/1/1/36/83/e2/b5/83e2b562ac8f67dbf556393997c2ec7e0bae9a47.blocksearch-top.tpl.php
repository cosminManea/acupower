<?php /*%%SmartyHeaderCode:155433515457fa471e4a1e69-95319316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e2b562ac8f67dbf556393997c2ec7e0bae9a47' => 
    array (
      0 => '/var/www/acupower.plm/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1473163514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155433515457fa471e4a1e69-95319316',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57fa471e4a8992_48966493',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fa471e4a8992_48966493')) {function content_57fa471e4a8992_48966493($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//acupower.plm/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>

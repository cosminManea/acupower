<?php /*%%SmartyHeaderCode:148874975557fa471e9a5e33-94023838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '489b5f235cda2be37059f39ad60b5890787d5f1a' => 
    array (
      0 => '/var/www/acupower.plm/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1473163514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148874975557fa471e9a5e33-94023838',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'footer_text' => 0,
    'display_poweredby' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57fa471e9d1429_31634649',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fa471e9d1429_31634649')) {function content_57fa471e9d1429_31634649($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Information</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="http://acupower.plm/index.php?controller=prices-drop" title="Specials">
						Specials
					</a>
				</li>
									<li class="item">
				<a href="http://acupower.plm/index.php?controller=new-products" title="New products">
					New products
				</a>
			</li>
										<li class="item">
					<a href="http://acupower.plm/index.php?controller=best-sales" title="Best sellers">
						Best sellers
					</a>
				</li>
										<li class="item">
					<a href="http://acupower.plm/index.php?controller=stores" title="Our stores">
						Our stores
					</a>
				</li>
									<li class="item">
				<a href="http://acupower.plm/index.php?controller=contact" title="Contact us">
					Contact us
				</a>
			</li>
															<li class="item">
						<a href="http://acupower.plm/index.php?id_cms=3&amp;controller=cms&amp;id_lang=1" title="Terms and conditions of use">
							Terms and conditions of use
						</a>
					</li>
																<li class="item">
						<a href="http://acupower.plm/index.php?id_cms=4&amp;controller=cms&amp;id_lang=1" title="About us">
							About us
						</a>
					</li>
													<li>
				<a href="http://acupower.plm/index.php?controller=sitemap" title="Sitemap">
					Sitemap
				</a>
			</li>
					</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>

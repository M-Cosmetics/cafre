<?
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
	IncludeTemplateLangFile(__FILE__);
	$curPage = $APPLICATION->GetCurPage();
	global $APPLICATION, $TEMPLATE_OPTIONS, $arSite, $USER,$site_o_template;
	$site_o_template='/bitrix/templates/aspro_mshop';

	$arSite = CSite::GetByID(SITE_ID)->Fetch();	
?>
<!DOCTYPE html>
<html lang="ru" itemscope itemtype="https://schema.org/WebPage" amp>
<head>
	<link rel="canonical" href="<?=$curPage?>">
	<meta charset="utf-8">
	
	
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<title itemprop="name"><?$APPLICATION->ShowTitle()?></title>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	</head>
<body>
<h1><?=(strpos($APPLICATION->GetCurPage(), '/catalog/')===false)?$APPLICATION->ShowTitle(true):$APPLICATION->ShowViewContent('h1');?></h1>





<?/*

	<?
	if(!(strpos($curPage, '/catalog/')===false) && $curPage!='/catalog/') {		
		if(count($_GET)==1 && isset($_GET['_escaped_fragment_']) && $_GET['_escaped_fragment_']=='') {
			
		} 
		elseif($curPage!=$_SERVER['REQUEST_URI'] ){		
			echo '<meta name="robots" content="noindex"/>'; 
		}
		else {
			echo '<meta name="fragment" content="!">';
		}
	}
    elseif($curPage!=$_SERVER['REQUEST_URI']) {		
		//echo '<link rel="canonical" href="https://'.$_SERVER['HTTP_HOST'].$curPage.'">'; 
	}   
	?>
	<?$APPLICATION->ShowHead();?>
	<?$APPLICATION->AddHeadScript();?>
	<?if(CModule::IncludeModule("aspro.mshop")) {CMShop::Start(SITE_ID);}?>
	
	
	<link rel="stylesheet" href="<?=$site_o_template?>/js/photo3d-html-files/v3/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?=$site_o_template?>/css/lets_bas.css?v=2" type="text/css">


	<script type="text/javascript" data-skip-moving="true">
	window.dataLayer = window.dataLayer || [];
</script>
<!-- Google Tag Manager -->
<script data-skip-moving="true">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KZXSS9');</script>
<!-- End Google Tag Manager -->
<!--Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77132925-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-77132925-2');
</script>
<!-- CarrotQuest BEGIN -->
<script type="text/javascript">
    (function(){
      function Build(name, args){return function(){window.carrotquestasync.push(name, arguments);} }
      if (typeof carrotquest === 'undefined') {
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
        s.src = '//cdn.carrotquest.io/api.min.js';
        var x = document.getElementsByTagName('head')[0]; x.appendChild(s);
        window.carrotquest = {}; window.carrotquestasync = []; carrotquest.settings = {};
        var m = ['connect', 'track', 'identify', 'auth', 'open', 'onReady', 'addCallback', 'removeCallback', 'trackMessageInteraction'];
        for (var i = 0; i < m.length; i++) carrotquest[m[i]] = Build(m[i]);
      }
    })();
  carrotquest.connect('13181-68385f12e483ac8405da2f239e');
</script>
<!-- CarrotQuest END charset="UTF-8"-->
<script src="//cdn.sendpulse.com/9dae6d62c816560a842268bde2cd317d/js/push/ec14c57e30305057d4ce91fda0aacb93_1.js" ></script>
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-226610-9YY7s';</script>
</head>
<body id="main">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZXSS9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	
	<?if(!CModule::IncludeModule("aspro.mshop")){?>
		<center><?$APPLICATION->IncludeFile(SITE_DIR."include/error_include_module.php");?></center>
		
		</body>
		</html>
		<?die();?>
	<?}?>

	<?$APPLICATION->IncludeComponent("aspro:theme.mshop", ".default", array("COMPONENT_TEMPLATE" => ".default"), false);?>
	<?CMShop::SetJSOptions();?>
	<?$isFrontPage = CSite::InDir(SITE_DIR.'index.php');?>
	<?$isContactsPage = CSite::InDir(SITE_DIR.'contacts/');?>
	<?$isBasketPage=CSite::InDir(SITE_DIR.'basket/');?>

	<div class="wrapper <?=($TEMPLATE_OPTIONS["HEAD"]["CURRENT_MENU_COLOR"] != "none" ? "has_menu" : "");?> h_color_<?=$TEMPLATE_OPTIONS["HEAD"]["CURRENT_HEAD_COLOR"];?> m_color_<?=$TEMPLATE_OPTIONS["HEAD"]["CURRENT_MENU_COLOR"];?> <?=($isFrontPage ? "front_page" : "");?> basket_<?=strToLower($TEMPLATE_OPTIONS["BASKET"]["CURRENT_VALUE"]);?> head_<?=strToLower($TEMPLATE_OPTIONS["HEAD"]["CURRENT_VALUE"]);?> banner_<?=strToLower($TEMPLATE_OPTIONS["BANNER_WIDTH"]["CURRENT_VALUE"]);?>">
		<div class="header_wrap <?=strtolower($TEMPLATE_OPTIONS["HEAD_COLOR"]["CURRENT_VALUE"])?>">
			<div class="deliverybanner deliverybanner__header">
				<img src="/bitrix/templates/aspro_mshop/images/banners/cafre_Mail_1920�50.jpg" alt="���������� �������� �� 2000 ���."/>
				<button class="deliverybanner__close"></button>
			</div>
			<div class="top-h-row">
				<div class="wrapper_inner">
					<div class="content_menu">
						<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_content_row", 
	array(
		"ROOT_MENU_TYPE" => $TEMPLATE_OPTIONS["HEAD"]["CURRENT_MENU"],
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "86400",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "top_content_row"
	),
	false
);?>
					</div>

					<div class="phones">
						<span class="phone_wrap">
							<span class="icons"></span>
							<span class="phone_text">
								<?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("PHONE")));?>
							</span>
						</span>
					
						<span class="order_wrap_btn">
							<span class="callback_btn"><?=GetMessage("CALLBACK")?></span>
						</span>
					</div>
				
					<div class="h-user-block" id="personal_block">
						<div class="form_mobile_block">
							<div class="search_middle_block">
								<?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/search.title.catalog3.php');?>
							</div>
						</div>
						
						<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "top", array(
							"REGISTER_URL" => SITE_DIR."auth/registration/",
							"FORGOT_PASSWORD_URL" => SITE_DIR."auth/forgot-password/",
							"PROFILE_URL" => SITE_DIR."personal/",
							"SHOW_ERRORS" => "Y"
							)
						);?>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>

			<header id="header">
				<div class="wrapper_inner">    
					<!--cellspacing="0" cellpadding="0" border="0"-->
					<table class="middle-h-row">
						<tr>
							<td class="mobile-table-cell">
								<div class="mobile-nav">
									<?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/menu.top_general_multilevel.php');?>
								</div>
							</td>

							<td class="logo_wrapp">
								<div class="logo">
									<a href="/">
										<img src="<?=$site_o_template?>/images/cafre-logo.svg" alt="Cafre">
									</a>
							
									<?//CMShop::ShowLogo();?>
									<p>��������-������� ���������������� ��������� c ������� ��������� ��� ����������</p>
								</div>
							</td>
						
							<td  class="center_block">
								<div class="search">
									<?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/search.title.catalog.php');?>
								</div>

								<div class="middle_phone">
									<div class="phones">
										<p>���������������� ������������ �����������-���������</p>
										<span class="phone_wrap">
											<img src="<?=$site_o_template?>/images/online.png" alt="" />
											<!--<span class="icons"></span>-->
											<span class="phone_text">
												<?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php", Array(), Array("MODE" => "html", "NAME" => GetMessage("PHONE")));?>
											</span>
										</span>
										<span class="order_wrap_btn">
											<span class="callback_btn"><?=GetMessage("CALLBACK")?></span>
										</span>
									</div>
								</div>
							</td>
							
							<td class="basket_wrapp">
								<div class="wrapp_all_icons">
									<!--<div class="header-compare-block icon_block iblock" id="compare_line">
										<?//include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/catalog.compare.list.compare_top.php');?>
									</div>-->
									
									<div class="header-cart" id="basket_line">
									
										<?Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("header-cart");?>
										<?//CSaleBasket::UpdateBasketPrices(CSaleBasket::GetBasketUserID(), SITE_ID);?>
										
										<?if($TEMPLATE_OPTIONS["BASKET"]["CURRENT_VALUE"] == "FLY" && !$isBasketPage && !CSite::InDir(SITE_DIR.'order/')):?>
											<script type="text/javascript">
												$(document).ready(function() {
													$.ajax({
														url: arMShopOptions['SITE_DIR'] + 'ajax/basket_fly.php',
														type: 'post',
													
														success: function(html){
															$('#basket_line').append(html);
														}
													});
												});
											</script>
										<?endif;?>
										<div class="new_bas_small">
										<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.small", "top", array(
											"PATH_TO_BASKET" => SITE_DIR."basket/",
											"PATH_TO_ORDER" => SITE_DIR."order/"
											)
										);?>
										</div>
										<?Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("header-cart", "");?>
										
									</div>
								</div>
								
								<div class="clearfix"></div>
							</td>
						</tr>
					</table>
				</div>
				<div class="bbrands">
	<div class="bbrands__wrap wrapper_inner">
		
		<?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/menu.top_brand.php');?>
	</div>
</div>
				<div class="catalog_menu">
					<div class="wrapper_inner">
						<div class="wrapper_middle_menu">
							<?include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/menu.top_catalog_multilevel.php');?>
							<?//include($_SERVER['DOCUMENT_ROOT'].SITE_DIR.'include/menu.top_general_multilevel.php');?>
						</div>
					</div>
				</div>
			</header>
		</div>
		
		<?if(!$isFrontPage):?>
		<?if($APPLICATION->GetCurPage() != '/basket/'):?>
			<div class="wrapper_inner">                
				<section class="middle">
					<div class="container">
						<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "mshop", array(
							"START_FROM" => "0",
							"PATH" => "",
							"SITE_ID" => "-",
							"SHOW_SUBSECTIONS" => "N"
						),
						false
						);?>
						
						<h1><?=(strpos($APPLICATION->GetCurPage(), '/catalog/')===false)?$APPLICATION->ShowTitle(true):$APPLICATION->ShowViewContent('h1');?></h1>
						<?if($isContactsPage):?>
					</div>
				</section>
			</div>
		
		<?else:?>
			<div id="content">
				<?if(CSite::InDir(SITE_DIR.'company/') || CSite::InDir(SITE_DIR.'info/')):?>
					<div class="left_block">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", array(
							"ROOT_MENU_TYPE" => "left",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "172800",
							"MENU_CACHE_USE_GROUPS" => "N",
							"MENU_CACHE_GET_VARS" => "",
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "Y",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N" ),
							false, array( "ACTIVE_COMPONENT" => "Y" )
						);?>
					</div>
					
					<div class="right_block">
				<?endif;?>
		<?endif;?>
		<?else:?>
		<div class="wrapper_inner">                
					<div class="container">
					<div id="content">
						<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "mshop", array(
							"START_FROM" => "0",
							"PATH" => "",
							"SITE_ID" => "-",
							"SHOW_SUBSECTIONS" => "N"
						),
						false
						);?>
						
						<h1><?=(strpos($APPLICATION->GetCurPage(), '/catalog/')===false)?$APPLICATION->ShowTitle(true):$APPLICATION->ShowViewContent('h1');?></h1>
						
		<?endif;?>
		
		
		<?endif;?>
		
		<?if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") $APPLICATION->RestartBuffer();
		
		
		*/?>
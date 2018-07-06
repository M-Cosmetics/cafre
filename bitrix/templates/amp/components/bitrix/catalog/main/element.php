<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<?
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$arParams["ADD_ELEMENT_CHAIN"] = (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : "N");

CModule::IncludeModule("iblock");

if($arResult["VARIABLES"]["ELEMENT_CODE"]=='') $arResult["VARIABLES"]["ELEMENT_CODE"]=$arResult['VARIABLES']['SECTION_CODE_PATH'];



// get current section ID
global $MShopSectionID;
$section = array();
if($arResult["VARIABLES"]["SECTION_ID"] > 0){
	$db_list = CIBlockSection::GetList(array(), array('GLOBAL_ACTIVE' => 'Y', "ID" => $arResult["VARIABLES"]["SECTION_ID"]), true, array("ID", $arParams["SECTION_DISPLAY_PROPERTY"], $arParams["LIST_BROWSER_TITLE"], $arParams["LIST_META_KEYWORDS"], $arParams["LIST_META_DESCRIPTION"], $arParams["SECTION_PREVIEW_PROPERTY"], "IBLOCK_SECTION_ID"));
	$section = $db_list->GetNext();
}
elseif(strlen(trim($arResult["VARIABLES"]["SECTION_CODE"])) > 0){
	$db_list = CIBlockSection::GetList(array(), array('GLOBAL_ACTIVE' => 'Y', "=CODE" => $arResult["VARIABLES"]["SECTION_CODE"]), true, array("ID", $arParams["SECTION_DISPLAY_PROPERTY"], $arParams["LIST_BROWSER_TITLE"], $arParams["LIST_META_KEYWORDS"], $arParams["LIST_META_DESCRIPTION"], $arParams["SECTION_PREVIEW_PROPERTY"], "IBLOCK_SECTION_ID"));
	$section = $db_list->GetNext();
}
if(!$section["ID"]){
	if($arResult["VARIABLES"]["ELEMENT_ID"] > 0){

		$resElement = CIBlockElement::GetList(array(), array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "ID" => $arResult["VARIABLES"]["ELEMENT_ID"]), false, false, array("ID", "IBLOCK_ID", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID"));
		//$arElement = $resElement->Fetch();
		while ($tovar = $resElement->GetNextElement())
		{
			$arElement = $tovar->GetFields(); 
		}
		$APPLICATION->AddHeadString('<link href="https://'.SITE_SERVER_NAME.$arElement['DETAIL_PAGE_URL'].'" rel="canonical" />',true);	
		if($arElement["IBLOCK_SECTION_ID"] && !$section){
			$db_list = CIBlockSection::GetList(array(), array('GLOBAL_ACTIVE' => 'Y', "ID" => $arElement["IBLOCK_SECTION_ID"]), true, array("ID", $arParams["SECTION_DISPLAY_PROPERTY"], $arParams["LIST_BROWSER_TITLE"], $arParams["LIST_META_KEYWORDS"], $arParams["LIST_META_DESCRIPTION"], $arParams["SECTION_PREVIEW_PROPERTY"], "IBLOCK_SECTION_ID"));
			$section = $db_list->GetNext();
		}
	}
	elseif(strlen(trim($arResult["VARIABLES"]["ELEMENT_CODE"])) > 0){
		$resElement = CIBlockElement::GetList(array(), array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "=CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"]), false, false, array("ID","IBLOCK_ID", "DETAIL_PAGE_URL",  "IBLOCK_SECTION_ID"));
		//$arElement = $resElement->Fetch();
		while ($tovar = $resElement->GetNextElement())
		{
			$arElement = $tovar->GetFields(); 
		}
		$APPLICATION->AddHeadString('<link href="https://'.SITE_SERVER_NAME.$arElement['DETAIL_PAGE_URL'].'" rel="canonical" />',true);	
		if($arElement["IBLOCK_SECTION_ID"] && !$section){
			$db_list = CIBlockSection::GetList(array(), array('GLOBAL_ACTIVE' => 'Y', "ID" => $arElement["IBLOCK_SECTION_ID"]), true, array("ID", $arParams["SECTION_DISPLAY_PROPERTY"], $arParams["LIST_BROWSER_TITLE"], $arParams["LIST_META_KEYWORDS"], $arParams["LIST_META_DESCRIPTION"], $arParams["SECTION_PREVIEW_PROPERTY"], "IBLOCK_SECTION_ID"));
			$section = $db_list->GetNext();
		}
	}
}
else {
	if($arResult["VARIABLES"]["ELEMENT_ID"] > 0){

		$resElement = CIBlockElement::GetList(array(), array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "ID" => $arResult["VARIABLES"]["ELEMENT_ID"]), false, false, array("ID", "IBLOCK_ID", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID"));
		//$arElement = $resElement->Fetch();
		while ($tovar = $resElement->GetNextElement())
		{
			$arElement = $tovar->GetFields(); 
		}
		$APPLICATION->AddHeadString('<link href="https://'.SITE_SERVER_NAME.$arElement['DETAIL_PAGE_URL'].'" rel="canonical" />',true);	
	}
	elseif(strlen(trim($arResult["VARIABLES"]["ELEMENT_CODE"])) > 0){
		$resElement = CIBlockElement::GetList(array(), array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "=CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"]), false, false, array("ID", "IBLOCK_ID", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID"));
		//$arElement = $resElement->Fetch();
		while ($tovar = $resElement->GetNextElement())
		{
			$arElement = $tovar->GetFields(); 
		}
		$APPLICATION->AddHeadString('<link href="https://'.SITE_SERVER_NAME.$arElement['DETAIL_PAGE_URL'].'" rel="canonical" />',true);	
	}
}
$MShopSectionID = $section["ID"];

global $TEMPLATE_OPTIONS;
?>
<div class="catalog_detail">
    <?
        $tmp="main";
		
    ?>
	<?$ElementID = $APPLICATION->IncludeComponent(
		"bitrix:catalog.element",
		$tmp,
		Array(
			"TYPE_SKU" => $TEMPLATE_OPTIONS["TYPE_SKU"]["CURRENT_VALUE"],
			"SKU_DETAIL_ID" => (isset($_GET[$arParams["SKU_DETAIL_ID"]]) && strlen($arParams["SKU_DETAIL_ID"]) && $TEMPLATE_OPTIONS["TYPE_SKU"]["CURRENT_VALUE"] == "TYPE_1" ? $_GET[$arParams["SKU_DETAIL_ID"]] : "" ),
			"SEF_URL_TEMPLATES" => $arParams["SEF_URL_TEMPLATES"],
			"IBLOCK_REVIEWS_TYPE" => $arParams["IBLOCK_REVIEWS_TYPE"],
			"IBLOCK_REVIEWS_ID" => $arParams["IBLOCK_REVIEWS_ID"],
			"SEF_MODE_BRAND_SECTIONS" => $arParams["SEF_MODE_BRAND_SECTIONS"],
			"SEF_MODE_BRAND_ELEMENT" => $arParams["SEF_MODE_BRAND_ELEMENT"],
			"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
			"META_KEYWORDS" => $arParams["DETAIL_META_KEYWORDS"],
			"META_DESCRIPTION" => $arParams["DETAIL_META_DESCRIPTION"],
			"BROWSER_TITLE" => $arParams["DETAIL_BROWSER_TITLE"],
			"BASKET_URL" => $arParams["BASKET_URL"],
			"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
			"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
			"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
			"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			"SET_TITLE" => $arParams["SET_TITLE"],
			"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
			"SET_LAST_MODIFIED" => "Y",
			"SET_STATUS_404" => $arParams["SET_STATUS_404"],
			"MESSAGE_404" => $arParams["MESSAGE_404"],
			"SHOW_404" => $arParams["SHOW_404"],
			"FILE_404" => $arParams["FILE_404"],
			"PRICE_CODE" => $arParams["PRICE_CODE"],
			"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
			"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
			"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
			"PRICE_VAT_SHOW_VALUE" => $arParams["PRICE_VAT_SHOW_VALUE"],
			"LINK_IBLOCK_TYPE" => $arParams["LINK_IBLOCK_TYPE"],
			"LINK_IBLOCK_ID" => $arParams["LINK_IBLOCK_ID"],
			"LINK_PROPERTY_SID" => $arParams["LINK_PROPERTY_SID"],
			"LINK_ELEMENTS_URL" => $arParams["LINK_ELEMENTS_URL"],
			"USE_ALSO_BUY" => $arParams["USE_ALSO_BUY"],
			'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
			'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
			"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
			"OFFERS_FIELD_CODE" => $arParams["DETAIL_OFFERS_FIELD_CODE"],
			"OFFERS_PROPERTY_CODE" => $arParams["DETAIL_OFFERS_PROPERTY_CODE"],
			"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
			"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
			"SKU_DISPLAY_LOCATION" => $arParams["SKU_DISPLAY_LOCATION"],
			"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
			"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
			"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
			"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
			"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
			"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
			"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
			"ADD_ELEMENT_CHAIN" => $arParams["ADD_ELEMENT_CHAIN"],
			"USE_STORE" => $arParams["USE_STORE"],
			"USE_STORE_PHONE" => $arParams["USE_STORE_PHONE"],
			"USE_STORE_SCHEDULE" => $arParams["USE_STORE_SCHEDULE"],
			"USE_MIN_AMOUNT" => $arParams["USE_MIN_AMOUNT"],
			"MIN_AMOUNT" => $arParams["MIN_AMOUNT"],
			"STORE_PATH" => $arParams["STORE_PATH"],
			"MAIN_TITLE" => $arParams["MAIN_TITLE"],
			"USE_PRODUCT_QUANTITY" => $arParams["USE_PRODUCT_QUANTITY"],
			"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
			"IBLOCK_STOCK_ID" => $arParams["IBLOCK_STOCK_ID"],
			"SEF_MODE_STOCK_SECTIONS" => $arParams["SEF_MODE_STOCK_SECTIONS"],
			"SHOW_QUANTITY" => $arParams["SHOW_QUANTITY"],
			"SHOW_QUANTITY_COUNT" => $arParams["SHOW_QUANTITY_COUNT"],
			"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
			"CURRENCY_ID" => $arParams["CURRENCY_ID"],
			"USE_ELEMENT_COUNTER" => $arParams["USE_ELEMENT_COUNTER"],
			"USE_RATING" => $arParams["USE_RATING"],
			"USE_REVIEW" => $arParams["USE_REVIEW"],
			"FORUM_ID" => $arParams["FORUM_ID"],
			"MAX_AMOUNT" => $arParams["MAX_AMOUNT"],
			"USE_ONLY_MAX_AMOUNT" => $arParams["USE_ONLY_MAX_AMOUNT"],
			"DISPLAY_WISH_BUTTONS" => $arParams["DISPLAY_WISH_BUTTONS"],
			"DEFAULT_COUNT" => $arParams["DEFAULT_COUNT"],
			"SHOW_BRAND_PICTURE" => $arParams["SHOW_BRAND_PICTURE"],
			"PROPERTIES_DISPLAY_LOCATION" => $arParams["PROPERTIES_DISPLAY_LOCATION"],
			"PROPERTIES_DISPLAY_TYPE" => $arParams["PROPERTIES_DISPLAY_TYPE"],
			"SHOW_ADDITIONAL_TAB" => $arParams["SHOW_ADDITIONAL_TAB"],
			"SHOW_ASK_BLOCK" => $arParams["SHOW_ASK_BLOCK"],
			"ASK_FORM_ID" => $arParams["ASK_FORM_ID"],
			"SHOW_MEASURE" => $arParams["SHOW_MEASURE"],
			"SHOW_HINTS" => $arParams["SHOW_HINTS"],
			"OFFER_HIDE_NAME_PROPS" => $arParams["OFFER_HIDE_NAME_PROPS"],
			"SHOW_KIT_PARTS" => $arParams["SHOW_KIT_PARTS"],
			"SHOW_KIT_PARTS_PRICES" => $arParams["SHOW_KIT_PARTS_PRICES"],
			"SHOW_DISCOUNT_PERCENT" => $arParams["SHOW_DISCOUNT_PERCENT"],
			"SHOW_OLD_PRICE" => $arParams["SHOW_OLD_PRICE"],
			'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
			'ADD_DETAIL_TO_SLIDER' => (isset($arParams['DETAIL_ADD_DETAIL_TO_SLIDER']) ? $arParams['DETAIL_ADD_DETAIL_TO_SLIDER'] : ''),
			"SHOW_EMPTY_STORE" => $arParams['SHOW_EMPTY_STORE'],
			"SHOW_GENERAL_STORE_INFORMATION" => $arParams['SHOW_GENERAL_STORE_INFORMATION'],
			"USER_FIELDS" => $arParams['USER_FIELDS'],
			"FIELDS" => $arParams['FIELDS'],
			"STORES" => $arParams['STORES'],
			"BIG_DATA_RCM_TYPE" => $arParams['BIG_DATA_RCM_TYPE'],
			"USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
		),
		$component
	);?>
</div>
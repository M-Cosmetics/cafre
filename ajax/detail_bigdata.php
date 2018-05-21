<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.bigdata.products", "main", array(
							"LINE_ELEMENT_COUNT" => 5,
							"TEMPLATE_THEME" => "",
							"DETAIL_URL" => $_POST["detailurl"],
							"BASKET_URL" => "/basket/",
							"ACTION_VARIABLE" => "action_cbdp",
							"PRODUCT_ID_VARIABLE" => "id",
							"PRODUCT_QUANTITY_VARIABLE" => "quantity",
							"ADD_PROPERTIES_TO_BASKET" => "N",
							"PRODUCT_PROPS_VARIABLE" => "prop",
							"PARTIAL_PRODUCT_PROPERTIES" => "N",
							"SHOW_OLD_PRICE" => "Y",
							"SHOW_DISCOUNT_PERCENT" => "Y",
							"PRICE_CODE" => array(
									0 => "BASE",
									1 => "OPT",
									2 => "Интернет Розница",
								),
							"SHOW_PRICE_COUNT" => "1",
							"PRODUCT_SUBSCRIPTION" => "",
							"PRICE_VAT_INCLUDE" => "Y",
							"USE_PRODUCT_QUANTITY" => "Y",
							"SHOW_NAME" => "Y",
							"SHOW_IMAGE" => "Y",
							"SHOW_MEASURE" => "Y",
							"MESS_BTN_BUY" => "",
							"MESS_BTN_DETAIL" => "",
							"MESS_BTN_SUBSCRIBE" => "",
							"MESS_NOT_AVAILABLE" => "",
							"PAGE_ELEMENT_COUNT" => 10,
							"SHOW_FROM_SECTION" => "N",
							"IBLOCK_TYPE" => "new_cat",
							"IBLOCK_ID" => 26,
							"DEPTH" => "2",
							"CACHE_TYPE" => "Y",
							"CACHE_TIME" => '120',//$arParams["CACHE_TIME"],
							"CACHE_GROUPS" => "Y",
							"SHOW_PRODUCTS_26" => "Y",
							"ADDITIONAL_PICT_PROP_26" => "MORE_PHOTO",
							"LABEL_PROP_26" => "-",
							"HIDE_NOT_AVAILABLE" => "L",
							"CONVERT_CURRENCY" => "Y",
							"CURRENCY_ID" => "RUB",
							"SECTION_ID" => $_POST["secid"],
							"SECTION_CODE" => $_POST["seccode"],
							"SECTION_ELEMENT_ID" => $_POST["secelemid"],
							"SECTION_ELEMENT_CODE" => $_POST["secelemcode"],
							"ID" => $_POST["id"],
							"PROPERTY_CODE_26" => array(
								0 => "BRAND",
								1 => "k_350",
								2 => "k_330",
								3 => "k_345",
								4 => "k_351",
								5 => "k_331",
								6 => "k_334",
								7 => "k_333",
								8 => "k_326",
								9 => "k_335",
								10 => "k_332",
								11 => "PROP_162",
								12 => "PROP_2065",
								13 => "PROP_2054",
								14 => "PROP_2017",
								15 => "PROP_2055",
								16 => "PROP_2069",
								17 => "PROP_2062",
								18 => "PROP_2061",
								19 => "CML2_LINK",
								20 => "MORE_PHOTO",
								21 => "ON_PHOT",
								22 => "SUM_PROD",
								23 => "",
							),
							"CART_PROPERTIES_26" => array(
								),
							"RCM_TYPE" => "any_similar",
							"OFFER_TREE_PROPS_".$_POST["elementofferiblockid"] => array(
								),
							"ADDITIONAL_PICT_PROP_".$_POST["elementofferiblockid"] => "-",
							"DISPLAY_WISH_BUTTONS" => "Y",
							"DISPLAY_COMPARE" => "N",
							),
							false,
							array("HIDE_ICONS" => "Y")
						);
						?>
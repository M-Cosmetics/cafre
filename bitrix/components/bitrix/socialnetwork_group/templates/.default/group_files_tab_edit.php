<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
$arCurFileInfo = pathinfo(__FILE__);
$langfile = trim(preg_replace("'[\\\\/]+'", "/", ($arCurFileInfo['dirname']."/lang/".LANGUAGE_ID."/".$arCurFileInfo['basename'])));
__IncludeLang($langfile);
return $APPLICATION->IncludeComponent("bitrix:webdav.element.edit", "view_pro", Array(
	"OBJECT"	=>	$arParams["OBJECT"], 
	"IBLOCK_TYPE"	=>	$arParams["FILES_GROUP_IBLOCK_TYPE"],
	"IBLOCK_ID"	=>	$arParams["FILES_GROUP_IBLOCK_ID"],
	"ROOT_SECTION_ID"	=>	$arResult["VARIABLES"]["ROOT_SECTION_ID"],
	"SECTION_ID"	=>	$arResult["VARIABLES"]["SECTION_ID"],
	"ELEMENT_ID"	=>	$arResult["VARIABLES"]["ELEMENT_ID"],
	"PERMISSION"	=>	$arResult["VARIABLES"]["PERMISSION"],
	"CHECK_CREATOR"	=>	$arResult["VARIABLES"]["CHECK_CREATOR"],
	"NAME_FILE_PROPERTY"	=>	$arParams["NAME_FILE_PROPERTY"],
	"ACTION"	=>	$arResult["VARIABLES"]["ACTION"],
	"REPLACE_SYMBOLS"	=>	$arParams["REPLACE_SYMBOLS"],
    "NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],

    "FORM_ID" => $arParams["FORM_ID"],
    "TAB_ID" => 'tab_main',
    
	"SECTIONS_URL" => $arResult["~PATH_TO_GROUP_FILES"],
	"SECTION_EDIT_URL" => $arResult["~PATH_TO_GROUP_FILES_SECTION_EDIT"],
	"ELEMENT_URL" => $arResult["~PATH_TO_GROUP_FILES_ELEMENT"],
	"ELEMENT_EDIT_URL" => $arResult["~PATH_TO_GROUP_FILES_ELEMENT_EDIT"],
	"ELEMENT_FILE_URL" => $arResult["~PATH_TO_GROUP_FILES_ELEMENT_FILE"],
	"ELEMENT_HISTORY_URL" => $arResult["~PATH_TO_GROUP_FILES_ELEMENT_HISTORY"],
	"ELEMENT_HISTORY_GET_URL" => $arResult["~PATH_TO_GROUP_FILES_ELEMENT_HISTORY_GET"],
	"ELEMENT_VERSION_URL" => $arResult["~PATH_TO_GROUP_FILES_ELEMENT_ELEMENT_VERSION"],
	"ELEMENT_VERSIONS_URL" => $arResult["~PATH_TO_GROUP_FILES_ELEMENT_VERSIONS"],
	"ELEMENT_UPLOAD_URL" => $arResult["~PATH_TO_GROUP_FILES_ELEMENT_UPLOAD"],
	"HELP_URL" => $arResult["~PATH_TO_GROUP_FILES_HELP"],
	"USER_VIEW_URL" => $arResult["~PATH_TO_USER"],
	"WEBDAV_BIZPROC_HISTORY_URL" => $arResult["~PATH_TO_GROUP_FILES_WEBDAV_BIZPROC_HISTORY"], 
	"WEBDAV_BIZPROC_HISTORY_GET_URL" => $arResult["~PATH_TO_GROUP_FILES_WEBDAV_BIZPROC_HISTORY_GET"], 
	"WEBDAV_BIZPROC_LOG_URL" => $arResult["~PATH_TO_GROUP_FILES_WEBDAV_BIZPROC_LOG"], 
	"WEBDAV_BIZPROC_VIEW_URL" => $arResult["~PATH_TO_GROUP_FILES_WEBDAV_BIZPROC_VIEW"], 
	"WEBDAV_BIZPROC_WORKFLOW_ADMIN_URL" => $arResult["~PATH_TO_GROUP_FILES_WEBDAV_BIZPROC_WORKFLOW_ADMIN"], 
	"WEBDAV_BIZPROC_WORKFLOW_EDIT_URL" => $arResult["~PATH_TO_GROUP_FILES_WEBDAV_BIZPROC_WORKFLOW_EDIT"], 
	"WEBDAV_START_BIZPROC_URL" => $arResult["~PATH_TO_GROUP_FILES_WEBDAV_START_BIZPROC"], 
	"WEBDAV_TASK_LIST_URL" => $arResult["~PATH_TO_BIZPROC_TASK_LIST"], 
	"WEBDAV_TASK_URL" => $arResult["~PATH_TO_BIZPROC_TASK"], 
    
	"BIZPROC" => $arResult["VARIABLES"]["BIZPROC"], 
    "SET_TITLE"	=>	"N",
    "SET_NAV_CHAIN"	=>	"Y",
    "STR_TITLE" => $arParams["STR_TITLE"], 
    "MERGE_VIEW" => "Y",
    "SHOW_WORKFLOW" => "N",
    "DOCUMENT_LOCK" => "N",
    "CACHE_TYPE"	=>	$arParams["CACHE_TYPE"],
    "CACHE_TIME"	=>	$arParams["CACHE_TIME"],
    "DISPLAY_PANEL"	=>	$arParams["DISPLAY_PANEL"]),
    $component,
    array("HIDE_ICONS" => "Y")
);
?>

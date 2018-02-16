
<?
$module_id = "carrotquest.marketing";

$strPath2opt = str_replace("\\", "/", __FILE__);
$strPath2opt = substr($strPath2opt, 0, strlen($strPath2opt)-strlen("/options.php"));
include(GetLangFileName($strPath2opt.'/lang/', '/options.php'));

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/options.php");
CModule::IncludeModule($module_id);	

$RIGHT = $APPLICATION->GetGroupRight($module_id);
if ($RIGHT >= "R") :

	$arAllOptions = array(
		array("api_key", "API key", array("text", 100),""),
		array("api_secret", "API Secret", array("text", 100),""),		
		array("api_auth_key", "User Auth Key", array("text", 100),""),
		
		array("basket_page", GetMessage("CARROT_INTEGR_SETTINGS_BASKET_PAGE"), array("text", 100),"/personal/cart/"),		
		array("phone_prop", GetMessage("CARROT_INTEGR_SETTINGS_PHONE_PROP"), array("text", 100),"",GetMessage("CARROT_INTEGR_SETTINGS_PHONE_PROP_TIP")),
		array("old_events", GetMessage("CARROT_INTEGR_SETTINGS_OLD_EVENTS"), array("checkbox"),"Y"),

		array("exception_pages", GetMessage("CARROT_INTEGR_SETTINGS_EXCEPTION_PAGES"), array("textarea", 10, 100),"", GetMessage("CARROT_INTEGR_SETTINGS_EXCEPTION_PAGES_TIP"))
		
	);

	$aTabs = array(
		array(
		"DIV" => "edit1"
		,"TAB" => GetMessage("MAIN_TAB_SET")
		,"ICON" => "carrotquest_settings"
		,"TITLE" => GetMessage("MAIN_TAB_TITLE_SET"))		
	);
	$tabControl = new CAdminTabControl("tabControl", $aTabs);


	if ($RIGHT=="W" && $REQUEST_METHOD == "POST" && strlen($Update.$RestoreDefaults) > 0 && check_bitrix_sessid())
	{

		if (strlen($RestoreDefaults) > 0)
		{
			COption::RemoveOption($module_id);
			foreach ($arAllOptions as $arOption)
			{
				$val="";
				$name = $arOption[0];
				if ($arOption[3]!=null)
				{
					$val = $arOption[3];				
				}
				COption::SetOptionString($module_id, $name, $val,$arOption[1]);				
			}			
		}
		else
		{
			foreach ($arAllOptions as $arOption)
			{
				$name = $arOption[0];
				$val = $_REQUEST[$name];
				if ($arOption[2][0] == "checkbox" && $val != "Y")
					$val = "N";
				COption::SetOptionString($module_id, $name, $val,$arOption[1]);
			}			
		}
	}

	?>
	<h1><?=GetMessage("CARROT_INTEGR_SETTINGS_TITLE")?></h1>
	<form method="post" action="<? echo $APPLICATION->GetCurPage() ?>?mid=<?=urlencode($module_id)?>&amp;lang=<?=LANGUAGE_ID?>">
		<?
		$tabControl->Begin();		
		$tabControl->BeginNextTab();
		foreach ($arAllOptions as $arOption):
			$val = COption::GetOptionString($module_id, $arOption[0], $arOption[3]);
			$type = $arOption[2];
			if (isset($arOption[4]))
				$Note = $arOption[4];
			else
				$Note = "";
			?>
			<tr>
				<td width="40%" nowrap <? if ($type[0] == "textarea")
					echo 'class="adm-detail-valign-top"' ?>>					
					<label for="<? echo htmlspecialcharsbx($arOption[0]) ?>"><? echo $arOption[1] ?>
						:</label>
				<td width="60%">
					<? if ($type[0] == "checkbox"): ?>
						<input
							type="checkbox"
							name="<? echo htmlspecialcharsbx($arOption[0]) ?>"
							id="<? echo htmlspecialcharsbx($arOption[0]) ?>"
							value="Y" <? if ($val == "Y") echo ' checked="checked"'; else echo ''; ?>>
					<? elseif ($type[0] == "text"): ?>
						<input
							type="text"
							size="<? echo $type[1] ?>"
							maxlength="255"
							value="<? echo htmlspecialcharsbx($val) ?>"
							name="<? echo htmlspecialcharsbx($arOption[0]) ?>"
							id="<? echo htmlspecialcharsbx($arOption[0]) ?>">						
					<?
					elseif ($type[0] == "textarea"): ?>
						<textarea
							rows="<? echo $type[1] ?>"
							cols="<? echo $type[2] ?>"
							name="<? echo htmlspecialcharsbx($arOption[0]) ?>"
							id="<? echo htmlspecialcharsbx($arOption[0]) ?>"
						><? echo htmlspecialcharsbx($val) ?></textarea>
					<?endif ?>
				</td>
			</tr>
			<? if ($Note):?>
			<tr>
				<td></td>
				<td>
					<span style="font-size:10px"><?echo $Note ?></span>
				</td>
			</tr>
			<?endif ?>
		<? endforeach ?>	
		<tr>
			<td colspan="2" align="center">				
				<div class="adm-info-message-wrap" align="center">
					<div class="adm-info-message" align="left">
						<?=GetMessage("CARROT_INTEGR_API_TIP")?>
					</div>
				</div>
			</td>
		</tr>		
		<? $tabControl->Buttons(); ?>
		
		<input type="submit" name="Update" value="<?= GetMessage("MAIN_SAVE") ?>"
			   title="<?= GetMessage("MAIN_OPT_SAVE_TITLE") ?>" class="adm-btn-save">
		<input type="submit" name="RestoreDefaults" title="<?= GetMessage("MAIN_HINT_RESTORE_DEFAULTS") ?>"
			   OnClick="return confirm('<?= AddSlashes(GetMessage("MAIN_HINT_RESTORE_DEFAULTS_WARNING")) ?>')"
			   value="<?= GetMessage("MAIN_RESTORE_DEFAULTS") ?>">	
		
    <?=bitrix_sessid_post();?>
    <?$tabControl->End();?>
	</form>	
<? endif; ?>

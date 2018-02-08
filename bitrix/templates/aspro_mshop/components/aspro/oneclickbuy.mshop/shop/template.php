 <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<div class="popup-intro">
		<div class="pop-up-title"><?=GetMessage('FORM_HEADER_CAPTION')?></div>
	</div>
	<a class="jqmClose close"><i></i></a>
	<div class="form-wr">
		<form method="post" id="one_click_buy_form" action="<?=$arResult['SCRIPT_PATH']?>/script.php" onsubmit="yaCounter37955450.reachGoal('order'); ga('send', 'event', 'order', 'submit'); return true;">
			<?foreach($arParams['PROPERTIES'] as $field):
				$class.="inputtext";?>	
				<div class="form-control bg">
					<label class="description">
						<?=GetMessage('CAPTION_'.$field)?>
						<?if (in_array($field, $arParams['REQUIRED'])):?><span class="star">*</span><?endif;?>
					</label>
					<?if($field=="PHONE"){
						$class.=" phone";
					}?>
					<?if($field=="COMMENT"):?>
						<textarea name="ONE_CLICK_BUY[<?=$field?>]" id="one_click_buy_id_<?=$field?>" class="<?=$class;?>"></textarea>
					<?else:?>
						<input type="text" name="ONE_CLICK_BUY[<?=$field?>]" value="<?=$value?>" class="<?=$class;?>" id="one_click_buy_id_<?=$field?>" />
					<?endif;?>
				</div>
			<?endforeach;?>

			<div class="but-r clearfix">
				<!--noindex-->
					<button class="button short" type="submit" id="one_click_buy_form_button" name="one_click_buy_form_button" value="<?=GetMessage('ORDER_BUTTON_CAPTION')?>"><span><?=GetMessage("ORDER_BUTTON_CAPTION")?></span></button>
					<?/*<div class="prompt"><span class="star_big">*</span> &mdash;&nbsp;<?=GetMessage("IBLOCK_FORM_IMPORTANT")?></div>	*/?>
				<!--/noindex-->
			</div>
			<div class="chek_politik">
			<input type="checkbox" checked/>
<div class="tex_check_politik2">
	�������� ������� <a href="#" class="modal-a clik_sogl" target="_blank">�������� �� ��������� ������������ ������</a>
	</div>
	<br/>
	<input type="checkbox" checked/>
<div class="tex_check_politik2">
	� ��������� <a href="#" class="agreement-drop modal-a">������ ���������� � ��������</a>
	</div>
	<div class="agreement-info">
	<h2>��������� ������</h2>
	<p>
	1. ������� � �����������, ������������ � ��������� ������.<br />
� ��������� ������, ���� �� ��������� �� ������� ����, ��������������� ������� ����� ��������� �������� � �������� � ��������� ������������ ������:<br />
���������� � �������� � ������������ ���������������� �����Ż (��� 7325153965), �������������� ������������������� ������������ �� ������� ������ ������������� �������� ��� �������� ������ �CAFRE�.<br />
������� � ��������� ��������, ���������� ��������� ������������ ��������, ������������ ������ ����������� ����, � ���������� �������� ��������� �����-������� ������ (����� - ��������) �� ��������, ������������ � ������, ������� ��� � ����������.<br />
������������ � ����� ���������� ����, ��������� (���������������) ��������� ������ �� ������������� ��������.<br />
������������������� ����������� � ����������, �������������� �������� ���� ������������ ������ ����������� ����������� �� �����, ������� ����� ���� ������������ ��������� ��� ���������� ������ ����������.<br />
����� � ������������ ����������� ����������, ��������� ��� ��������� ������������ � ���� �������� � ������ www.cafre.ru.<br />
���������-�������� � ��������-������� �� ������� ����������-������������� �������, ����������� �� �����.<br />
������ � ������ �����-�������, �� ������� � �� ������������ � ����������� ������� � ������������ � ������� ����������� ���������� � ��������������� ������� ��������-��������.<br />
������ � ����������� ����������� � ��������-�������� ������ �� ������� � �������� �������, ��������� ����������� � ��������-��������, � ��������������� �������� ����������� ���� �������� (����������� �����, ����������� �� �����) �/��� ����������� ����������� �� ��������.<br />
����������� ������ � ������ ����, ������������ ���������, �������������� �������� ������ ����������, ���� �������������� �� ����� � �� ���� �������� ��������� ������� � ����������� ��� ����������.<br />
������� ������ � �������������� �������� ����������� ������� ������.
	<br /><br />
	2. ����� ���������<br />
� ������������ �� ������� 437 ������������ ������� ���������� ��������� ������ �������� �������� ��������� �������, ������������ ���������� �����, � � ������ �������� ���������� ���� �������, ���������� ���� ��������� ������� � ���������� ������ ������ � ��� �������� �� ��������, ���������� � ��������� ������. � ������������ � ������� 3 ������ 438 �� ��, ���� ���������� ������ ����������� �������� �������� ������ ��������, ��� �������� ������������ ���������� �������� �����-������� ������ �� ��������, ������������� � ��������� ������ � �� �����.
�������� � ���������� �����������, ��� �������� ����������� �����- � ���������������, � ����� ����� ������� � ������������, ������������ � ������������ ��� ���������� � ���������� �������� ��������� �����-������� ������.
��������� ������ ����� ��������-�������, ���������� ������������� ��������� ������� ��������� ������, � ����� �������, ��������� �� �����. 
� ���������� ����� ����������� � ��������� ����������� ��������� ������������ ������� �� (��������� �����-�������, ����� �� �� ������ ���� ������������, ������������� ������������� �� �� 27.09.2007 �. �612 ��� ����������� ������ ������� ������� ������������� �������� � ���� ��������� ������������ ���������������� ��.
�������� ��������� �� ����� ����� ������� ��������� � ��������� ������, � ����� � ��� ���������� ��������� �������������� �������������� ������� ��������� � ������, ����������� �� �����. 
<br /><br />
3. ������� ��������<br />
�������� ��������� �������� � ������������� ���������� ��� ������� ������������� ������������� �������� (����� �� ������ �������� - �����) �� ��������������� �������, ���������� � ��������, � ���������� ��������� ������� ���� ����� � �������� �� ��������, ��������������� ��������� ���������.
<br /><br />
	4. ����� � ����������� ������<br />
�������� ���������:<br />
� ������� ���������� ���������� �������� ���������� ���������� ����� ������������ ����� ����������� �� ��������, ������������� ��������� ������� � � ������������ � ������������ ������������ ���������������� ��. <br />
�������� (����������) ��������� ������, ���������� ������������ ���� �������� � ��������� �������� � ������������ ���������������� �����Ż (����� - ��������) ������������ ���� ������������ ������, � ��� �����: �������, ���, ��������; ����� ��������, ������� ��� ����� � �����������; ����� ����������� �����; ����� ����������.<br />
��� ���������� ������������ ������ � ��������� ������ ����������: ���� ������������� ������; �� ��������������; ����������; ��������; ��������� (����������, ���������); �������������, ��������������� (� ��� ����� �������� �� ���������� ���������� ��������� � �������������� ��������); �������������; ������������; �����������.<br />
�������� ����� ����� �� �������� ������������ ������ ���������� ������������ ��������� (���������� �������) � ����� �������� ���������� ���������� ��������� �������.<br />
���������� �������� �������� � ��������� ��������� � ��� ������������ ������������ ������������ ������ ���������� � ������� ������������������ ������ ���������� ������ ������, � ����� ���� ����������� � ����������� �������.
�������� ������ �������������� ���������� ������������ ������� ��������� ������������ ������ ����������.<br />
���������� ����������� � ���, ��� ��� ������������ ������, ���������� ����������, ����� ���� �������� ������� ����� � �����, ��������� � ��������� ������, ��� ��� ���������� ������������ �������� �� ����������� � ����������� ������ � ��������� ������.
���������� ����� ������������� ��������� � ������� ����� ����� ������������ � ������������ ���� ������������ ������ � ����� ���������� ������������, ������������ �� ��������� �������� ��������������� ����� � �������, � ��� ����� ��� ���������� ������������� �������� � ������������, �������������� ������������, �������� ��������� ���������� ���������.<br />
���������� ������������ ���� �������� � ���, ��� �������� ��� �������������� �� ���� ������ ����������������� � ����������� ����� ������������� ������ ��������� � ����������� � ������� ��������� ������� �����, �������, ��, �� �������������: �������� ��������, sms-��������, ����������� �����, �������, ���� �������� � ��., ��� ������� ���������� ������ �������� ������ ������������ ���������������� �� � ����� ������ ������������ ������.<br />
��� �������� ������������ ������ ���������� ������� ����� �������� ������������� ���, ���������� ������������ ������ ����������, � ���, ��� ��� ������ �������� ����������������� � ����� ���� ������������ ���� � �����, ��� ������� ��� ��������, � ������� �� ����� ������� ��� ���������� ����� �������.<br />
�������� ������������ ������������������ ��������������� ����������� ������������ ������, �� ������ �� �������������������� �������, �����������, ���������������. � ����� ������ ���������� ������ ��������� �������� ����� ������������ ������ �/��� ����������� ��������, ���������� ���� ������������ ������, �������� ��������� �� �������� ��� �������� ��������� �� ����������� �����, ������ ���, ������� � ����� ��������.
<br /><br />
�������� ����� �����:<br />
�������� ������� ��������� ������; ���� �� �����, ��������� � ��������-��������; ������� ������ ������; ������� � ����� �������� ������; � ����� ���� �������, ��������� � ��������� ������ ��� � ��������-��������.<br />
��� ������������ � ����������� ���������� ���� ����� � ����������� �� ����������� � ����������� ������ (��������) ������� �����.
<br /><br />
���������� ���������:<br />
�� ������� ���������� ������ �� ����� � ������������ � ����������� � ���������, �������������� � ��������� ������, � ����� � ����� ���������, ���������� �� �����, � ��� ����� � ������ �� �����, �������������� � ��������-��������.<br />
�� ���������� ��������� ����� ������������ ����� ����������� ��������� ������ �������� ���� ������������ ������, ����������� ��� ������������� ���������� � ����������� ��� ���������� ������ � ��������� � �������� ���������� ����������� �� ������.<br />
�������� ���������� ����� � ��� �������� �� �������� ��������� ������.<br />
��������� �������, ������������� � ��������� ������, � ����� ���� �������, ��������� �� �����.
<br /><br />
5. ������� ���������� ������<br />
����� ���������� ����� ���� �������� ����������� ���������� ����������� ����� ������ �� �����. ��� ���������� ������ ����������� ����������� ����� �� �����, ���������� ��� ����� ������������, ��� �� ���������� � ��������� ������� ������� ����� ��������-�������, ���������� �� ����� � � ��������� ������, � ��������� ������������ �������� ��� ����������, ����������� ��� ����������� ���������� � ���������� ������.<br />
���� �� ������ �������� ����������� ����������� ���������� ��� ����������� ����������� ����������� ������, �������� ����������� �� ���� ���������� �� �������� ��� ����� �������� ��������� �� ��������� ����������� ����� ����������� �����, � ������� 24 (�������� �������) ����� ����� ��������� ������ �� ����������. ���������� ������ ����������� ������� ����� � ���� ���������� ��� ������������, ���� ������������ ���� �����. � ������ ����������� ������ ���������� � ������� 24 (�������� �������) ����� � ������� ����������� ���������� ���������, �������� ������ ������������ ����� ���������� � ������ ������.<br />
� ������ ������������� � ���������� ��������, ���������� ������� � ������������� ������, ����� ����������� ������, ���������� ������ ���������� � �������� �� �������� ��� ����������� ����� ��� ��������� ����������� ����������.
<br /><br />
6. ������� ��������<br />
�������� ������ �� ������ ������� �������������� ���������� ������� ��� ������ ������. � �������� �������� � ���������� �� ������ ���������� ����� ������������ � ��������������� ������� ����� ��������� � ������ (https://estel.m-cosmetica.ru/pages/shipping).
���������� ������ � ����� ������ ������� ���������� �� ������. � ������ ���� �����������, ������������ �� ������ ������, �������������� ���� �������� ��������� �������� ������, ����� ������� ���������� � ����� ������ ��������� �� �����������.<br />
� ������ ���� ����� �� ��� ������� ���������� �� ���� ����������, ��������� �������� ����� ���� ����������� ��� ������� ������������ ��������� � ����������� ����� ������ �������� � ��� ������� ������ ����������� ��������� ��������� �������� ������.
��� ��������� ������ ���������� ��������� ������������ ������������� ������ ������, ������������� � ���������� ��������� � �������� ���� ������������� ������. ������� ������ �������������� �������� ���������� �� ������ ���������. ������� ������ ��� ��������� ������ ���������� ����� ��������� �� ��������������� ������, ������� ����� ������� ����������� ������ (����� ���������������� ��������), �������������� ���������� ������������� ������ ������ ��� ����������������� ���������.
<br /><br />
7. ������� ������<br />
���� �� ����� ������������ ��������� � ������������� ������� � ����������� �� ����� � ���������� ������. ���� �� �����, ��������� �� ����� ����� ���������� �� ��� �� ����� ��������� � ��������� ������� � ��������� ��������� ���� �CAFRE�. ���� ������ ����� ���� �������� ��������� � ������������� �������. ��� ���� ���� �� ���������� ����������� ����� ��������� �� ��������.<br />
���������� ����� �������� ������ ��� �����, ������� ���� � ������� �� ������ � ������ ���������� ������.<br />
 ������ ������ ����������� ������������ � ������ ����� �� ����������������� ��������:<br />
�	������������� �� ��������� ���� ��������;<br />
�	��������� ������� ��� �������� �� ����� ����������.
<br /><br />
8. ������� ������<br />
���������� ������ ���������� �� ������ ����������� �������� � ����� ����� �� ��� ��������, � ����� �������� ������ � � ������� 7 (����) ����������� ���� � ������� ������� ������ ����������� ��� ���������� ��������� �������:<br />
�	�������� �������� ��� (������������ ��������, ��������� ������, ������);<br />
�	��������� ��������������� �������� ������;<br />
�	����� �� ����� ������ ������������;<br />
�	������� ���������� �� �����, �������������� ���� ������� ������������� ������ (�������� ��� �������� ���).<br />
��� �������� ������ ����������� �������� ���������� ������������ ��������� ������, �� ����������� ��������� ��������. ������� ���������� �� �������� �������� ������ ����������� �������� ��������� �� �����������. ���� �������� �������� ������� � 10 (������) ������� ���� �� ��� �������� �������� ������������� ������ � �������������� ����������� ���������������� ����������� ����������. �������� �������� ������������ ������� �� ��� ��������� ����, ��������� � ��������� �� ������. 
������� ������ �������� �������������� ����� �������� ������ �� ������: 432071, �.���������, ��.��������, 39, ���� 95.<br />
�������� ������ ������������� �������� � ��� ������� �������������� � ������������ � ����������� ������������ ���������������� ��.<br />
�������� ����������, �������������� �������� ������ � ������������ �������:<br />
1.	��������� �� ������� ������.<br />
2.	�������� �� �����, �������������� ���� ������� ������������� ������ � �������� (�������� ��� �������� ���).<br />
3.	����� ���������, ��������������� �������� (������� ���������� ��/�������������, ��������� ������������� �������� ���������� ��, ���������� �� ������ ���������� ��������, ������� �����, ������������ �����).<br />
<br /><br />
9. ����������� ������������� ������<br />
����������� ���� �� �����, ��������������� � ������������ � ����������� ����������������� ��.
<br /><br /> 
10. ��������������� ������<br />
����� �� ������ ������������� �� ��������������� �� ������ ��� ��������� ������������ ����� ������������ �� ���������� ��������, ���� ��� ������������ ���� ������� ���������������� ������������� ����. <br />
�� ������������ ��� ������������ ���������� ������� ���������� �������� (������������� ����������� ������ ��������) ������� ����� ��������������� � ������������ � ����������������� ���������� ���������.<br />
 ��� �����, ��������� � ������������� ��� ������������ ����������� ����� ������������ �� ���������� ��������, ������� ����� ������ ����� �����������. ������������� ������� ���������� ��� ������ ���������� 30 ����������� ����.
� ������ �� ���������� �������� � ���� �����������, ����� ����� ����������� � �������� ������� � ������������ � ����������� ����������������� ���������� ���������.
	</p>
<script>
jQuery(function($){
    $("#one_click_buy_id_PHONE").mask("8(999) 999-9999");
	$(".agreement-drop").click(function(){
        var t = $(this).parents('.chek_politik').find('.agreement-info');
        t.stop().slideToggle(200);
	});
	$(".clik_sogl").click(function(){
	window.open('/politik/');
	});
});
</script>
	</div>
			</div> 
			<?if(strlen($arParams['OFFER_PROPERTIES'])):?>
				<input type="hidden" name="OFFER_PROPERTIES" value="<?=$arParams['OFFER_PROPERTIES']?>" />
			<?endif;?>
			<?if(intVal($arParams['IBLOCK_ID'])):?>
				<input type="hidden" name="IBLOCK_ID" value="<?=intVal($arParams['IBLOCK_ID']);?>" />
			<?endif;?>
			<?if(intVal($arParams['ELEMENT_ID'])):?>
				<input type="hidden" name="ELEMENT_ID" value="<?=intVal($arParams['ELEMENT_ID']);?>" />
			<?endif;?>
			<?if(intVal($arParams['ELEMENT_QUANTITY'])):?>
				<input type="hidden" name="ELEMENT_QUANTITY" value="<?=intVal($arParams['ELEMENT_QUANTITY']);?>" />
			<?endif;?>
			<?if($arParams['BUY_ALL_BASKET']=="Y"):?>
				<input type="hidden" name="BUY_TYPE" value="ALL" />
			<?endif;?>
			<input type="hidden" name="CURRENCY" value="<?=$arParams['DEFAULT_CURRENCY']?>" />
			<input type="hidden" name="SITE_ID" value="<?=SITE_ID;?>" />
			<input type="hidden" name="PROPERTIES" value='<?=serialize($arParams['PROPERTIES'])?>' />
			<input type="hidden" name="PAY_SYSTEM_ID" value="<?=$arParams['DEFAULT_PAYMENT']?>" />
			<input type="hidden" name="DELIVERY_ID" value="<?=$arParams['DEFAULT_DELIVERY']?>" />
			<input type="hidden" name="PERSON_TYPE_ID" value="<?=$arParams['DEFAULT_PERSON_TYPE']?>" />
			<?=bitrix_sessid_post()?>	
		</form>
		<div class="one_click_buy_result" id="one_click_buy_result">
			<div class="one_click_buy_result_success"><?=GetMessage('ORDER_SUCCESS')?></div>
			<div class="one_click_buy_result_fail"><?=GetMessage('ORDER_ERROR')?></div>
			<div class="one_click_buy_result_text"><?=GetMessage('ORDER_SUCCESS_TEXT')?></div>
		</div>
		<?if(intVal($arParams['ELEMENT_ID'])):?>
<script type="text/javascript">
window.googole_price = window.googole_price || 0;
window.googole_prod = window.googole_prod || [];

$('#one_click_buy_form').on('action_ga', function(){
	
var p = $('.price_on').text();
var temp = new Array();
temp = p.split(' ');
var m = Number(temp[1]);
var t = m*<?=intVal($arParams['ELEMENT_QUANTITY']);?>;
        var tarifs=[<?
$intElementID = intVal($arParams['ELEMENT_ID']); // ID �����������
$mxResult = CCatalogSku::GetProductInfo(
$intElementID
);
   $tovid = $mxResult['ID'];
   //echo $tovid;

   $db_props = CIBlockElement::GetProperty(26, $tovid, array("sort" => "asc"), Array("CODE"=>"BRAND"));
if($ar_props = $db_props->Fetch())
$res = CIBlockElement::GetByID($ar_props["VALUE"]);
$ar_res = $res->GetNext();
$res2 = CIBlockElement::GetByID($tovid);
if($ar_res2 = $res2->GetNext()) $search_raz = explode("/", $ar_res2["DETAIL_PAGE_URL"]);
$nav = CIBlockSection::GetNavChain(false,$search_raz[2]);
			?>
                {
				"id": "<?=$intElementID?>",
				"name": "<?=$ar_res2['NAME']?>",
				"list_name": "<?=$ar_res2['NAME']?>",
				"brand": "<?=$ar_res['NAME']?>",
				"category": "<?$i=1;while($arSectionPath = $nav->GetNext()){echo $arSectionPath["NAME"].'/';$i++;}?>",
				"list_position": <?=$i;?>,
				"quantity": <?=intVal($arParams['ELEMENT_QUANTITY']);?>,
				"price": String(m)
                }
            ];
			

gtag('event', 'purchase', {
  "transaction_id": $(this).data('order'),
  "affiliation": "cafre.ru",
  "value": t,
  "currency": "RUB",
  "tax": 0,
  "shipping": 0,
  "items": tarifs
});
 
});
</script>
<?else:/*?>

<script type="text/javascript">
window.dataLayer = window.dataLayer || [];

$('#one_click_buy_form').on('action_ga', function(e){
	$this=$(this);
e.preventDefault();

var price = $(".wrap_prices > .price").text();
$(price).serialize();
				$.ajax({
					url: "/ajax/action_flybas.php", 
					type: "post", 
					dataType: "json", 
					data:{"price": price},
					success: function(data){
						console.log(price);
						console.log(data);
						console.log(data.transaction_id);
						
						gtag('event', 'purchase', data);
					}
				});
});
</script>
<?*/endif;?>
	</div>
<script type="text/javascript">
/*
$(document).on('click', '.agreement-drop', function(e) {
        e.preventDefault();
        var t = $(this).parents('.chek_politik').find('.agreement-info');
        t.stop().slideToggle(200);
    });*/
$('#one_click_buy_form').validate({
	rules: {
	"ONE_CLICK_BUY['EMAIL']": {email : true},
		<?
		foreach($arParams['REQUIRED'] as $key => $value){
			echo '"ONE_CLICK_BUY['.$value.']": {required : true}';
			if($arParams['REQUIRED'][$key + 1]){
				echo ',';
			}
		}
		?>
	} 
});
$('.popup').jqmAddClose('.jqmClose');
//$('#one_click_buy_id_PHONE').mask('<?=trim(COption::GetOptionString("aspro.mshop", "PHONE_MASK", "+9 (999) 999-99-99", SITE_ID));?>');
$('#one_click_buy_id_PHONE').inputmask( "mask", { "mask": arMShopOptions['THEME']['PHONE_MASK'], "showMaskOnFocus": false } );
</script>
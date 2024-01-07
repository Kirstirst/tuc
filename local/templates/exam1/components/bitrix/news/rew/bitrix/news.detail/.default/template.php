<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
echo '<pre>'; print_r($arResult); '</pre>';
?>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?=$arResult["DETAIL_TEXT"];?>
		</div>
		<div class="review-autor">
            <?=$arResult["NAME"];?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?> <?=GetMessage('YEAR')?>., <?=$arResult["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?>, <?=$arResult["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
        <?php if($arResult["DETAIL_PICTURE"]["SRC"]):?>
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
        <?php else:?>
			<img src="<?=SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg"?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
        <?php endif;?>
	</div>
</div>
<?php if(is_array($arResult["PROPERTIES"]["FILE"]["VALUE"])):?>
<div class="exam-review-doc">
	<p><?=GetMessage('DOCUMENTS')?>:</p>
	<?php foreach ($arResult["PROPERTIES"]["FILE"]["VALUE"] as $idFile):?>
	<?php $file = CFile::GetFileArray($idFile)?>
	<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH;?>/img/icons/pdf_ico_40.png"><a href="<?=$file['SRC']?>"><?=$file['ORIGINAL_NAME']?></a></div>
	<?php endforeach;?>
</div>
<?php endif;?>
<hr>

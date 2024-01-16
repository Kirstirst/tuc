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
//echo '<pre>'; print_r($arResult); '</pre>';
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="review-text">

			<div class="review-block-title">
				<span class="review-block-name">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
				</span>
				<span class="review-block-description">
				<?=$arItem["DISPLAY_ACTIVE_FROM"]?> <?=GetMessage('YEAR')?>., <?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?>, <?=$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?>
				</span>
			<div class="review-text-cont">
				<?=$arItem["PREVIEW_TEXT"]?>
			</div>
		</div>
		<div class="review-img-wrap">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<?php if($arItem["DETAIL_PICTURE"]["SRC"]):
                    $renderImage = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], Array("width" => 68, "height" => 50), BX_RESIZE_IMAGE_EXACT, true);
                    ?>
				    <img src="<?=$renderImage['src']?>" alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>">
                <?php else:?>
					<img src="<?=SITE_TEMPLATE_PATH . "/img/rew/no_photo.jpg"?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                <?php endif;?>
			</a>
		</div>
	    </div>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>


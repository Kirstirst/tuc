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
//echo '<pre>';print_r($arResult);echo '</pre>';
?>
<div class="item-wrap">
    <div class="rew-footer-carousel">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="side-block side-opin">
            <div class="inner-block">
                <div class="title">
                    <div class="photo-block">

                        <?php if($arItem["PREVIEW_PICTURE"]["SRC"]):?>
                            <?php
                            $renderImage = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 39, "height" => 39));
                            ?>
							<img src="<?=$renderImage['src']?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                        <?php else:?>
                            <img src="<?=SITE_TEMPLATE_PATH . "/img/rew/no_photo_left_block.jpg"?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                        <?php endif;?>
                    </div>
                    <div class="name-block"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
                    <div class="pos-block"><?=$arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]?> , <?=$arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]?></div>
                </div>
                <div class="text-block"><?=TruncateText($arItem["PREVIEW_TEXT"], 150);?></div>
            </div>
        </div>
    </div>
<?endforeach;?>
</div>
</div>

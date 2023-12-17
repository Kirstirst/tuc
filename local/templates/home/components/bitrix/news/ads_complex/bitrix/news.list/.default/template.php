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
//echo '<pre>'; print_r($arResult); echo '</pre>';
?>
<div class="site-section site-section-sm bg-light">
    <div class="container">
          <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2>Новые объявления</h2>
                </div>
            </div>
           </div>
        <div class="row mb-5">
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
         <div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
              <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
                  <figure>
                     <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
                  </figure>
                  <div class="prop-text">
                      <div class="inner">
                          <span class="price rounded"><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?> рублей</span>
                           <h3 class="title"><?echo $arItem["NAME"]?></h3>
                       </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Площадь:</span>
                                    <strong><?=$arItem["DISPLAY_PROPERTIES"]["SQUARE"]["VALUE"]?>м<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Этажи:</span>
                                    <strong><?=$arItem["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"]?></strong>
                                </div>
                                <div class="col">
                                    <span>Санузлы:</span>
                                    <strong><?=$arItem["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]?></strong>
                                </div>
                                <div class="col">
                                    <span>Гараж:</span>
                                    <strong><? if($arItem["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"] == true){
                                            echo $arItem["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"];}
                                        else{
                                            echo "нет";}
                                        ?></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
         <?endforeach;?>
          </div>
    </div>
</div>

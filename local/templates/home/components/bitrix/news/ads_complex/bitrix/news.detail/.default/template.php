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

<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
                <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
                <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"] . ' рублей'?></strong></p>
            </div>
        </div>
    </div>
</div>

<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: -150px;">
                <div class="mb-5">
                    <div class="slide-one-item home-slider owl-carousel">
                        <? if ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]) {?>
                            <div><img src="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"];?>" alt="Image" class="img-fluid"></div>
                        <?} else {
                            foreach ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $arItem): ?>
                                <div><img src="<?=$arItem["SRC"];?>" alt="Image" class="img-fluid"></div>
                        <?endforeach;}?>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <strong class="text-success h1 mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"] . ' рублей'?></strong>
                        </div>
                        <div class="col-md-6">
                            <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                <li>
                                    <span class="property-specs"><?=GetMessage("DATE_UPDATE")?></span>
                                    <span class="property-specs-number"><?=date('d.m.Y',strtotime($arResult["TIMESTAMP_X"]));?></span>

                                </li>
                                <li>
                                    <span class="property-specs"><?=$arResult["DISPLAY_PROPERTIES"]["FLOORS"]["NAME"]?></span>
                                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"]?></span>

                                </li>
                                <li>
                                    <span class="property-specs"><?=$arResult["DISPLAY_PROPERTIES"]["SQUARE"]["NAME"]?></span>
                                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["SQUARE"]["VALUE"]?> м<sup>2</sup></span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?=$arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["NAME"]?></span>
                            <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]?></strong>
                        </div>
                        <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                            <span class="d-inline-block text-black mb-0 caption-text"><?=$arResult["DISPLAY_PROPERTIES"]["GARAGE"]["NAME"]?></span>
                            <strong class="d-block"><? if($arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"]){
                                    echo $arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"];}
                                else{
                                    echo GetMessage("NO");}
                                ?></strong>
                        </div>
                    </div>
                    <h2 class="h4 text-black"><?=GetMessage("MORE_INFO")?></h2>
                    <p><?=$arResult["DETAIL_TEXT"]?></p>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="h4 text-black mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["NAME"]?></h2>
                        </div>

                            <? if ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]) {?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <a href="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"];?>" class="image-popup gal-item"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"];?>" alt="Image" class="img-fluid"></a>
                        </div>
                            <?} else {
                                foreach ($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $arItem): ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <a href="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"];?>" class="image-popup gal-item"><img src="<?=$arItem["SRC"];?>" alt="Image" class="img-fluid"></a>
                        </div>
                                <?endforeach;}?>


                    </div>

                    <?if($arResult["DISPLAY_PROPERTIES"]["LINKS"]){?>
                        <?echo $arResult["DISPLAY_PROPERTIES"]["LINKS"]["NAME"] . ":";?><br/>
                        <?foreach ($arResult["DISPLAY_PROPERTIES"]["LINKS"]["VALUE"] as $value){?>
                            <a href="<?=$value?>"><?=$value?></a><br/>
                        <?}?>
                        <?}?>
                <br/>
                    <?=$arResult["DISPLAY_PROPERTIES"]["ADDITIONS"]["NAME"]?>:&nbsp;
                    <?if(is_array($arResult["DISPLAY_PROPERTIES"]["ADDITIONS"]["DISPLAY_VALUE"])):?>
                        <?=implode("&nbsp;/&nbsp;", $arResult["DISPLAY_PROPERTIES"]["ADDITIONS"]["DISPLAY_VALUE"]);?>
                    <?else:?>
                        <?=$arResult["DISPLAY_PROPERTIES"]["ADDITIONS"]["DISPLAY_VALUE"];?>
                    <?endif?>

                </div>
            </div>
            <div class="col-lg-4 pl-md-5">

                <div class="bg-white widget border rounded">

                    <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                    <form action="" class="form-contact-agent">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>

                <div class="bg-white widget border rounded">
                    <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
                </div>

            </div>

        </div>
    </div>
</div>

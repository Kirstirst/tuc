<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
echo '<pre>';
//print_r($arParams);
echo '</pre>';
?>
<? if (!empty($arResult["ERROR_MESSAGE"])) {
    foreach ($arResult["ERROR_MESSAGE"] as $v)
        ShowError($v);
}
if ($arResult["OK_MESSAGE"] <> '') {
    ?>
    <div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><?
}
?>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
                    <?= bitrix_sessid_post() ?>
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold"
                                   for="fullname"><?= GetMessage("MFT_NAME") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?>
                                    <span class="mf-req">*</span><? endif ?></label>
                            <input type="text" name="user_name" class="form-control"
                                   placeholder="<?= $arResult["AUTHOR_NAME"] ?>">

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold"
                                   for="email"><?= GetMessage("MFT_EMAIL") ?><? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?>
                                    <span class="mf-req">*</span><? endif ?></label>
                            <input type="email" name="user_email" class="form-control"
                                   placeholder="<?= $arResult["AUTHOR_EMAIL"] ?>">
                        </div>


                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="message"><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
                            <textarea name="MESSAGE" id="message" cols="30" rows="5" class="form-control"
                                      placeholder="<?=$arResult["MESSAGE"]?>"></textarea>
                        </div>
                    </div>
                    <? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
                        <div class="mf-captcha">
                            <div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
                            <input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180"
                                 height="40" alt="CAPTCHA">
                            <div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span>
                            </div>
                            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
                        </div>
                    <? endif; ?>
                    <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" name="submit"  value="<?= GetMessage("MFT_SUBMIT") ?>" class="btn btn-primary  py-2 px-4 rounded-0">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/contact.php"
                    )
                ); ?>

            </div>
        </div>
    </div>
</div>
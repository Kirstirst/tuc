<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?> <div class="site-section border-bottom">
    <div class="container">

                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "COMPONENT_TEMPLATE" => ".default",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/info.php"
                    )
                );?>
            </div>
        </div>

    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
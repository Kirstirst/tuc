<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?>
    <div class="site-section border-bottom">
        <div class="container">

                                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "COMPONENT_TEMPLATE" => ".default",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/company.php"
                        )
                    );?>
                </div>
            </div>
      

<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
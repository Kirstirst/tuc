<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"clear", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "arrows",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "5",
		"PATH_TO_USER_PROFILE" => "",
		"RATING_TYPE" => "",
		"RESTART" => "N",
		"SHOW_ITEM_DATE_CHANGE" => "N",
		"SHOW_ITEM_TAGS" => "N",
		"SHOW_ORDER_BY" => "N",
		"SHOW_RATING" => "",
		"SHOW_TAGS_CLOUD" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"arrFILTER" => array(
			0 => "iblock_rew",
		),
		"arrFILTER_blog" => array(
			0 => "all",
		),
		"arrFILTER_forum" => array(
			0 => "all",
		),
		"arrFILTER_iblock_ads" => array(
			0 => "all",
		),
		"arrFILTER_iblock_products" => array(
			0 => "all",
		),
		"arrFILTER_iblock_rest_entity" => array(
			0 => "all",
		),
		"arrFILTER_iblock_rew" => array(
			0 => "all",
		),
		"arrFILTER_iblock_services" => array(
			0 => "all",
		),
		"arrFILTER_iblock_vacancies" => array(
			0 => "all",
		),
		"arrFILTER_main" => array(
		),
		"COMPONENT_TEMPLATE" => "clear"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list",
	"",
	Array(
		"AGENT_COUNT" => "2",
		"CACHE_FILTER" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"HLBLOCK_TNAME" => "agents"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
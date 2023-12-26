<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
?><?$APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "forgot", Array(
	"AUTH_AUTH_URL" => "/polzovatel/auth.php",	// Страница для авторизации
		"AUTH_REGISTER_URL" => "/polzovatel/registratsiya.php",	// Страница для регистрации
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
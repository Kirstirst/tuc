<?
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/events.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/events.php");
if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/hlEvents.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/hlEvents.php");

AddEventHandler("main", "OnAfterUserRegister", Array("MyClass", "OnAfterUserRegisterHandler"));

$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'AgentsOnAfterAdd', 'ClearCache');
$eventManager->addEventHandler('', 'AgentsOnAfterUpdate', 'ClearCache');
$eventManager->addEventHandler('', 'AgentsOnAfterDelete', 'ClearCache');
?>
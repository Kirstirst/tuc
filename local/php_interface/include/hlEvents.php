<?php
function ClearCache(\Bitrix\Main\Entity\Event $event) {
    $tableName = $event->getEntity()->getDBTableName();
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}
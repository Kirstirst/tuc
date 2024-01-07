<?php

namespace Sprint\Migration;


class Version20231228103550 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
    $hlblockId = $helper->Hlblock()->saveHlblock(array (
  'NAME' => 'Agents',
  'TABLE_NAME' => 'agents',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Агенты по недвижимости',
    ),
    'en' => 
    array (
      'NAME' => 'Agents',
    ),
  ),
));
    }

    public function down()
    {
        $helper = $this->getHelperManager();

        $hlblockId = $helper->Hlblock()->getHlblockIdIfExists('Agents');

        $helper->UserTypeEntity()->deleteUserTypeEntitiesIfExists(
            'HLBLOCK_' . $hlblockId,
            [
                'UF_FIO',
                'UF_ACTIVITY',
                'UF_EMAIL',
                'UF_TELEPHONE',
                'UF_WORKING',
                'UF_PHOTO',
            ]
        );
        $helper->Hlblock()->deleteHlblock($hlblockId); //your code ...
    }
}

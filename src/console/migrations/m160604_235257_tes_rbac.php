<?php

use yii\db\Migration;

class m160604_235257_tes_rbac extends Migration
{
    public function up()
    {
        $authManager = Yii::$app->authManager;
        //Permission
        $TESViewBafs = $authManager->createPermission('TESViewBafs');
        $TESViewBafs->description = 'Can view bafs';
        $authManager->add($TESViewBafs);

        $TESCreateBafs = $authManager->createPermission('TESCreateBafs');
        $TESCreateBafs->description = 'Can create bafs';
        $authManager->add($TESCreateBafs);

        $TESDeleteBafs = $authManager->createPermission('TESDeleteBafs');
        $TESDeleteBafs->description = 'Can delete bafs';
        $authManager->add($TESDeleteBafs);

        $TESUpdateBafs = $authManager->createPermission('TESUpdateBafs');
        $TESUpdateBafs->description = 'Can update bafs';
        $authManager->add($TESUpdateBafs);

        $TESViewPerks = $authManager->createPermission('TESViewPerks');
        $TESViewPerks->description = 'Can view perks';
        $authManager->add($TESViewPerks);

        $TESCreatePerks = $authManager->createPermission('TESCreatePerks');
        $TESCreatePerks->description = 'Can create perks';
        $authManager->add($TESCreatePerks);

        $TESDeletePerks = $authManager->createPermission('TESDeletePerks');
        $TESDeletePerks->description = 'Can delete perks';
        $authManager->add($TESDeletePerks);

        $TESUpdatePerks = $authManager->createPermission('TESUpdatePerks');
        $TESUpdatePerks->description = 'Can update perks';
        $authManager->add($TESUpdatePerks);

        $TESViewSpells = $authManager->createPermission('TESViewSpells');
        $TESViewSpells->description = 'Can view spells';
        $authManager->add($TESViewSpells);

        $TESCreateSpells = $authManager->createPermission('TESCreateSpells');
        $TESCreateSpells->description = 'Can create spells';
        $authManager->add($TESCreateSpells);

        $TESDeleteSpells = $authManager->createPermission('TESDeleteSpells');
        $TESDeleteSpells->description = 'Can delete spells';
        $authManager->add($TESDeleteSpells);

        $TESUpdateSpells = $authManager->createPermission('TESUpdateSpells');
        $TESUpdateSpells->description = 'Can update spells';
        $authManager->add($TESUpdateSpells);

        $TESViewInventory = $authManager->createPermission('TESViewInventory');
        $TESViewInventory->description = 'Can view inventory';
        $authManager->add($TESViewInventory);

        $TESCreateInventory = $authManager->createPermission('TESCreateInventory');
        $TESCreateInventory->description = 'Can create inventory';
        $authManager->add($TESCreateInventory);

        $TESDeleteInventory = $authManager->createPermission('TESDeleteInventory');
        $TESDeleteInventory->description = 'Can delete inventory';
        $authManager->add($TESDeleteInventory);

        $TESUpdateInventory = $authManager->createPermission('TESUpdateInventory');
        $TESUpdateInventory->description = 'Can update inventory';
        $authManager->add($TESUpdateInventory);

        $TESViewItem_List = $authManager->createPermission('TESViewItem_List');
        $TESViewItem_List->description = 'Can view item_list';
        $authManager->add($TESViewItem_List);

        $TESCreateItem_List = $authManager->createPermission('TESCreateItem_List');
        $TESCreateItem_List->description = 'Can create item_list';
        $authManager->add($TESCreateItem_List);

        $TESDeleteItem_List = $authManager->createPermission('TESDeleteItem_List');
        $TESDeleteItem_List->description = 'Can delete item_list';
        $authManager->add($TESDeleteItem_List);

        $TESUpdateItem_List = $authManager->createPermission('TESUpdateItem_List');
        $TESUpdateItem_List->description = 'Can update item_list';
        $authManager->add($TESUpdateItem_List);

        $TESViewPlayers = $authManager->createPermission('TESViewPlayers');
        $TESViewPlayers->description = 'Can view players';
        $authManager->add($TESViewPlayers);

        $TESCreatePlayers = $authManager->createPermission('TESCreatePlayers');
        $TESCreatePlayers->description = 'Can create players';
        $authManager->add($TESCreatePlayers);

        $TESDeletePlayers = $authManager->createPermission('TESDeletePlayers');
        $TESDeletePlayers->description = 'Can delete players';
        $authManager->add($TESDeletePlayers);

        $TESUpdatePlayers = $authManager->createPermission('TESUpdatePlayers');
        $TESUpdatePlayers->description = 'Can update players';
        $authManager->add($TESUpdatePlayers);

        $TESViewStats = $authManager->createPermission('TESViewStats');
        $TESViewStats->description = 'Can view stats';
        $authManager->add($TESViewStats);

        $TESCreateStats = $authManager->createPermission('TESCreateStats');
        $TESCreateStats->description = 'Can create stats';
        $authManager->add($TESCreateStats);

        $TESDeleteStats = $authManager->createPermission('TESDeleteStats');
        $TESDeleteStats->description = 'Can delete stats';
        $authManager->add($TESDeleteStats);

        $TESUpdateStats = $authManager->createPermission('TESUpdateStats');
        $TESUpdateStats->description = 'Can update stats';
        $authManager->add($TESUpdateStats);

        $TESViewSkills = $authManager->createPermission('TESViewSkills');
        $TESViewSkills->description = 'Can view skills';
        $authManager->add($TESViewSkills);

        $TESCreateSkills = $authManager->createPermission('TESCreateSkills');
        $TESCreateSkills->description = 'Can create skills';
        $authManager->add($TESCreateSkills);

        $TESDeleteSkills = $authManager->createPermission('TESDeleteSkills');
        $TESDeleteSkills->description = 'Can delete skills';
        $authManager->add($TESDeleteSkills);

        $TESUpdateSkills = $authManager->createPermission('TESUpdateSkills');
        $TESUpdateSkills->description = 'Can update skills';
        $authManager->add($TESUpdateSkills);

        $administrateRBAC = $authManager->getPermission('administrateRBAC');

        $authManager->addChild($administrateRBAC, $TESViewBafs);
        $authManager->addChild($administrateRBAC, $TESCreateBafs);
        $authManager->addChild($administrateRBAC, $TESDeleteBafs);
        $authManager->addChild($administrateRBAC, $TESUpdateBafs);
        $authManager->addChild($administrateRBAC, $TESViewPerks);
        $authManager->addChild($administrateRBAC, $TESCreatePerks);
        $authManager->addChild($administrateRBAC, $TESDeletePerks);
        $authManager->addChild($administrateRBAC, $TESUpdatePerks);
        $authManager->addChild($administrateRBAC, $TESViewSpells);
        $authManager->addChild($administrateRBAC, $TESCreateSpells);
        $authManager->addChild($administrateRBAC, $TESDeleteSpells);
        $authManager->addChild($administrateRBAC, $TESUpdateSpells);
        $authManager->addChild($administrateRBAC, $TESViewInventory);
        $authManager->addChild($administrateRBAC, $TESCreateInventory);
        $authManager->addChild($administrateRBAC, $TESDeleteInventory);
        $authManager->addChild($administrateRBAC, $TESUpdateInventory);
        $authManager->addChild($administrateRBAC, $TESViewItem_List);
        $authManager->addChild($administrateRBAC, $TESCreateItem_List);
        $authManager->addChild($administrateRBAC, $TESDeleteItem_List);
        $authManager->addChild($administrateRBAC, $TESUpdateItem_List);
        $authManager->addChild($administrateRBAC, $TESViewPlayers);
        $authManager->addChild($administrateRBAC, $TESCreatePlayers);
        $authManager->addChild($administrateRBAC, $TESDeletePlayers);
        $authManager->addChild($administrateRBAC, $TESUpdatePlayers);
        $authManager->addChild($administrateRBAC, $TESViewStats);
        $authManager->addChild($administrateRBAC, $TESCreateStats);
        $authManager->addChild($administrateRBAC, $TESDeleteStats);
        $authManager->addChild($administrateRBAC, $TESUpdateStats);
        $authManager->addChild($administrateRBAC, $TESViewSkills);
        $authManager->addChild($administrateRBAC, $TESCreateSkills);
        $authManager->addChild($administrateRBAC, $TESDeleteSkills);
        $authManager->addChild($administrateRBAC, $TESUpdateSkills);
    }

    public function down()
    {
        $authManager = Yii::$app->authManager;
        $TESViewBafs = $authManager->getPermission('TESViewBafs');
        $TESCreateBafs = $authManager->getPermission('TESCreateBafs');
        $TESDeleteBafs = $authManager->getPermission('TESDeleteBafs');
        $TESUpdateBafs = $authManager->getPermission('TESUpdateBafs');
        $TESViewPerks = $authManager->getPermission('TESViewPerks');
        $TESCreatePerks = $authManager->getPermission('TESCreatePerks');
        $TESDeletePerks = $authManager->getPermission('TESDeletePerks');
        $TESUpdatePerks = $authManager->getPermission('TESUpdatePerks');
        $TESViewSpells = $authManager->getPermission('TESViewSpells');
        $TESCreateSpells = $authManager->getPermission('TESCreateSpells');
        $TESDeleteSpells = $authManager->getPermission('TESDeleteSpells');
        $TESUpdateSpells = $authManager->getPermission('TESUpdateSpells');
        $TESViewInventory = $authManager->getPermission('TESViewInventory');
        $TESCreateInventory = $authManager->getPermission('TESCreateInventory');
        $TESDeleteInventory = $authManager->getPermission('TESDeleteInventory');
        $TESUpdateInventory = $authManager->getPermission('TESUpdateInventory');
        $TESViewItem_List = $authManager->getPermission('TESViewItem_List');
        $TESCreateItem_List = $authManager->getPermission('TESCreateItem_List');
        $TESDeleteItem_List = $authManager->getPermission('TESDeleteItem_List');
        $TESUpdateItem_List = $authManager->getPermission('TESUpdateItem_List');
        $TESViewPlayers = $authManager->getPermission('TESViewPlayers');
        $TESCreatePlayers = $authManager->getPermission('TESCreatePlayers');
        $TESDeletePlayers = $authManager->getPermission('TESDeletePlayers');
        $TESUpdatePlayers = $authManager->getPermission('TESUpdatePlayers');
        $TESViewStats = $authManager->getPermission('TESViewStats');
        $TESCreateStats = $authManager->getPermission('TESCreateStats');
        $TESDeleteStats = $authManager->getPermission('TESDeleteStats');
        $TESUpdateStats = $authManager->getPermission('TESUpdateStats');
        $TESViewSkills = $authManager->getPermission('TESViewSkills');
        $TESCreateSkills = $authManager->getPermission('TESCreateSkills');
        $TESDeleteSkills = $authManager->getPermission('TESDeleteSkills');
        $TESUpdateSkills = $authManager->getPermission('TESUpdateSkills');
        $administrateRBAC = $authManager->getPermission('administrateRBAC');
        $authManager->removeChild($administrateRBAC, $TESViewBafs);
        $authManager->removeChild($administrateRBAC, $TESCreateBafs);
        $authManager->removeChild($administrateRBAC, $TESDeleteBafs);
        $authManager->removeChild($administrateRBAC, $TESUpdateBafs);
        $authManager->removeChild($administrateRBAC, $TESViewPerks);
        $authManager->removeChild($administrateRBAC, $TESCreatePerks);
        $authManager->removeChild($administrateRBAC, $TESDeletePerks);
        $authManager->removeChild($administrateRBAC, $TESUpdatePerks);
        $authManager->removeChild($administrateRBAC, $TESViewSpells);
        $authManager->removeChild($administrateRBAC, $TESCreateSpells);
        $authManager->removeChild($administrateRBAC, $TESDeleteSpells);
        $authManager->removeChild($administrateRBAC, $TESUpdateSpells);
        $authManager->removeChild($administrateRBAC, $TESViewInventory);
        $authManager->removeChild($administrateRBAC, $TESCreateInventory);
        $authManager->removeChild($administrateRBAC, $TESDeleteInventory);
        $authManager->removeChild($administrateRBAC, $TESUpdateInventory);
        $authManager->removeChild($administrateRBAC, $TESViewItem_List);
        $authManager->removeChild($administrateRBAC, $TESCreateItem_List);
        $authManager->removeChild($administrateRBAC, $TESDeleteItem_List);
        $authManager->removeChild($administrateRBAC, $TESUpdateItem_List);
        $authManager->removeChild($administrateRBAC, $TESViewPlayers);
        $authManager->removeChild($administrateRBAC, $TESCreatePlayers);
        $authManager->removeChild($administrateRBAC, $TESDeletePlayers);
        $authManager->removeChild($administrateRBAC, $TESUpdatePlayers);
        $authManager->removeChild($administrateRBAC, $TESViewStats);
        $authManager->removeChild($administrateRBAC, $TESCreateStats);
        $authManager->removeChild($administrateRBAC, $TESDeleteStats);
        $authManager->removeChild($administrateRBAC, $TESUpdateStats);
        $authManager->removeChild($administrateRBAC, $TESViewSkills);
        $authManager->removeChild($administrateRBAC, $TESCreateSkills);
        $authManager->removeChild($administrateRBAC, $TESDeleteSkills);
        $authManager->removeChild($administrateRBAC, $TESUpdateSkills);
        return false;
    }
}

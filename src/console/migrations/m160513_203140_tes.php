<?php

use yii\db\Migration;

class m160513_203140_tes extends Migration
{
    public function up()
    {
        $this->createTable('{{%bafs}}', [
            'player_id' => $this->primaryKey(),
            'baf_name' => $this->string()->notNull(),
            'baf_desc' => $this->text()
        ]);
        $this->createTable('{{%inventory}}', [
            'inventory_id' => $this->primaryKey(),
            'player_id' => $this->integer()->notNull(),
            'item_id' => $this->integer()->notNull(),
            'count' => $this->integer()->notNull(),
            'cost' => $this->integer()->notNull(),
            'quality' => $this->integer()->notNull()
        ]);
        $this->createTable('{{%item_list}}', [
            'item_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'class' => $this->string()->notNull(),
            'type' => $this->string()->notNull(),
            'weight' => $this->integer()->notNull(),
            'cost' => $this->integer()->notNull(),
            'mbaff_first' => $this->string()->notNull(),
            'mbaff_second' => $this->string()->notNull(),
            'item_desc' => $this->text()->notNull()
        ]);
        $this->createTable('{{%perks}}', [
            'player_id' => $this->primaryKey(),
            'perk_name' => $this->string()->notNull(),
            'perk_value' => $this->integer()->notNull(),
            'perk_desc' => $this->text()
        ]);
        $this->createTable('{{%players}}', [
            'player_id' => $this->primaryKey(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string(),
            'sex' => $this->integer()->notNull(),
            'race' => $this->string()->notNull(),
            'age' => $this->integer()->notNull(),
            'legend' => $this->text()
        ]);
        $this->createTable('{{%stats}}', [
            'player_id' => $this->primaryKey(),
            'health' => $this->integer()->notNull(),
            'endurance' => $this->integer()->notNull(),
            'intelligence' => $this->integer()->notNull(),
            'dexterity' => $this->integer()->notNull(),
            'charisma' => $this->integer()->notNull(),
            'morals' => $this->integer()->notNull(),
            'good_lucky' => $this->integer()->notNull(),
            'shout' => $this->integer()->notNull()
        ]);
        $this->createTable('{{%spells}}', [
            'player_id' => $this->primaryKey(),
            'spell_name' => $this->string()->notNull(),
            'spell_desc' => $this->text()
        ]);
        $this->createTable('{{%skills}}', [
            'player_id' => $this->primaryKey(),
            'illusion' => $this->integer()->notNull(),
            'conjuration' => $this->integer()->notNull(),
            'destruction' => $this->integer()->notNull(),
            'restoration' => $this->integer()->notNull(),
            'alteration' => $this->integer()->notNull(),
            'enchanting' => $this->integer()->notNull(),
            'smithing' => $this->integer()->notNull(),
            'heavy_armor' => $this->integer()->notNull(),
            'block' => $this->integer()->notNull(),
            'two_handed' => $this->integer()->notNull(),
            'one_handed' => $this->integer()->notNull(),
            'archery' => $this->integer()->notNull(),
            'light_armor' => $this->integer()->notNull(),
            'sneak' => $this->integer()->notNull(),
            'lockpicking' => $this->integer()->notNull(),
            'pickpocket' => $this->integer()->notNull(),
            'speech' => $this->integer()->notNull(),
            'alchemy' => $this->integer()->notNull()
        ]);
    }

    public function down()
    {
        echo "m160513_203140_tes cannot be reverted.\n";

        return false;
    }
}

<?php

use yii\db\Migration;

class m160513_203140_tes extends Migration
{
    public function up()
    {
        $this->createTable('{{%bafs}}', [
            'player_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'desc' => $this->text()
        ]);
        $this->createTable('{{%perks}}', [
            'player_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'value' => $this->integer()->notNull(),
            'desc' => $this->text()
        ]);
        $this->createTable('{{%spells}}', [
            'player_id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'desc' => $this->text()
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
            'desc' => $this->text()->notNull()
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
            'lock_picking' => $this->integer()->notNull(),
            'pickpocket' => $this->integer()->notNull(),
            'speech' => $this->integer()->notNull(),
            'alchemy' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('fk_bafs_player_id', '{{%bafs}}', 'player_id', '{{%players}}', 'player_id', null, 'CASCADE');
        $this->addForeignKey('fk_perks_player_id', '{{%perks}}', 'player_id', '{{%players}}', 'player_id', null, 'CASCADE');
        $this->addForeignKey('fk_spells_player_id', '{{%spells}}', 'player_id', '{{%players}}', 'player_id', null, 'CASCADE');
        $this->addForeignKey('fk_inventory_player_id', '{{%inventory}}', 'player_id', '{{%players}}', 'player_id', null, 'CASCADE');
        $this->addForeignKey('fk_inventory_item_id', '{{%inventory}}', 'item_id', '{{%item_list}}', 'item_id', null, 'CASCADE');
        $this->addForeignKey('fk_stats_player_id', '{{%stats}}', 'player_id', '{{%players}}', 'player_id', null, 'CASCADE');
        $this->addForeignKey('fk_skills_player_id', '{{%skills}}', 'player_id', '{{%players}}', 'player_id', null, 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_bafs_player_id', '{{%bafs}}');
        $this->dropForeignKey('fk_perks_player_id', '{{%perks}}');
        $this->dropForeignKey('fk_spells_player_id', '{{%spells}}');
        $this->dropForeignKey('fk_inventory_player_id', '{{%inventory}}');
        $this->dropForeignKey('fk_inventory_item_id', '{{%inventory}');
        $this->dropForeignKey('fk_stats_player_id', '{{%stats}}');
        $this->dropForeignKey('fk_skills_player_id', '{{%skills}}');
        $this->dropTable('{{%bafs}}');
        $this->dropTable('{{%perks}}');
        $this->dropTable('{{%spells}}');
        $this->dropTable('{{%inventory}}');
        $this->dropTable('{{%item_list}}');
        $this->dropTable('{{%players}}');
        $this->dropTable('{{%stats}}');
        $this->dropTable('{{%skills}}');
    }
}

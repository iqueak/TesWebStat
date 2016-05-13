<?php

use yii\db\Migration;

/**
 * Class m160509_121212_blog
 */
class m160509_121212_blog extends Migration
{
    public function up()
    {
        $this->createTable('{{%blog}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'summary' => $this->text(),
            'content' => $this->text(),
            'status' => $this->integer(3)->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull()
        ]);
        $this->createTable('{{%blog_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull()
        ]);
        $this->addForeignKey('fk_blog_category_id', '{{%blog}}', 'category_id', '{{%blog_category}}', 'id', null, 'CASCADE');
        $this->addForeignKey('fk_blog_author_id', '{{%blog}}', 'author_id', '{{%auth_user}}', 'id', null, 'CASCADE');

    }

    public function down()
    {
        $this->dropForeignKey('fk_blog_category_id', '{{%blog}}');
        $this->dropForeignKey('fk_blog_author_id', '{{%blog}}');        
        $this->dropTable('{{%blog}}');
        $this->dropTable('{{%blog_category}}');
    }
}

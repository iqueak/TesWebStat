<?php

use yii\db\Migration;

class m160604_183103_blog_rbac extends Migration
{
    public function up()
    {
        $authManager = Yii::$app->authManager;
        //Permission
        $BLViewBlog = $authManager->createPermission('BLViewBlog');
        $BLViewBlog->description = 'Can view blog';
        $authManager->add($BLViewBlog);

        $BLCreateBlog = $authManager->createPermission('BLCreateBlog');
        $BLCreateBlog->description = 'Can create blog';
        $authManager->add($BLCreateBlog);

        $BLDeleteBlog = $authManager->createPermission('BLDeleteBlog');
        $BLDeleteBlog->description = 'Can delete blog';
        $authManager->add($BLDeleteBlog);

        $BLUpdateBlog = $authManager->createPermission('BLUpdateBlog');
        $BLUpdateBlog->description = 'Can update blog';
        $authManager->add($BLUpdateBlog);

        $BLViewBlogCategory = $authManager->createPermission('BLViewBlogCategory');
        $BLViewBlogCategory->description = 'Can view blog category';
        $authManager->add($BLViewBlogCategory);

        $BLCreateBlogCategory = $authManager->createPermission('BLCreateBlogCategory');
        $BLCreateBlogCategory->description = 'Can create blog category';
        $authManager->add($BLCreateBlogCategory);

        $BLDeleteBlogCategory = $authManager->createPermission('BLDeleteBlogCategory');
        $BLDeleteBlogCategory->description = 'Can delete blog category';
        $authManager->add($BLDeleteBlogCategory);

        $BLUpdateBlogCategory = $authManager->createPermission('BLUpdateBlogCategory');
        $BLUpdateBlogCategory->description = 'Can update blog category';
        $authManager->add($BLUpdateBlogCategory);

        $administrateRBAC = $authManager->getPermission('administrateRBAC');

        $authManager->addChild($administrateRBAC, $BLViewBlog);
        $authManager->addChild($administrateRBAC, $BLCreateBlog);
        $authManager->addChild($administrateRBAC, $BLUpdateBlog);
        $authManager->addChild($administrateRBAC, $BLDeleteBlog);
        $authManager->addChild($administrateRBAC, $BLViewBlogCategory);
        $authManager->addChild($administrateRBAC, $BLCreateBlogCategory);
        $authManager->addChild($administrateRBAC, $BLUpdateBlogCategory);
        $authManager->addChild($administrateRBAC, $BLDeleteBlogCategory);
        
    }

    public function down()
    {
        $authManager = Yii::$app->authManager;
        $BLViewBlog = $authManager->getPermission('BLViewBlog');
        $BLCreateBlog = $authManager->getPermission('BLCreateBlog');
        $BLUpdateBlog = $authManager->getPermission('BLUpdateBlog');
        $BLDeleteBlog = $authManager->getPermission('BLDeleteBlog');
        $BLViewBlogCategory = $authManager->getPermission('BLViewBlogCategory');
        $BLCreateBlogCategory = $authManager->getPermission('BLCreateBlogCategory');
        $BLUpdateBlogCategory = $authManager->getPermission('BLUpdateBlogCategory');
        $BLDeleteBlogCategory = $authManager->getPermission('BLDeleteBlogCategory');
        $administrateRBAC = $authManager->getPermission('administrateRBAC');

        $authManager->removeChild($administrateRBAC, $BLViewBlog);
        $authManager->removeChild($administrateRBAC, $BLCreateBlog);
        $authManager->removeChild($administrateRBAC, $BLUpdateBlog);
        $authManager->removeChild($administrateRBAC, $BLDeleteBlog);
        $authManager->removeChild($administrateRBAC, $BLViewBlogCategory);
        $authManager->removeChild($administrateRBAC, $BLCreateBlogCategory);
        $authManager->removeChild($administrateRBAC, $BLUpdateBlogCategory);
        $authManager->removeChild($administrateRBAC, $BLDeleteBlogCategory);
        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

<?php

namespace common\models;

use common\models\behaviors\DateTimeBehavior;
use DateTime;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%blog_category}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property DateTime $created_at
 * @property DateTime $updated_at
 *
 * @property Blog[] $blogs
 */
class BlogCategory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog_category}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            DateTimeBehavior::className()
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(Blog::className(), ['category_id' => 'id']);
    }
}

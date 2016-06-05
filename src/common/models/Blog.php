<?php

namespace common\models;

use common\models\behaviors\DateTimeBehavior;
use DateTime;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property integer $id
 * @property integer $author_id
 * @property integer $category_id
 * @property string $title
 * @property string $slug
 * @property string $summary
 * @property string $content
 * @property integer $status
 * @property DateTime $created_at
 * @property DateTime $updated_at
 *
 * @property User $author
 * @property BlogCategory $category
 */
class Blog extends ActiveRecord
{
    const STATUS_DRAFT = 0;
    const STATUS_DELETED = 1;
    const STATUS_PUBLISHED = 2;

    public $statusLabels = [
        0 => 'DRAFT',
        1 => 'DELETED',
        2 => 'PUBLISHED'
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            DateTimeBehavior::className(),
            'slug' => [
                'class' => 'yii\zelenin\yii2-slug-behavior\Slug',
                'slugAttribute' => 'slug',
                'attribute' => ['title','id'],
                'ensureUnique' => true,
                'replacement' => '-',
                'lowercase' => true,
                'immutable' => false,
                'transliterateOptions' => 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'category_id', 'title', 'slug', 'status', 'created_at', 'updated_at'], 'required'],
            [['author_id', 'category_id', 'status'], 'integer'],
            [['summary', 'content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => BlogCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'summary' => 'Summary',
            'content' => 'Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(BlogCategory::className(), ['id' => 'category_id']);
    }
}

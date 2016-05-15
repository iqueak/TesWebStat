<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%item_list}}".
 *
 * @property integer $item_id
 * @property string $name
 * @property string $class
 * @property string $type
 * @property integer $weight
 * @property integer $cost
 * @property string $mbaff_first
 * @property string $mbaff_second
 * @property string $desc
 *
 * @property Inventory[] $inventories
 */
class ItemList extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%item_list}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'class', 'type', 'weight', 'cost', 'mbaff_first', 'mbaff_second', 'desc'], 'required'],
            [['weight', 'cost'], 'integer'],
            [['desc'], 'string'],
            [['name', 'class', 'type', 'mbaff_first', 'mbaff_second'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'name' => 'Name',
            'class' => 'Class',
            'type' => 'Type',
            'weight' => 'Weight',
            'cost' => 'Cost',
            'mbaff_first' => 'Mbaff First',
            'mbaff_second' => 'Mbaff Second',
            'desc' => 'Desc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['item_id' => 'item_id']);
    }
}

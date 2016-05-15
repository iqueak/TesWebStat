<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%inventory}}".
 *
 * @property integer $inventory_id
 * @property integer $player_id
 * @property integer $item_id
 * @property integer $count
 * @property integer $cost
 * @property integer $quality
 *
 * @property ItemList $item
 * @property Players $player
 */
class Inventory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inventory}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'item_id', 'count', 'cost', 'quality'], 'required'],
            [['player_id', 'item_id', 'count', 'cost', 'quality'], 'integer'],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemList::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Players::className(), 'targetAttribute' => ['player_id' => 'player_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inventory_id' => 'Inventory ID',
            'player_id' => 'Player ID',
            'item_id' => 'Item ID',
            'count' => 'Count',
            'cost' => 'Cost',
            'quality' => 'Quality',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(ItemList::className(), ['item_id' => 'item_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Players::className(), ['player_id' => 'player_id']);
    }
}

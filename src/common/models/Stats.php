<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%stats}}".
 *
 * @property integer $player_id
 * @property integer $health
 * @property integer $endurance
 * @property integer $intelligence
 * @property integer $dexterity
 * @property integer $charisma
 * @property integer $morals
 * @property integer $good_lucky
 * @property integer $shout
 *
 * @property Players $player
 */
class Stats extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%stats}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['health', 'endurance', 'intelligence', 'dexterity', 'charisma', 'morals', 'good_lucky', 'shout'], 'required'],
            [['health', 'endurance', 'intelligence', 'dexterity', 'charisma', 'morals', 'good_lucky', 'shout'], 'integer'],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Players::className(), 'targetAttribute' => ['player_id' => 'player_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_id' => 'Player ID',
            'health' => 'Health',
            'endurance' => 'Endurance',
            'intelligence' => 'Intelligence',
            'dexterity' => 'Dexterity',
            'charisma' => 'Charisma',
            'morals' => 'Morals',
            'good_lucky' => 'Good Lucky',
            'shout' => 'Shout',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Players::className(), ['player_id' => 'player_id']);
    }
}

<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%players}}".
 *
 * @property integer $player_id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $sex
 * @property string $race
 * @property integer $age
 * @property string $legend
 *
 * @property Effects $effects
 * @property Inventory[] $inventories
 * @property Perks $perks
 * @property User $user
 * @property Skills $skills
 * @property Spells $spells
 * @property Stats $stats
 */
class Players extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%players}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'first_name', 'sex', 'race', 'age'], 'required'],
            [['user_id', 'sex', 'age'], 'integer'],
            [['legend'], 'string'],
            [['first_name', 'last_name', 'race'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_id' => 'Player ID',
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'sex' => 'Sex',
            'race' => 'Race',
            'age' => 'Age',
            'legend' => 'Legend',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEffects()
    {
        return $this->hasOne(Effects::className(), ['player_id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['player_id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerks()
    {
        return $this->hasOne(Perks::className(), ['player_id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkills()
    {
        return $this->hasOne(Skills::className(), ['player_id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpells()
    {
        return $this->hasOne(Spells::className(), ['player_id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStats()
    {
        return $this->hasOne(Stats::className(), ['player_id' => 'player_id']);
    }
}

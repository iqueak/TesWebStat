<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%skills}}".
 *
 * @property integer $player_id
 * @property integer $illusion
 * @property integer $conjuration
 * @property integer $destruction
 * @property integer $restoration
 * @property integer $alteration
 * @property integer $enchanting
 * @property integer $smithing
 * @property integer $heavy_armor
 * @property integer $block
 * @property integer $two_handed
 * @property integer $one_handed
 * @property integer $archery
 * @property integer $light_armor
 * @property integer $sneak
 * @property integer $lock_picking
 * @property integer $pickpocket
 * @property integer $speech
 * @property integer $alchemy
 *
 * @property Players $player
 */
class Skills extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%skills}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['illusion', 'conjuration', 'destruction', 'restoration', 'alteration', 'enchanting', 'smithing', 'heavy_armor', 'block', 'two_handed', 'one_handed', 'archery', 'light_armor', 'sneak', 'lock_picking', 'pickpocket', 'speech', 'alchemy'], 'required'],
            [['illusion', 'conjuration', 'destruction', 'restoration', 'alteration', 'enchanting', 'smithing', 'heavy_armor', 'block', 'two_handed', 'one_handed', 'archery', 'light_armor', 'sneak', 'lock_picking', 'pickpocket', 'speech', 'alchemy'], 'integer'],
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
            'illusion' => 'Illusion',
            'conjuration' => 'Conjuration',
            'destruction' => 'Destruction',
            'restoration' => 'Restoration',
            'alteration' => 'Alteration',
            'enchanting' => 'Enchanting',
            'smithing' => 'Smithing',
            'heavy_armor' => 'Heavy Armor',
            'block' => 'Block',
            'two_handed' => 'Two Handed',
            'one_handed' => 'One Handed',
            'archery' => 'Archery',
            'light_armor' => 'Light Armor',
            'sneak' => 'Sneak',
            'lock_picking' => 'Lock Picking',
            'pickpocket' => 'Pickpocket',
            'speech' => 'Speech',
            'alchemy' => 'Alchemy',
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

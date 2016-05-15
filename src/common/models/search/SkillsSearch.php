<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Skills;

/**
 * SkillsSearch represents the model behind the search form about `common\models\Skills`.
 */
class SkillsSearch extends Skills
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'illusion', 'conjuration', 'destruction', 'restoration', 'alteration', 'enchanting', 'smithing', 'heavy_armor', 'block', 'two_handed', 'one_handed', 'archery', 'light_armor', 'sneak', 'lock_picking', 'pickpocket', 'speech', 'alchemy'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Skills::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'player_id' => $this->player_id,
            'illusion' => $this->illusion,
            'conjuration' => $this->conjuration,
            'destruction' => $this->destruction,
            'restoration' => $this->restoration,
            'alteration' => $this->alteration,
            'enchanting' => $this->enchanting,
            'smithing' => $this->smithing,
            'heavy_armor' => $this->heavy_armor,
            'block' => $this->block,
            'two_handed' => $this->two_handed,
            'one_handed' => $this->one_handed,
            'archery' => $this->archery,
            'light_armor' => $this->light_armor,
            'sneak' => $this->sneak,
            'lock_picking' => $this->lock_picking,
            'pickpocket' => $this->pickpocket,
            'speech' => $this->speech,
            'alchemy' => $this->alchemy,
        ]);

        return $dataProvider;
    }
}

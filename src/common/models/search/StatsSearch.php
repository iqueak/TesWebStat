<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Stats;

/**
 * StatsSearch represents the model behind the search form about `common\models\Stats`.
 */
class StatsSearch extends Stats
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'health', 'endurance', 'intelligence', 'dexterity', 'charisma', 'morals', 'good_lucky', 'shout'], 'integer'],
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
        $query = Stats::find();

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
            'health' => $this->health,
            'endurance' => $this->endurance,
            'intelligence' => $this->intelligence,
            'dexterity' => $this->dexterity,
            'charisma' => $this->charisma,
            'morals' => $this->morals,
            'good_lucky' => $this->good_lucky,
            'shout' => $this->shout,
        ]);

        return $dataProvider;
    }
}

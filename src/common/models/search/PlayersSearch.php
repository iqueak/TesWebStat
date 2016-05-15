<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Players;

/**
 * PlayersSearch represents the model behind the search form about `common\models\Players`.
 */
class PlayersSearch extends Players
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'user_id', 'sex', 'age'], 'integer'],
            [['first_name', 'last_name', 'race', 'legend'], 'safe'],
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
        $query = Players::find();

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
            'user_id' => $this->user_id,
            'sex' => $this->sex,
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'race', $this->race])
            ->andFilterWhere(['like', 'legend', $this->legend]);

        return $dataProvider;
    }
}

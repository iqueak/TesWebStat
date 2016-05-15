<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ItemList;

/**
 * ItemListSearch represents the model behind the search form about `common\models\ItemList`.
 */
class ItemListSearch extends ItemList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'weight', 'cost'], 'integer'],
            [['name', 'class', 'type', 'mbaff_first', 'mbaff_second', 'desc'], 'safe'],
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
        $query = ItemList::find();

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
            'item_id' => $this->item_id,
            'weight' => $this->weight,
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'class', $this->class])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'mbaff_first', $this->mbaff_first])
            ->andFilterWhere(['like', 'mbaff_second', $this->mbaff_second])
            ->andFilterWhere(['like', 'desc', $this->desc]);

        return $dataProvider;
    }
}

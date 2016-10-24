<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cost;

/**
 * CostSearch represents the model behind the search form about `app\models\Cost`.
 */
class CostSearch extends Cost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cost_xinterger1'], 'integer'],
            [['cost_desc', 'cost_remarks', 'cost_xvarchar1', 'cost_xdate1'], 'safe'],
            [['cost_xboolean1'], 'boolean'],
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
        $query = Cost::find();

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
            'id' => $this->id,
            'cost_xdate1' => $this->cost_xdate1,
            'cost_xboolean1' => $this->cost_xboolean1,
            'cost_xinterger1' => $this->cost_xinterger1,
        ]);

        $query->andFilterWhere(['like', 'cost_desc', $this->cost_desc])
            ->andFilterWhere(['like', 'cost_remarks', $this->cost_remarks])
            ->andFilterWhere(['like', 'cost_xvarchar1', $this->cost_xvarchar1]);

        return $dataProvider;
    }
}

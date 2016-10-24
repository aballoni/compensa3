<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Budget;

/**
 * BudgetSearch represents the model behind the search form about `app\models\Budget`.
 */
class BudgetSearch extends Budget
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dep_id', 'budget_interger1'], 'integer'],
            [['budget_desc', 'budget_remarks', 'budget_xvarchar1', 'budget_xdate1'], 'safe'],
            [['budget_xboolean1'], 'boolean'],
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
        $query = Budget::find();

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
            'dep_id' => $this->dep_id,
            'budget_xdate1' => $this->budget_xdate1,
            'budget_xboolean1' => $this->budget_xboolean1,
            'budget_interger1' => $this->budget_interger1,
        ]);

        $query->andFilterWhere(['like', 'budget_desc', $this->budget_desc])
            ->andFilterWhere(['like', 'budget_remarks', $this->budget_remarks])
            ->andFilterWhere(['like', 'budget_xvarchar1', $this->budget_xvarchar1]);

        return $dataProvider;
    }
}

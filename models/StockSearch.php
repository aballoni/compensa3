<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Stock;

/**
 * StockSearch represents the model behind the search form about `app\models\Stock`.
 */
class StockSearch extends Stock
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'stock_interger1', 'location_id', 'material_id'], 'integer'],
            [['stock_desc', 'stock_date', 'stock_xvarchar1'], 'safe'],
            [['stock_qty1', 'stock_qty2', 'stock_value1', 'stock_value2'], 'number'],
            [['stock_xboolean1'], 'boolean'],
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
        $query = Stock::find();

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
            'stock_date' => $this->stock_date,
            'stock_qty1' => $this->stock_qty1,
            'stock_qty2' => $this->stock_qty2,
            'stock_value1' => $this->stock_value1,
            'stock_value2' => $this->stock_value2,
            'stock_xboolean1' => $this->stock_xboolean1,
            'stock_interger1' => $this->stock_interger1,
            'location_id' => $this->location_id,
            'material_id' => $this->material_id,
        ]);

        $query->andFilterWhere(['like', 'stock_desc', $this->stock_desc])
            ->andFilterWhere(['like', 'stock_xvarchar1', $this->stock_xvarchar1]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cat;

/**
 * CatSearch represents the model behind the search form about `app\models\Cat`.
 */
class CatSearch extends Cat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat_xinterger1'], 'integer'],
            [['cat_desc', 'cat_xdate1', 'cat_xvarchar1'], 'safe'],
            [['cat_xboolean1'], 'boolean'],
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
        $query = Cat::find();

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
            'cat_xinterger1' => $this->cat_xinterger1,
            'cat_xdate1' => $this->cat_xdate1,
            'cat_xboolean1' => $this->cat_xboolean1,
        ]);

        $query->andFilterWhere(['like', 'cat_desc', $this->cat_desc])
            ->andFilterWhere(['like', 'cat_xvarchar1', $this->cat_xvarchar1]);

        return $dataProvider;
    }
}

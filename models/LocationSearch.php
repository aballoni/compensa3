<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Location;

/**
 * LocationSearch represents the model behind the search form about `app\models\Location`.
 */
class LocationSearch extends Location
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'location_interger1'], 'integer'],
            [['location_desc', 'location_xdate1', 'location_xvarchar1'], 'safe'],
            [['location_xboolean1'], 'boolean'],
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
        $query = Location::find();

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
            'location_xdate1' => $this->location_xdate1,
            'location_xboolean1' => $this->location_xboolean1,
            'location_interger1' => $this->location_interger1,
        ]);

        $query->andFilterWhere(['like', 'location_desc', $this->location_desc])
            ->andFilterWhere(['like', 'location_xvarchar1', $this->location_xvarchar1]);

        return $dataProvider;
    }
}

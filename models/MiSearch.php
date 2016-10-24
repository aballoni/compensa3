<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mi;

/**
 * MiSearch represents the model behind the search form about `app\models\Mi`.
 */
class MiSearch extends Mi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'material_id', 'location_id', 'intclient_id', 'intuser_id'], 'integer'],
            [['mi_desc', 'timex1', 'mi_remarks'], 'safe'],
            [['mi_qty', 'mi_uprice', 'mi_tot_price'], 'number'],
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
        $query = Mi::find();

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
            'material_id' => $this->material_id,
            'location_id' => $this->location_id,
            'intclient_id' => $this->intclient_id,
            'mi_qty' => $this->mi_qty,
            'timex1' => $this->timex1,
            'intuser_id' => $this->intuser_id,
            'mi_uprice' => $this->mi_uprice,
            'mi_tot_price' => $this->mi_tot_price,
        ]);

        $query->andFilterWhere(['like', 'mi_desc', $this->mi_desc])
            ->andFilterWhere(['like', 'mi_remarks', $this->mi_remarks]);

        return $dataProvider;
    }
}

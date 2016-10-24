<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cm;

/**
 * CmSearch represents the model behind the search form about `app\models\Cm`.
 */
class CmSearch extends Cm
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cm_transporter', 'cm_xinterger1', 'cm_xinterger2', 'cm_xinterger3', 'location_from_id', 'location_to_id'], 'integer'],
            [['cm_desc', 'cm_expeditor', 'cm_expeditor_phone', 'cm_receiver', 'cm_receiver_phone', 'cm_date_expedite', 'cm_date_eta', 'cm_modal', 'cm_vessel_name', 'cm_tug_name', 'cm_truck_plate', 'cm_remarks', 'cm_xdate1', 'cm_xdate2', 'cm_xdate3', 'cm_xvarchar1', 'cm_xvarchar2', 'cm_xvarchar3'], 'safe'],
            [['cm_xboolean1', 'cm_xboolean2', 'cm_xboolean3', 'cm_xboolean4', 'cm_xboolean5'], 'boolean'],
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
        $query = Cm::find();

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
            'cm_date_expedite' => $this->cm_date_expedite,
            'cm_date_eta' => $this->cm_date_eta,
            'cm_transporter' => $this->cm_transporter,
            'cm_xdate1' => $this->cm_xdate1,
            'cm_xdate2' => $this->cm_xdate2,
            'cm_xdate3' => $this->cm_xdate3,
            'cm_xboolean1' => $this->cm_xboolean1,
            'cm_xboolean2' => $this->cm_xboolean2,
            'cm_xboolean3' => $this->cm_xboolean3,
            'cm_xboolean4' => $this->cm_xboolean4,
            'cm_xboolean5' => $this->cm_xboolean5,
            'cm_xinterger1' => $this->cm_xinterger1,
            'cm_xinterger2' => $this->cm_xinterger2,
            'cm_xinterger3' => $this->cm_xinterger3,
            'location_from_id' => $this->location_from_id,
            'location_to_id' => $this->location_to_id,
        ]);

        $query->andFilterWhere(['like', 'cm_desc', $this->cm_desc])
            ->andFilterWhere(['like', 'cm_expeditor', $this->cm_expeditor])
            ->andFilterWhere(['like', 'cm_expeditor_phone', $this->cm_expeditor_phone])
            ->andFilterWhere(['like', 'cm_receiver', $this->cm_receiver])
            ->andFilterWhere(['like', 'cm_receiver_phone', $this->cm_receiver_phone])
            ->andFilterWhere(['like', 'cm_modal', $this->cm_modal])
            ->andFilterWhere(['like', 'cm_vessel_name', $this->cm_vessel_name])
            ->andFilterWhere(['like', 'cm_tug_name', $this->cm_tug_name])
            ->andFilterWhere(['like', 'cm_truck_plate', $this->cm_truck_plate])
            ->andFilterWhere(['like', 'cm_remarks', $this->cm_remarks])
            ->andFilterWhere(['like', 'cm_xvarchar1', $this->cm_xvarchar1])
            ->andFilterWhere(['like', 'cm_xvarchar2', $this->cm_xvarchar2])
            ->andFilterWhere(['like', 'cm_xvarchar3', $this->cm_xvarchar3]);

        return $dataProvider;
    }
}

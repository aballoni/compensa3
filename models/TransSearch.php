<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trans;

/**
 * TransSearch represents the model behind the search form about `app\models\Trans`.
 */
class TransSearch extends Trans
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'trans_doc', 'nf_id', 'material_id', 'intuser_id', 'intclient_id', 'location_from_id', 'location_to_id'], 'integer'],
            [['trans_type', 'trans_uom', 'trans_remarks', 'timex1', 'timex2'], 'safe'],
            [['trans_qty', 'trans_uprice', 'trans_tot_price'], 'number'],
            [['cmline_x1', 'cmline_x2'], 'boolean'],
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
        $query = Trans::find();

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
            'trans_doc' => $this->trans_doc,
            'nf_id' => $this->nf_id,
            'material_id' => $this->material_id,
            'intuser_id' => $this->intuser_id,
            'intclient_id' => $this->intclient_id,
            'location_from_id' => $this->location_from_id,
            'location_to_id' => $this->location_to_id,
            'trans_qty' => $this->trans_qty,
            'trans_uprice' => $this->trans_uprice,
            'cmline_x1' => $this->cmline_x1,
            'cmline_x2' => $this->cmline_x2,
            'timex1' => $this->timex1,
            'timex2' => $this->timex2,
            'trans_tot_price' => $this->trans_tot_price,
        ]);

        $query->andFilterWhere(['like', 'trans_type', $this->trans_type])
            ->andFilterWhere(['like', 'trans_uom', $this->trans_uom])
            ->andFilterWhere(['like', 'trans_remarks', $this->trans_remarks]);

        return $dataProvider;
    }
}

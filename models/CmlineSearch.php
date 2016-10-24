<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cmline;

/**
 * CmlineSearch represents the model behind the search form about `app\models\Cmline`.
 */
class CmlineSearch extends Cmline
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cm_id', 'cmline_qty', 'material_id', 'nf_id', 'intuser_id', 'location_from_id', 'location_to_id'], 'integer'],
            [['cmline_manual', 'cmline_reference', 'cmline_dimensions', 'cmline_timex1', 'cmline_timex2', 'cmline_desc'], 'safe'],
            [['cmline_x1', 'cmline_x2'], 'boolean'],
            [['cmline_uprice', 'cmline_tot_price'], 'number'],
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
        $query = Cmline::find();

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
            'cm_id' => $this->cm_id,
            'cmline_qty' => $this->cmline_qty,
            'material_id' => $this->material_id,
            'nf_id' => $this->nf_id,
            'cmline_x1' => $this->cmline_x1,
            'cmline_x2' => $this->cmline_x2,
            'intuser_id' => $this->intuser_id,
            'cmline_timex1' => $this->cmline_timex1,
            'cmline_timex2' => $this->cmline_timex2,
            'location_from_id' => $this->location_from_id,
            'location_to_id' => $this->location_to_id,
            'cmline_uprice' => $this->cmline_uprice,
            'cmline_tot_price' => $this->cmline_tot_price,
        ]);

        $query->andFilterWhere(['like', 'cmline_manual', $this->cmline_manual])
            ->andFilterWhere(['like', 'cmline_reference', $this->cmline_reference])
            ->andFilterWhere(['like', 'cmline_dimensions', $this->cmline_dimensions])
            ->andFilterWhere(['like', 'cmline_desc', $this->cmline_desc]);

        return $dataProvider;
    }
}

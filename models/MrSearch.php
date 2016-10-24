<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mr;

/**
 * MrSearch represents the model behind the search form about `app\models\Mr`.
 */
class MrSearch extends Mr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'po_id', 'poline_id', 'nf_id', 'location_id', 'intuser_id'], 'integer'],
            [['mr_desc', 'timex1', 'mr_remarks'], 'safe'],
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
        $query = Mr::find();

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
            'po_id' => $this->po_id,
            'poline_id' => $this->poline_id,
            'nf_id' => $this->nf_id,
            'location_id' => $this->location_id,
            'timex1' => $this->timex1,
            'intuser_id' => $this->intuser_id,
        ]);

        $query->andFilterWhere(['like', 'mr_desc', $this->mr_desc])
            ->andFilterWhere(['like', 'mr_remarks', $this->mr_remarks]);

        return $dataProvider;
    }
}

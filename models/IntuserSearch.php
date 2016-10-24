<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Intuser;

/**
 * IntuserSearch represents the model behind the search form about `app\models\Intuser`.
 */
class IntuserSearch extends Intuser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dep_id', 'intuser_xinterger1'], 'integer'],
            [['intuser_desc', 'intuser_password', 'intuser_remarks', 'intuser_xvarchar1', 'intuser_xdate1'], 'safe'],
            [['intuser_xboolean1'], 'boolean'],
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
        $query = Intuser::find();

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
            'intuser_xdate1' => $this->intuser_xdate1,
            'intuser_xboolean1' => $this->intuser_xboolean1,
            'intuser_xinterger1' => $this->intuser_xinterger1,
        ]);

        $query->andFilterWhere(['like', 'intuser_desc', $this->intuser_desc])
            ->andFilterWhere(['like', 'intuser_password', $this->intuser_password])
            ->andFilterWhere(['like', 'intuser_remarks', $this->intuser_remarks])
            ->andFilterWhere(['like', 'intuser_xvarchar1', $this->intuser_xvarchar1]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Intclient;

/**
 * IntclientSearch represents the model behind the search form about `app\models\Intclient`.
 */
class IntclientSearch extends Intclient
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dep_id', 'intclient_xinterger1'], 'integer'],
            [['intclient_desc', 'intclient_remarks', 'intclient_xdate1', 'intclient_xvarchar1'], 'safe'],
            [['intclient_xboolean1'], 'boolean'],
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
        $query = Intclient::find();

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
            'intclient_xinterger1' => $this->intclient_xinterger1,
            'intclient_xboolean1' => $this->intclient_xboolean1,
            'intclient_xdate1' => $this->intclient_xdate1,
        ]);

        $query->andFilterWhere(['like', 'intclient_desc', $this->intclient_desc])
            ->andFilterWhere(['like', 'intclient_remarks', $this->intclient_remarks])
            ->andFilterWhere(['like', 'intclient_xvarchar1', $this->intclient_xvarchar1]);

        return $dataProvider;
    }
}

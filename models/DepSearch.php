<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dep;

/**
 * DepSearch represents the model behind the search form about `app\models\Dep`.
 */
class DepSearch extends Dep
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dep_xinterger1'], 'integer'],
            [['dep_desc', 'dep_remarks', 'dep_xdate1', 'dep_xvarchar1'], 'safe'],
            [['dep_xboolean1'], 'boolean'],
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
        $query = Dep::find();

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
            'dep_xdate1' => $this->dep_xdate1,
            'dep_xboolean1' => $this->dep_xboolean1,
            'dep_xinterger1' => $this->dep_xinterger1,
        ]);

        $query->andFilterWhere(['like', 'dep_desc', $this->dep_desc])
            ->andFilterWhere(['like', 'dep_remarks', $this->dep_remarks])
            ->andFilterWhere(['like', 'dep_xvarchar1', $this->dep_xvarchar1]);

        return $dataProvider;
    }
}

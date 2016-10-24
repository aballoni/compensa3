<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mattype;

/**
 * MattypeSearch represents the model behind the search form about `app\models\Mattype`.
 */
class MattypeSearch extends Mattype
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'mattype_xinterger1'], 'integer'],
            [['mattype_desc', 'mattype_xdate1', 'mattype_xvarchar1'], 'safe'],
            [['mattype_xboolean1'], 'boolean'],
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
        $query = Mattype::find();

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
            'mattype_xinterger1' => $this->mattype_xinterger1,
            'mattype_xdate1' => $this->mattype_xdate1,
            'mattype_xboolean1' => $this->mattype_xboolean1,
        ]);

        $query->andFilterWhere(['like', 'mattype_desc', $this->mattype_desc])
            ->andFilterWhere(['like', 'mattype_xvarchar1', $this->mattype_xvarchar1]);

        return $dataProvider;
    }
}

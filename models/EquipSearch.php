<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Equip;

/**
 * EquipSearch represents the model behind the search form about `app\models\Equip`.
 */
class EquipSearch extends Equip
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'equip_xinterger1'], 'integer'],
            [['equip_desc', 'equip_xdate1', 'equip_xvarchar1'], 'safe'],
            [['equip_xboolean1'], 'boolean'],
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
        $query = Equip::find();

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
            'equip_xdate1' => $this->equip_xdate1,
            'equip_xboolean1' => $this->equip_xboolean1,
            'equip_xinterger1' => $this->equip_xinterger1,
        ]);

        $query->andFilterWhere(['like', 'equip_desc', $this->equip_desc])
            ->andFilterWhere(['like', 'equip_xvarchar1', $this->equip_xvarchar1]);

        return $dataProvider;
    }
}

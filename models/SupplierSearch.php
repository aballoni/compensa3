<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Supplier;

/**
 * SupplierSearch represents the model behind the search form about `app\models\Supplier`.
 */
class SupplierSearch extends Supplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['supplier_name', 'supplier_brand', 'supplier_cnpj', 'supplier_ie', 'supplier_im', 'supplier_address', 'supplier_number', 'supplier_detail', 'supplier_place', 'supplier_city', 'supplier_state', 'supplier_cep', 'supplier_country', 'supplier_phone1', 'supplier_phone2', 'supplier_phone3', 'supplier_phone4'], 'safe'],
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
        $query = Supplier::find();

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
        ]);

        $query->andFilterWhere(['like', 'supplier_name', $this->supplier_name])
            ->andFilterWhere(['like', 'supplier_brand', $this->supplier_brand])
            ->andFilterWhere(['like', 'supplier_cnpj', $this->supplier_cnpj])
            ->andFilterWhere(['like', 'supplier_ie', $this->supplier_ie])
            ->andFilterWhere(['like', 'supplier_im', $this->supplier_im])
            ->andFilterWhere(['like', 'supplier_address', $this->supplier_address])
            ->andFilterWhere(['like', 'supplier_number', $this->supplier_number])
            ->andFilterWhere(['like', 'supplier_detail', $this->supplier_detail])
            ->andFilterWhere(['like', 'supplier_place', $this->supplier_place])
            ->andFilterWhere(['like', 'supplier_city', $this->supplier_city])
            ->andFilterWhere(['like', 'supplier_state', $this->supplier_state])
            ->andFilterWhere(['like', 'supplier_cep', $this->supplier_cep])
            ->andFilterWhere(['like', 'supplier_country', $this->supplier_country])
            ->andFilterWhere(['like', 'supplier_phone1', $this->supplier_phone1])
            ->andFilterWhere(['like', 'supplier_phone2', $this->supplier_phone2])
            ->andFilterWhere(['like', 'supplier_phone3', $this->supplier_phone3])
            ->andFilterWhere(['like', 'supplier_phone4', $this->supplier_phone4]);

        return $dataProvider;
    }
}

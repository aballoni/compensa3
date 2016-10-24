<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nf;

/**
 * NfSearch represents the model behind the search form about `app\models\Nf`.
 */
class NfSearch extends Nf
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'material_id', 'nf_cnf', 'nf_ncm', 'nf_n_item', 'supplier_id', 'batch', 'nf_xinterger3'], 'integer'],
            [['nf_nat_op', 'nf_nf', 'nf_cod_prod', 'nf_u_com', 'nf_xprod', 'nf_data_emissao', 'nf_xdate2', 'nf_xdate3', 'nf_xvarchar1', 'nf_xvarchar2', 'nf_xvarchar3'], 'safe'],
            [['nf_q_com', 'nf_v_un_com', 'nf_tot_nf'], 'number'],
            [['nf_xboolean1', 'nf_xboolean2', 'nf_xboolean3'], 'boolean'],
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
        $query = Nf::find();

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
            'material_id' => $this->material_id,
            'nf_cnf' => $this->nf_cnf,
            'nf_ncm' => $this->nf_ncm,
            'nf_q_com' => $this->nf_q_com,
            'nf_v_un_com' => $this->nf_v_un_com,
            'nf_tot_nf' => $this->nf_tot_nf,
            'nf_n_item' => $this->nf_n_item,
            'nf_data_emissao' => $this->nf_data_emissao,
            'nf_xdate2' => $this->nf_xdate2,
            'nf_xdate3' => $this->nf_xdate3,
            'nf_xboolean1' => $this->nf_xboolean1,
            'nf_xboolean2' => $this->nf_xboolean2,
            'nf_xboolean3' => $this->nf_xboolean3,
            'supplier_id' => $this->supplier_id,
            'batch' => $this->batch,
            'nf_xinterger3' => $this->nf_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'nf_nat_op', $this->nf_nat_op])
            ->andFilterWhere(['like', 'nf_nf', $this->nf_nf])
            ->andFilterWhere(['like', 'nf_cod_prod', $this->nf_cod_prod])
            ->andFilterWhere(['like', 'nf_u_com', $this->nf_u_com])
            ->andFilterWhere(['like', 'nf_xprod', $this->nf_xprod])
            ->andFilterWhere(['like', 'nf_xvarchar1', $this->nf_xvarchar1])
            ->andFilterWhere(['like', 'nf_xvarchar2', $this->nf_xvarchar2])
            ->andFilterWhere(['like', 'nf_xvarchar3', $this->nf_xvarchar3]);

        return $dataProvider;
    }
}

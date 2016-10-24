<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jp;

/**
 * JpSearch represents the model behind the search form about `app\models\Jp`.
 */
class JpSearch extends Jp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'material_id', 'jp_line', 'jp_blueline', 'jp_or_qty', 'jp_phy_qty', 'jp_inv_qty', 'jp_xinterger1', 'jp_xinterger2', 'jp_xinterger3'], 'integer'],
            [['jp_list', 'jp_tag', 'jp_nf', 'jp_supl_icms_nf', 'jp_xdate1', 'jp_xdate2', 'jp_xdate3', 'jp_xvarchar1', 'jp_xvarchar2', 'jp_xvarchar3'], 'safe'],
            [['jp_or_aq_value', 'jp_or_book_value', 'jp_inv_value', 'jp_unit_price', 'jp_icms', 'jp_supl_icms', 'jp_value_inaccount'], 'number'],
            [['jp_xboolean1', 'jp_xboolean2', 'jp_xboolean3'], 'boolean'],
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
        $query = Jp::find();

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
            'jp_line' => $this->jp_line,
            'jp_blueline' => $this->jp_blueline,
            'jp_or_qty' => $this->jp_or_qty,
            'jp_or_aq_value' => $this->jp_or_aq_value,
            'jp_or_book_value' => $this->jp_or_book_value,
            'jp_phy_qty' => $this->jp_phy_qty,
            'jp_inv_qty' => $this->jp_inv_qty,
            'jp_inv_value' => $this->jp_inv_value,
            'jp_unit_price' => $this->jp_unit_price,
            'jp_icms' => $this->jp_icms,
            'jp_supl_icms' => $this->jp_supl_icms,
            'jp_value_inaccount' => $this->jp_value_inaccount,
            'jp_xdate1' => $this->jp_xdate1,
            'jp_xdate2' => $this->jp_xdate2,
            'jp_xdate3' => $this->jp_xdate3,
            'jp_xboolean1' => $this->jp_xboolean1,
            'jp_xboolean2' => $this->jp_xboolean2,
            'jp_xboolean3' => $this->jp_xboolean3,
            'jp_xinterger1' => $this->jp_xinterger1,
            'jp_xinterger2' => $this->jp_xinterger2,
            'jp_xinterger3' => $this->jp_xinterger3,
        ]);

        $query->andFilterWhere(['like', 'jp_list', $this->jp_list])
            ->andFilterWhere(['like', 'jp_tag', $this->jp_tag])
            ->andFilterWhere(['like', 'jp_nf', $this->jp_nf])
            ->andFilterWhere(['like', 'jp_supl_icms_nf', $this->jp_supl_icms_nf])
            ->andFilterWhere(['like', 'jp_xvarchar1', $this->jp_xvarchar1])
            ->andFilterWhere(['like', 'jp_xvarchar2', $this->jp_xvarchar2])
            ->andFilterWhere(['like', 'jp_xvarchar3', $this->jp_xvarchar3]);

        return $dataProvider;
    }
}

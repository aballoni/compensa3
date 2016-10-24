<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans".
 *
 * @property integer $id
 * @property integer $trans_doc
 * @property string $trans_type
 * @property integer $nf_id
 * @property integer $material_id
 * @property integer $intuser_id
 * @property integer $intclient_id
 * @property integer $location_from_id
 * @property integer $location_to_id
 * @property string $trans_qty
 * @property string $trans_uprice
 * @property string $trans_uom
 * @property string $trans_remarks
 * @property boolean $cmline_x1
 * @property boolean $cmline_x2
 * @property string $timex1
 * @property string $timex2
 * @property string $trans_tot_price
 */
class Trans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trans_doc', 'nf_id', 'material_id', 'intuser_id', 'intclient_id', 'location_from_id', 'location_to_id'], 'integer'],
            [['trans_qty', 'trans_uprice', 'trans_tot_price'], 'number'],
            [['cmline_x1', 'cmline_x2'], 'boolean'],
            [['timex1', 'timex2'], 'safe'],
            [['trans_type'], 'string', 'max' => 50],
            [['trans_uom'], 'string', 'max' => 3],
            [['trans_remarks'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'trans_doc' => 'Doc',
            'trans_type' => 'Type',
            'nf_id' => 'NF ID',
            'material_id' => 'Material ID',
            'intuser_id' => 'Intuser',
            'intclient_id' => 'Intclient',
            'location_from_id' => 'Loc FROM',
            'location_to_id' => 'Loc TO',
            'trans_qty' => 'Qty',
            'trans_uprice' => 'Un price',
            'trans_uom' => 'UOM',
            'trans_remarks' => 'Remarks',
            'cmline_x1' => 'Cmline X1',
            'cmline_x2' => 'Cmline X2',
            'timex1' => 'Timex1',
            'timex2' => 'Timex2',
            'trans_tot_price' => 'Trans Tot Price',
        ];
    }
}

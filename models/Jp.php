<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jp".
 *
 * @property integer $id
 * @property integer $material_id
 * @property integer $jp_line
 * @property integer $jp_blueline
 * @property string $jp_list
 * @property integer $jp_or_qty
 * @property string $jp_or_aq_value
 * @property string $jp_or_book_value
 * @property integer $jp_phy_qty
 * @property string $jp_tag
 * @property integer $jp_inv_qty
 * @property string $jp_inv_value
 * @property string $jp_nf
 * @property string $jp_unit_price
 * @property string $jp_icms
 * @property string $jp_supl_icms
 * @property string $jp_supl_icms_nf
 * @property string $jp_value_inaccount
 * @property string $jp_xdate1
 * @property string $jp_xdate2
 * @property string $jp_xdate3
 * @property boolean $jp_xboolean1
 * @property boolean $jp_xboolean2
 * @property boolean $jp_xboolean3
 * @property string $jp_xvarchar1
 * @property string $jp_xvarchar2
 * @property string $jp_xvarchar3
 * @property integer $jp_xinterger1
 * @property integer $jp_xinterger2
 * @property integer $jp_xinterger3
 *
 * @property Material $material
 */
class Jp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id'], 'required'],
            [['material_id', 'jp_line', 'jp_blueline', 'jp_or_qty', 'jp_phy_qty', 'jp_inv_qty', 'jp_xinterger1', 'jp_xinterger2', 'jp_xinterger3'], 'integer'],
            [['jp_or_aq_value', 'jp_or_book_value', 'jp_inv_value', 'jp_unit_price', 'jp_icms', 'jp_supl_icms', 'jp_value_inaccount'], 'number'],
            [['jp_xdate1', 'jp_xdate2', 'jp_xdate3'], 'safe'],
            [['jp_xboolean1', 'jp_xboolean2', 'jp_xboolean3'], 'boolean'],
            [['jp_list', 'jp_xvarchar1', 'jp_xvarchar2', 'jp_xvarchar3'], 'string', 'max' => 30],
            [['jp_tag'], 'string', 'max' => 150],
            [['jp_nf', 'jp_supl_icms_nf'], 'string', 'max' => 40],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'material_id' => 'Material ID',
            'jp_line' => 'Line',
            'jp_blueline' => 'Blueline',
            'jp_list' => 'List',
            'jp_or_qty' => 'Or Qty',
            'jp_or_aq_value' => 'Or Aq Value',
            'jp_or_book_value' => 'Or Book Value',
            'jp_phy_qty' => 'Phy Qty',
            'jp_tag' => 'Tag',
            'jp_inv_qty' => 'Inv Qty',
            'jp_inv_value' => 'Inv Value',
            'jp_nf' => 'NF',
            'jp_unit_price' => 'Unit Price',
            'jp_icms' => 'ICMS',
            'jp_supl_icms' => 'Supl Icms',
            'jp_supl_icms_nf' => 'Supl Icms Nf',
            'jp_value_inaccount' => 'Value Inaccount',
            'jp_xdate1' => 'Jp Xdate1',
            'jp_xdate2' => 'Jp Xdate2',
            'jp_xdate3' => 'Jp Xdate3',
            'jp_xboolean1' => 'Jp Xboolean1',
            'jp_xboolean2' => 'Jp Xboolean2',
            'jp_xboolean3' => 'Jp Xboolean3',
            'jp_xvarchar1' => 'Jp Xvarchar1',
            'jp_xvarchar2' => 'Jp Xvarchar2',
            'jp_xvarchar3' => 'Jp Xvarchar3',
            'jp_xinterger1' => 'Jp Xinterger1',
            'jp_xinterger2' => 'Jp Xinterger2',
            'jp_xinterger3' => 'Jp Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['id' => 'material_id']);
    }
}

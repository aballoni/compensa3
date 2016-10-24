<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cmline".
 *
 * @property integer $id
 * @property integer $cm_id
 * @property integer $cmline_qty
 * @property integer $material_id
 * @property string $cmline_manual
 * @property integer $nf_id
 * @property string $cmline_reference
 * @property string $cmline_dimensions
 * @property boolean $cmline_x1
 * @property boolean $cmline_x2
 * @property integer $intuser_id
 * @property string $cmline_timex1
 * @property string $cmline_timex2
 * @property string $cmline_desc
 * @property integer $location_from_id
 * @property integer $location_to_id
 * @property string $cmline_uprice
 * @property string $cmline_tot_price
 *
 * @property Cm $cm
 * @property Material $material
 * @property Nf $nf
 */
class Cmline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cmline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cm_id'], 'required'],
            [['cm_id', 'cmline_qty', 'material_id', 'nf_id', 'intuser_id', 'location_from_id', 'location_to_id'], 'integer'],
            [['cmline_x1', 'cmline_x2'], 'boolean'],
            [['cmline_timex1', 'cmline_timex2'], 'safe'],
            [['cmline_uprice', 'cmline_tot_price'], 'number'],
            [['cmline_manual'], 'string', 'max' => 40],
            [['cmline_reference', 'cmline_dimensions'], 'string', 'max' => 30],
            [['cmline_desc'], 'string', 'max' => 50],
            [['cm_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cm::className(), 'targetAttribute' => ['cm_id' => 'id']],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'id']],
            [['nf_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nf::className(), 'targetAttribute' => ['nf_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cm_id' => 'CM ID',
            'cmline_qty' => 'Qty',
            'material_id' => 'Mat ID',
            'cmline_manual' => 'Manual Desc',
            'nf_id' => 'NF ID',
            'cmline_reference' => 'Ref',
            'cmline_dimensions' => 'Dimensions',
            'cmline_x1' => 'X1',
            'cmline_x2' => 'X2',
            'intuser_id' => 'Intuser',
            'cmline_timex1' => 'Date/Time 1',
            'cmline_timex2' => 'Date/Time 2',
            'cmline_desc' => 'Desc',
            'location_from_id' => 'Loc FROM',
            'location_to_id' => 'Loc TO',
            'cmline_uprice' => 'Un Price',
            'cmline_tot_price' => 'Tot Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCm()
    {
        return $this->hasOne(Cm::className(), ['id' => 'cm_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['id' => 'material_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNf()
    {
        return $this->hasOne(Nf::className(), ['id' => 'nf_id']);
    }
}

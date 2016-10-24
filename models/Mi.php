<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mi".
 *
 * @property integer $id
 * @property string $mi_desc
 * @property integer $material_id
 * @property integer $location_id
 * @property integer $intclient_id
 * @property string $mi_qty
 * @property string $timex1
 * @property string $mi_remarks
 * @property integer $intuser_id
 * @property string $mi_uprice
 * @property string $mi_tot_price
 *
 * @property Intclient $intclient
 * @property Location $location
 * @property Material $material
 */
class Mi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id', 'location_id', 'intclient_id', 'intuser_id'], 'integer'],
            [['mi_qty', 'mi_uprice', 'mi_tot_price'], 'number'],
            [['timex1'], 'safe'],
            [['mi_desc', 'mi_remarks'], 'string', 'max' => 80],
            [['intclient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Intclient::className(), 'targetAttribute' => ['intclient_id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
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
            'mi_desc' => 'Desc',
            'material_id' => 'Material ID',
            'location_id' => 'Loc FROM',
            'intclient_id' => 'Intclient',
            'mi_qty' => 'Qty',
            'timex1' => 'Date/Time',
            'mi_remarks' => 'Remarks',
            'intuser_id' => 'Intuser',
            'mi_uprice' => 'Un price',
            'mi_tot_price' => 'Tot Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntclient()
    {
        return $this->hasOne(Intclient::className(), ['id' => 'intclient_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['id' => 'material_id']);
    }
}

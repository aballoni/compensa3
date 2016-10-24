<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stock".
 *
 * @property integer $id
 * @property string $stock_desc
 * @property string $stock_date
 * @property string $stock_qty1
 * @property string $stock_qty2
 * @property string $stock_value1
 * @property string $stock_value2
 * @property boolean $stock_xboolean1
 * @property integer $stock_interger1
 * @property string $stock_xvarchar1
 * @property integer $location_id
 * @property integer $material_id
 *
 * @property Location $location
 * @property Material $material
 */
class Stock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stock_date'], 'safe'],
            [['stock_qty1', 'stock_qty2', 'stock_value1', 'stock_value2'], 'number'],
            [['stock_xboolean1'], 'boolean'],
            [['stock_interger1', 'location_id', 'material_id'], 'integer'],
            [['location_id', 'material_id'], 'required'],
            [['stock_desc'], 'string', 'max' => 10],
            [['stock_xvarchar1'], 'string', 'max' => 30],
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
            'stock_desc' => 'Desc',
            'stock_date' => 'Date',
            'stock_qty1' => 'Qty1',
            'stock_qty2' => 'Qty2',
            'stock_value1' => 'Value1',
            'stock_value2' => 'Value2',
            'stock_xboolean1' => 'Stock Xboolean1',
            'stock_interger1' => 'Stock Interger1',
            'stock_xvarchar1' => 'Stock Xvarchar1',
            'location_id' => 'Location ID',
            'material_id' => 'Material ID',
        ];
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

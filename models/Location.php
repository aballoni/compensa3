<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property integer $id
 * @property string $location_desc
 * @property string $location_xdate1
 * @property boolean $location_xboolean1
 * @property integer $location_interger1
 * @property string $location_xvarchar1
 *
 * @property Cm[] $cms
 * @property Cm[] $cms0
 * @property Mi[] $mis
 * @property Mr[] $mrs
 * @property Stock[] $stocks
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location_desc'], 'required'],
            [['location_xdate1'], 'safe'],
            [['location_xboolean1'], 'boolean'],
            [['location_interger1'], 'integer'],
            [['location_desc'], 'string', 'max' => 10],
            [['location_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_desc' => 'Desc',
            'location_xdate1' => 'Location Xdate1',
            'location_xboolean1' => 'Location Xboolean1',
            'location_interger1' => 'Location Interger1',
            'location_xvarchar1' => 'Location Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCms()
    {
        return $this->hasMany(Cm::className(), ['location_from_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCms0()
    {
        return $this->hasMany(Cm::className(), ['location_to_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMis()
    {
        return $this->hasMany(Mi::className(), ['location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMrs()
    {
        return $this->hasMany(Mr::className(), ['location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocks()
    {
        return $this->hasMany(Stock::className(), ['location_id' => 'id']);
    }
}

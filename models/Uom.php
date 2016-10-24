<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uom".
 *
 * @property integer $id
 * @property string $uom_desc
 * @property string $uom_remarks
 * @property string $uom_xdate1
 * @property boolean $uom_xboolean1
 * @property integer $uom_interger1
 * @property string $uom_xvarchar1
 *
 * @property Material[] $materials
 */
class Uom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uom_desc', 'uom_remarks'], 'required'],
            [['uom_xdate1'], 'safe'],
            [['uom_xboolean1'], 'boolean'],
            [['uom_interger1'], 'integer'],
            [['uom_desc'], 'string', 'max' => 3],
            [['uom_remarks'], 'string', 'max' => 20],
            [['uom_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uom_desc' => 'Desc',
            'uom_remarks' => 'Remarks',
            'uom_xdate1' => 'Uom Xdate1',
            'uom_xboolean1' => 'Uom Xboolean1',
            'uom_interger1' => 'Uom Interger1',
            'uom_xvarchar1' => 'Uom Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['uom_id' => 'id']);
    }
}

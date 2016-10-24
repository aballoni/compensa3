<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mattype".
 *
 * @property integer $id
 * @property string $mattype_desc
 * @property integer $mattype_xinterger1
 * @property string $mattype_xdate1
 * @property boolean $mattype_xboolean1
 * @property string $mattype_xvarchar1
 *
 * @property Material[] $materials
 */
class Mattype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mattype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mattype_desc'], 'required'],
            [['mattype_xinterger1'], 'integer'],
            [['mattype_xdate1'], 'safe'],
            [['mattype_xboolean1'], 'boolean'],
            [['mattype_desc'], 'string', 'max' => 20],
            [['mattype_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mattype_desc' => 'Desc',
            'mattype_xinterger1' => 'Mattype Xinterger1',
            'mattype_xdate1' => 'Mattype Xdate1',
            'mattype_xboolean1' => 'Mattype Xboolean1',
            'mattype_xvarchar1' => 'Mattype Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['mattype_id' => 'id']);
    }
}

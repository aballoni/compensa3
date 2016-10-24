<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat".
 *
 * @property integer $id
 * @property string $cat_desc
 * @property integer $cat_xinterger1
 * @property string $cat_xdate1
 * @property boolean $cat_xboolean1
 * @property string $cat_xvarchar1
 *
 * @property Material[] $materials
 */
class Cat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_desc'], 'required'],
            [['cat_xinterger1'], 'integer'],
            [['cat_xdate1'], 'safe'],
            [['cat_xboolean1'], 'boolean'],
            [['cat_desc'], 'string', 'max' => 100],
            [['cat_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_desc' => 'Desc',
            'cat_xinterger1' => 'Cat Xinterger1',
            'cat_xdate1' => 'Cat Xdate1',
            'cat_xboolean1' => 'Cat Xboolean1',
            'cat_xvarchar1' => 'Cat Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterials()
    {
        return $this->hasMany(Material::className(), ['cat_id' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dep".
 *
 * @property integer $id
 * @property string $dep_desc
 * @property string $dep_remarks
 * @property string $dep_xdate1
 * @property boolean $dep_xboolean1
 * @property integer $dep_xinterger1
 * @property string $dep_xvarchar1
 *
 * @property Budget[] $budgets
 * @property Intclient[] $intclients
 * @property Intuser[] $intusers
 */
class Dep extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dep';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dep_desc'], 'required'],
            [['dep_xdate1'], 'safe'],
            [['dep_xboolean1'], 'boolean'],
            [['dep_xinterger1'], 'integer'],
            [['dep_desc'], 'string', 'max' => 20],
            [['dep_remarks'], 'string', 'max' => 50],
            [['dep_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dep_desc' => 'Desc',
            'dep_remarks' => 'Remarks',
            'dep_xdate1' => 'Dep Xdate1',
            'dep_xboolean1' => 'Dep Xboolean1',
            'dep_xinterger1' => 'Dep Xinterger1',
            'dep_xvarchar1' => 'Dep Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBudgets()
    {
        return $this->hasMany(Budget::className(), ['dep_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntclients()
    {
        return $this->hasMany(Intclient::className(), ['dep_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntusers()
    {
        return $this->hasMany(Intuser::className(), ['dep_id' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "budget".
 *
 * @property integer $id
 * @property string $budget_desc
 * @property string $budget_remarks
 * @property integer $dep_id
 * @property string $budget_xvarchar1
 * @property string $budget_xdate1
 * @property boolean $budget_xboolean1
 * @property integer $budget_interger1
 *
 * @property Dep $dep
 */
class Budget extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'budget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['budget_desc', 'dep_id'], 'required'],
            [['dep_id', 'budget_interger1'], 'integer'],
            [['budget_xdate1'], 'safe'],
            [['budget_xboolean1'], 'boolean'],
            [['budget_desc'], 'string', 'max' => 50],
            [['budget_remarks'], 'string', 'max' => 200],
            [['budget_xvarchar1'], 'string', 'max' => 30],
            [['dep_id'], 'exist', 'skipOnError' => true, 'targetClass' => Dep::className(), 'targetAttribute' => ['dep_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'budget_desc' => 'Desc',
            'budget_remarks' => 'Remarks',
            'dep_id' => 'Dep',
            'budget_xvarchar1' => 'Budget Xvarchar1',
            'budget_xdate1' => 'Budget Xdate1',
            'budget_xboolean1' => 'Budget Xboolean1',
            'budget_interger1' => 'Budget Interger1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDep()
    {
        return $this->hasOne(Dep::className(), ['id' => 'dep_id']);
    }
}

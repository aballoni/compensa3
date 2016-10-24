<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cost".
 *
 * @property integer $id
 * @property string $cost_desc
 * @property string $cost_remarks
 * @property string $cost_xvarchar1
 * @property string $cost_xdate1
 * @property boolean $cost_xboolean1
 * @property integer $cost_xinterger1
 */
class Cost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cost';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cost_desc'], 'required'],
            [['cost_xdate1'], 'safe'],
            [['cost_xboolean1'], 'boolean'],
            [['cost_xinterger1'], 'integer'],
            [['cost_desc', 'cost_remarks'], 'string', 'max' => 20],
            [['cost_xvarchar1'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cost_desc' => 'Desc',
            'cost_remarks' => 'Remarks',
            'cost_xvarchar1' => 'Cost Xvarchar1',
            'cost_xdate1' => 'Cost Xdate1',
            'cost_xboolean1' => 'Cost Xboolean1',
            'cost_xinterger1' => 'Cost Xinterger1',
        ];
    }
}

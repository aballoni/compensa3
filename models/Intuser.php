<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "intuser".
 *
 * @property integer $id
 * @property string $intuser_desc
 * @property string $intuser_password
 * @property string $intuser_remarks
 * @property integer $dep_id
 * @property string $intuser_xvarchar1
 * @property string $intuser_xdate1
 * @property boolean $intuser_xboolean1
 * @property integer $intuser_xinterger1
 *
 * @property Dep $dep
 */
class Intuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'intuser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intuser_desc', 'intuser_password', 'dep_id'], 'required'],
            [['dep_id', 'intuser_xinterger1'], 'integer'],
            [['intuser_xdate1'], 'safe'],
            [['intuser_xboolean1'], 'boolean'],
            [['intuser_desc', 'intuser_remarks'], 'string', 'max' => 20],
            [['intuser_password'], 'string', 'max' => 8],
            [['intuser_xvarchar1'], 'string', 'max' => 30],
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
            'intuser_desc' => 'Intuser',
            'intuser_password' => 'Password',
            'intuser_remarks' => 'Remarks',
            'dep_id' => 'Dep',
            'intuser_xvarchar1' => 'Intuser Xvarchar1',
            'intuser_xdate1' => 'Intuser Xdate1',
            'intuser_xboolean1' => 'Intuser Xboolean1',
            'intuser_xinterger1' => 'Intuser Xinterger1',
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

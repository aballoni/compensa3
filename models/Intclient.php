<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "intclient".
 *
 * @property integer $id
 * @property string $intclient_desc
 * @property string $intclient_remarks
 * @property integer $dep_id
 * @property integer $intclient_xinterger1
 * @property boolean $intclient_xboolean1
 * @property string $intclient_xdate1
 * @property string $intclient_xvarchar1
 *
 * @property Dep $dep
 * @property Mi[] $mis
 */
class Intclient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'intclient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intclient_desc', 'dep_id'], 'required'],
            [['dep_id', 'intclient_xinterger1'], 'integer'],
            [['intclient_xboolean1'], 'boolean'],
            [['intclient_xdate1'], 'safe'],
            [['intclient_desc'], 'string', 'max' => 20],
            [['intclient_remarks'], 'string', 'max' => 50],
            [['intclient_xvarchar1'], 'string', 'max' => 30],
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
            'intclient_desc' => 'Intclient',
            'intclient_remarks' => 'Remarks',
            'dep_id' => 'Dep',
            'intclient_xinterger1' => 'Intclient Xinterger1',
            'intclient_xboolean1' => 'Intclient Xboolean1',
            'intclient_xdate1' => 'Intclient Xdate1',
            'intclient_xvarchar1' => 'Intclient Xvarchar1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDep()
    {
        return $this->hasOne(Dep::className(), ['id' => 'dep_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMis()
    {
        return $this->hasMany(Mi::className(), ['intclient_id' => 'id']);
    }
}

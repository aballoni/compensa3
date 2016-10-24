<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mr".
 *
 * @property integer $id
 * @property string $mr_desc
 * @property integer $po_id
 * @property integer $poline_id
 * @property integer $nf_id
 * @property integer $location_id
 * @property string $timex1
 * @property string $mr_remarks
 * @property integer $intuser_id
 *
 * @property Location $location
 * @property Nf $nf
 */
class Mr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_id', 'poline_id', 'nf_id', 'location_id', 'intuser_id'], 'integer'],
            [['timex1'], 'safe'],
            [['mr_desc', 'mr_remarks'], 'string', 'max' => 80],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
            [['nf_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nf::className(), 'targetAttribute' => ['nf_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mr_desc' => 'Desc',
            'po_id' => 'PO ID',
            'poline_id' => 'PO it',
            'nf_id' => 'NF ID',
            'location_id' => 'Loc TO',
            'timex1' => 'Date/Time',
            'mr_remarks' => 'Remarks',
            'intuser_id' => 'Intuser',
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
    public function getNf()
    {
        return $this->hasOne(Nf::className(), ['id' => 'nf_id']);
    }
}

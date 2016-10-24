<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cm".
 *
 * @property integer $id
 * @property string $cm_desc
 * @property string $cm_expeditor
 * @property string $cm_expeditor_phone
 * @property string $cm_receiver
 * @property string $cm_receiver_phone
 * @property string $cm_date_expedite
 * @property string $cm_date_eta
 * @property string $cm_modal
 * @property string $cm_vessel_name
 * @property string $cm_tug_name
 * @property string $cm_truck_plate
 * @property integer $cm_transporter
 * @property string $cm_remarks
 * @property string $cm_xdate1
 * @property string $cm_xdate2
 * @property string $cm_xdate3
 * @property boolean $cm_xboolean1
 * @property boolean $cm_xboolean2
 * @property boolean $cm_xboolean3
 * @property boolean $cm_xboolean4
 * @property boolean $cm_xboolean5
 * @property string $cm_xvarchar1
 * @property string $cm_xvarchar2
 * @property string $cm_xvarchar3
 * @property integer $cm_xinterger1
 * @property integer $cm_xinterger2
 * @property integer $cm_xinterger3
 * @property integer $location_from_id
 * @property integer $location_to_id
 *
 * @property Location $locationFrom
 * @property Location $locationTo
 * @property Cmline[] $cmlines
 */
class Cm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cm_date_expedite', 'cm_date_eta', 'cm_xdate1', 'cm_xdate2', 'cm_xdate3'], 'safe'],
            [['cm_transporter', 'cm_xinterger1', 'cm_xinterger2', 'cm_xinterger3', 'location_from_id', 'location_to_id'], 'integer'],
            [['cm_xboolean1', 'cm_xboolean2', 'cm_xboolean3', 'cm_xboolean4', 'cm_xboolean5'], 'boolean'],
            [['location_from_id', 'location_to_id'], 'required'],
            [['cm_desc', 'cm_expeditor_phone', 'cm_receiver_phone'], 'string', 'max' => 20],
            [['cm_expeditor', 'cm_receiver', 'cm_modal', 'cm_vessel_name', 'cm_tug_name', 'cm_truck_plate', 'cm_xvarchar1', 'cm_xvarchar2', 'cm_xvarchar3'], 'string', 'max' => 30],
            [['cm_remarks'], 'string', 'max' => 500],
            [['location_from_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_from_id' => 'id']],
            [['location_to_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_to_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cm_desc' => 'Desc',
            'cm_expeditor' => 'Expeditor',
            'cm_expeditor_phone' => 'Expeditor Phone',
            'cm_receiver' => 'Receiver',
            'cm_receiver_phone' => 'Receiver Phone',
            'cm_date_expedite' => 'ETD',
            'cm_date_eta' => 'ETA',
            'cm_modal' => 'MOT',
            'cm_vessel_name' => 'Vessel',
            'cm_tug_name' => 'Tug',
            'cm_truck_plate' => 'Truck Plate',
            'cm_transporter' => 'Transporter',
            'cm_remarks' => 'Remarks',
            'cm_xdate1' => 'Cm Xdate1',
            'cm_xdate2' => 'Cm Xdate2',
            'cm_xdate3' => 'Cm Xdate3',
            'cm_xboolean1' => 'Cm Xboolean1',
            'cm_xboolean2' => 'Cm Xboolean2',
            'cm_xboolean3' => 'Cm Xboolean3',
            'cm_xboolean4' => 'Cm Xboolean4',
            'cm_xboolean5' => 'Cm Xboolean5',
            'cm_xvarchar1' => 'Cm Xvarchar1',
            'cm_xvarchar2' => 'Cm Xvarchar2',
            'cm_xvarchar3' => 'Cm Xvarchar3',
            'cm_xinterger1' => 'Cm Xinterger1',
            'cm_xinterger2' => 'Cm Xinterger2',
            'cm_xinterger3' => 'Cm Xinterger3',
            'location_from_id' => 'Loc FROM',
            'location_to_id' => 'Loc TO',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocationFrom()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_from_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocationTo()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_to_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmlines()
    {
        return $this->hasMany(Cmline::className(), ['cm_id' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property integer $id
 * @property string $mat_desc
 * @property integer $uom_id
 * @property integer $cat_id
 * @property string $material_vpn
 * @property string $material_manufacturer
 * @property string $material_mpn
 * @property string $material_sn
 * @property integer $mattype_id
 * @property string $material_bin
 * @property string $material_tag
 * @property integer $equip_id
 * @property string $material_dimenssion
 * @property integer $material_weight
 * @property integer $owner_id
 * @property string $material_picture
 * @property integer $batch
 * @property string $avg_price
 * @property string $tot_price
 * @property string $u_price
 * @property string $q
 * @property string $tot_q
 *
 * @property Cmline[] $cmlines
 * @property Jp[] $jps
 * @property Cat $cat
 * @property Equip $equip
 * @property Mattype $mattype
 * @property Owner $owner
 * @property Uom $uom
 * @property Mi[] $mis
 * @property Nf[] $nfs
 * @property Stock[] $stocks
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uom_id', 'cat_id', 'mattype_id', 'equip_id', 'material_weight', 'owner_id', 'batch'], 'integer'],
            [['cat_id', 'mattype_id', 'equip_id', 'owner_id'], 'required'],
            [['avg_price', 'tot_price', 'u_price', 'q', 'tot_q'], 'number'],
            [['mat_desc'], 'string', 'max' => 100],
            [['material_vpn', 'material_manufacturer', 'material_mpn', 'material_sn', 'material_dimenssion'], 'string', 'max' => 20],
            [['material_bin'], 'string', 'max' => 10],
            [['material_tag'], 'string', 'max' => 120],
            [['material_picture'], 'string', 'max' => 30],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cat::className(), 'targetAttribute' => ['cat_id' => 'id']],
            [['equip_id'], 'exist', 'skipOnError' => true, 'targetClass' => Equip::className(), 'targetAttribute' => ['equip_id' => 'id']],
            [['mattype_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mattype::className(), 'targetAttribute' => ['mattype_id' => 'id']],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Owner::className(), 'targetAttribute' => ['owner_id' => 'id']],
            [['uom_id'], 'exist', 'skipOnError' => true, 'targetClass' => Uom::className(), 'targetAttribute' => ['uom_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mat_desc' => 'Mat Desc',
            'uom_id' => 'UOM',
            'cat_id' => 'JP Cat',
            'material_vpn' => 'VPN',
            'material_manufacturer' => 'Manuf',
            'material_mpn' => 'MPN',
            'material_sn' => 'SN',
            'mattype_id' => 'Type',
            'material_bin' => 'Bin',
            'material_tag' => 'TAG',
            'equip_id' => 'Equip',
            'material_dimenssion' => 'Dimenssion',
            'material_weight' => 'Weight',
            'owner_id' => 'Owner',
            'material_picture' => 'Picture',
            'batch' => 'Batch',
            'avg_price' => 'Avg Price',
            'tot_price' => 'Tot Price',
            'u_price' => 'Un Price',
            'q' => 'Qty',
            'tot_q' => 'Tot Qty',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmlines()
    {
        return $this->hasMany(Cmline::className(), ['material_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJps()
    {
        return $this->hasMany(Jp::className(), ['material_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Cat::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquip()
    {
        return $this->hasOne(Equip::className(), ['id' => 'equip_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMattype()
    {
        return $this->hasOne(Mattype::className(), ['id' => 'mattype_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Owner::className(), ['id' => 'owner_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUom()
    {
        return $this->hasOne(Uom::className(), ['id' => 'uom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMis()
    {
        return $this->hasMany(Mi::className(), ['material_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNfs()
    {
        return $this->hasMany(Nf::className(), ['material_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStocks()
    {
        return $this->hasMany(Stock::className(), ['material_id' => 'id']);
    }
}

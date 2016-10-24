<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nf".
 *
 * @property integer $id
 * @property integer $material_id
 * @property integer $nf_cnf
 * @property string $nf_nat_op
 * @property string $nf_nf
 * @property string $nf_cod_prod
 * @property integer $nf_ncm
 * @property string $nf_u_com
 * @property string $nf_q_com
 * @property string $nf_v_un_com
 * @property string $nf_tot_nf
 * @property integer $nf_n_item
 * @property string $nf_xprod
 * @property string $nf_data_emissao
 * @property string $nf_xdate2
 * @property string $nf_xdate3
 * @property boolean $nf_xboolean1
 * @property boolean $nf_xboolean2
 * @property boolean $nf_xboolean3
 * @property string $nf_xvarchar1
 * @property string $nf_xvarchar2
 * @property string $nf_xvarchar3
 * @property integer $supplier_id
 * @property integer $batch
 * @property integer $nf_xinterger3
 *
 * @property Cmline[] $cmlines
 * @property Mr[] $mrs
 * @property Material $material
 * @property Supplier $supplier
 */
class Nf extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nf';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['material_id'], 'required'],
            [['material_id', 'nf_cnf', 'nf_ncm', 'nf_n_item', 'supplier_id', 'batch', 'nf_xinterger3'], 'integer'],
            [['nf_q_com', 'nf_v_un_com', 'nf_tot_nf'], 'number'],
            [['nf_data_emissao', 'nf_xdate2', 'nf_xdate3'], 'safe'],
            [['nf_xboolean1', 'nf_xboolean2', 'nf_xboolean3'], 'boolean'],
            [['nf_nat_op'], 'string', 'max' => 80],
            [['nf_nf', 'nf_xvarchar1', 'nf_xvarchar2', 'nf_xvarchar3'], 'string', 'max' => 30],
            [['nf_cod_prod'], 'string', 'max' => 10],
            [['nf_u_com'], 'string', 'max' => 2],
            [['nf_xprod'], 'string', 'max' => 150],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'id']],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'material_id' => 'Mat ID',
            'nf_cnf' => 'CNF',
            'nf_nat_op' => 'Nat Op',
            'nf_nf' => 'NF',
            'nf_cod_prod' => 'Cod Prod',
            'nf_ncm' => 'NCM',
            'nf_u_com' => 'UOM',
            'nf_q_com' => 'Qty',
            'nf_v_un_com' => 'Un Price',
            'nf_tot_nf' => 'Tot Price',
            'nf_n_item' => 'Item',
            'nf_xprod' => 'Desc',
            'nf_data_emissao' => 'Em Date',
            'nf_xdate2' => 'Nf Xdate2',
            'nf_xdate3' => 'Nf Xdate3',
            'nf_xboolean1' => 'Nf Xboolean1',
            'nf_xboolean2' => 'Nf Xboolean2',
            'nf_xboolean3' => 'Nf Xboolean3',
            'nf_xvarchar1' => 'Nf Xvarchar1',
            'nf_xvarchar2' => 'Nf Xvarchar2',
            'nf_xvarchar3' => 'Nf Xvarchar3',
            'supplier_id' => 'Supplier ID',
            'batch' => 'Batch',
            'nf_xinterger3' => 'Nf Xinterger3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmlines()
    {
        return $this->hasMany(Cmline::className(), ['nf_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMrs()
    {
        return $this->hasMany(Mr::className(), ['nf_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['id' => 'material_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }
}

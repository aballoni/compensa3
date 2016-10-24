<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $id
 * @property string $supplier_name
 * @property string $supplier_brand
 * @property string $supplier_cnpj
 * @property string $supplier_ie
 * @property string $supplier_im
 * @property string $supplier_address
 * @property string $supplier_number
 * @property string $supplier_detail
 * @property string $supplier_place
 * @property string $supplier_city
 * @property string $supplier_state
 * @property string $supplier_cep
 * @property string $supplier_country
 * @property string $supplier_phone1
 * @property string $supplier_phone2
 * @property string $supplier_phone3
 * @property string $supplier_phone4
 *
 * @property Nf[] $nfs
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_name', 'supplier_brand', 'supplier_address'], 'string', 'max' => 80],
            [['supplier_cnpj', 'supplier_ie', 'supplier_im', 'supplier_number', 'supplier_detail', 'supplier_cep', 'supplier_country', 'supplier_phone1', 'supplier_phone2', 'supplier_phone3', 'supplier_phone4'], 'string', 'max' => 20],
            [['supplier_place', 'supplier_city'], 'string', 'max' => 50],
            [['supplier_state'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'supplier_name' => 'RS',
            'supplier_brand' => 'Brand',
            'supplier_cnpj' => 'CNPJ',
            'supplier_ie' => 'IE',
            'supplier_im' => 'IM',
            'supplier_address' => 'Address',
            'supplier_number' => 'Number',
            'supplier_detail' => 'Detail',
            'supplier_place' => 'Place',
            'supplier_city' => 'City',
            'supplier_state' => 'State',
            'supplier_cep' => 'Cep',
            'supplier_country' => 'Country',
            'supplier_phone1' => 'Phone1',
            'supplier_phone2' => 'Phone2',
            'supplier_phone3' => 'Phone3',
            'supplier_phone4' => 'Phone4',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNfs()
    {
        return $this->hasMany(Nf::className(), ['supplier_id' => 'id']);
    }
}

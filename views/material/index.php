<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaterialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Material';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Material', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['label' => 'ID',
            'attribute' => 'id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-center']
            ],

            //'mat_desc',
            ['label' => 'Desc',
            'attribute' => 'mat_desc',
            'contentOptions'=>['style' => 'width: 300px;', 'class' => 'text-left']
            ],
            //'uom_id',
            'uom.uom_desc:text:UOM',
            ['label' => 'JP ID',
            'attribute' => 'cat_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'cat.cat_desc:text:JP Cat',




            //'material_vpn',
            //'material_manufacturer',
            //'material_mpn',
            //'material_sn',
            //'mattype_id',
            //'mattype.mattype_desc:text:Mat Type',
            //'material_bin',
            //'material_tag',
            //'equip_id',
            //'equip.equip_desc:text:Equip',
            //'material_dimenssion',
            //'material_weight',
            //'owner_id',
            //'owner.owner_desc:text:Owner',
            //'material_picture',
            //'batch',
            'avg_price',
            //'tot_price',
            //'u_price',
            //'q',
            //'tot_q',
            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

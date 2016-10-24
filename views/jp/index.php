<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Joint Property';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['label' => 'ID',
            'attribute' => 'id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'material_id',
            'material.mat_desc:text:Material',
            'jp_line',
            'jp_blueline',
            'jp_list',
            //'jp_or_qty',
            //'jp_or_aq_value',
            //'jp_or_book_value',
            //'jp_phy_qty',
            //'jp_tag',
            //'jp_inv_qty',
            //'jp_inv_value',
            //'jp_nf',
            //'jp_unit_price',
            //'jp_icms',
            //'jp_supl_icms',
            //'jp_supl_icms_nf',
            //'jp_value_inaccount',

            // 'jp_xdate1',
            // 'jp_xdate2',
            // 'jp_xdate3',
            // 'jp_xboolean1:boolean',
            // 'jp_xboolean2:boolean',
            // 'jp_xboolean3:boolean',
            // 'jp_xvarchar1',
            // 'jp_xvarchar2',
            // 'jp_xvarchar3',
            // 'jp_xinterger1',
            // 'jp_xinterger2',
            // 'jp_xinterger3',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cargo Manifest';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cm', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'cm_desc',
            'cm_expeditor',
            'cm_expeditor_phone',
            'cm_receiver',
            'cm_receiver_phone',
            'cm_date_expedite',
            'cm_date_eta',
            'cm_modal',
            'cm_vessel_name',
            'cm_tug_name',
            'cm_truck_plate',
            'cm_transporter',
            //'cm_remarks',
            // 'cm_xdate1',
            // 'cm_xdate2',
            // 'cm_xdate3',
            // 'cm_xboolean1:boolean',
            // 'cm_xboolean2:boolean',
            // 'cm_xboolean3:boolean',
            // 'cm_xboolean4:boolean',
            // 'cm_xboolean5:boolean',
            // 'cm_xvarchar1',
            // 'cm_xvarchar2',
            // 'cm_xvarchar3',
            // 'cm_xinterger1',
            // 'cm_xinterger2',
            // 'cm_xinterger3',
            //'location_from_id',
            ['label' => 'Loc From',
            'attribute' => 'location_from_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],

            //'location_to_id',
            ['label' => 'Loc TO',
            'attribute' => 'location_to_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

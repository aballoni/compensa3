<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'UOM';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uom-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Uom', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['label' => 'ID',
            'attribute' => 'id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'uom_desc',
            'uom_remarks',
            //'uom_xdate1',
            //'uom_xboolean1:boolean',
            // 'uom_interger1',
            // 'uom_xvarchar1',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

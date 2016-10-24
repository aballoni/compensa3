<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cost Center';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cost-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cost', ['create'], ['class' => 'btn btn-success']) ?>
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
            'cost_desc',
            //'cost_remarks',
            //
            'cost_xvarchar1',
            //'cost_xdate1',
            // 'cost_xboolean1:boolean',
            // 'cost_xinterger1',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

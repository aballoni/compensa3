<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IntclientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Internal Client';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intclient-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Intclient', ['create'], ['class' => 'btn btn-success']) ?>
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
            'intclient_desc',
            'intclient_remarks',
            //'dep_id',
            ['label' => 'Dep ID',
            'attribute' => 'dep_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'dep.dep_desc:text:Dep',
            //'intclient_xinterger1',
            // 'intclient_xboolean1:boolean',
            // 'intclient_xdate1',
            // 'intclient_xvarchar1',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Material Issue';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mi', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'mi_desc',
            ['label' => 'Mat ID',
            'attribute' => 'material_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'material.mat_desc:text:Material',
            ['label' => 'Loc ID',
            'attribute' => 'location_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'location.location_desc:text:Location',
            ['label' => 'Int Client',
            'attribute' => 'intclient_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'intclient.intclient_desc:text:Int Client',
            'mi_qty',
            //'mi_remarks',
            //'intuser_id',
            ['label' => 'Int User',
            'attribute' => 'intuser_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            //'intuser.intuser_desc:text:User',
            'mi_uprice',
            'mi_tot_price',
            'timex1',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

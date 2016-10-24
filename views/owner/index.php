<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OwnerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Owner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="owner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Owner', ['create'], ['class' => 'btn btn-success']) ?>
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
            'owner_desc',
            //'owner_xdate1',
            //'owner_xboolean1:boolean',
            //'owner_xinterger1',
            // 'owner_xvarchar1',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

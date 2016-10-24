<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Material Receipt';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mr', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'mr_desc',
            'po_id',
            ['label' => 'PO',
            'attribute' => 'po_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            ['label' => 'PO Item',
            'attribute' => 'poline_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            ['label' => 'NF ID',
            'attribute' => 'nf_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            ['label' => 'Loc ID',
            'attribute' => 'location_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'location.location_desc:text:Location',
            'timex1',
            'mr_remarks',
            ['label' => 'Int User',
            'attribute' => 'intuser_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'intuser.intuser_desc:text:Int User',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

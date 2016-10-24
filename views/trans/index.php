<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TransSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transaction';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trans', ['create'], ['class' => 'btn btn-success']) ?>
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
            ['label' => 'Doc',
            'attribute' => 'trans_doc',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'trans_type',
            ['label' => 'NF ID',
            'attribute' => 'nf_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            ['label' => 'Mat ID',
            'attribute' => 'material_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            //'trans_uom',
             //'intclient_id',

            
             'trans_qty',
             'trans_uprice',

             //'trans_remarks',
             //'cmline_x1:boolean',
             //'cmline_x2:boolean',
            ['label' => 'Loc FROM',
            'attribute' => 'location_from_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],

            ['label' => 'Loc TO',
            'attribute' => 'location_to_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            ['label' => 'User ID',
            'attribute' => 'intuser_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
             'timex1',
             //'timex2',
             //'trans_tot_price',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

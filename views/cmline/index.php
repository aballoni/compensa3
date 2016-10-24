<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CmlineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CM Item';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cmline-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cmline', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'cm_id',
            ['label' => 'CM ID',
            'attribute' => 'cm_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'cmline_qty',
            //'material_id',
            ['label' => 'Mat ID',
            'attribute' => 'material_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'material.mat_desc:text:Material',
            'cmline_manual',
            //'nf_id',
            ['label' => 'NF ID',
            'attribute' => 'nf_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'cmline_reference',
            'cmline_dimensions',
            'cmline_x1:boolean',
            'cmline_x2:boolean',
            //'intuser_id',
            ['label' => 'INT User',
            'attribute' => 'intuser_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            //'intuser.intuser_desc:text:User',
            'cmline_timex1',
            'cmline_timex2',
            //'cmline_desc',
            //'location_from_id',
            ['label' => 'Loc FROM',
            'attribute' => 'location_from_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            //'location.location_desc:text:From',
            //'location_to_id',
            ['label' => 'Loc TO',
            'attribute' => 'location_to_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            //'location.location_desc:text:To',
            'cmline_uprice',
            'cmline_tot_price',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

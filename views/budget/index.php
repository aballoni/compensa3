<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BudgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Budget';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budget-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Budget', ['create'], ['class' => 'btn btn-success']) ?>
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
            'budget_desc',
            'budget_remarks',
            




            //'dep_id',
            ['label' => 'Dep',
            'attribute' => 'dep_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'dep.dep_desc:text:Dep',
            //'budget_xvarchar1',
            // 'budget_xdate1',
            // 'budget_xboolean1:boolean',
            // 'budget_interger1',

            ['class' => 'yii\grid\ActionColumn',
            
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}',
            ],
        ],
        
    ]); ?>
</div>

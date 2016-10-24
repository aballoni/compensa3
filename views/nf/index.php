<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NfSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nota Fiscal';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nf-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nf', ['create'], ['class' => 'btn btn-success']) ?>
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
            ['label' => 'Mat ID',
            'attribute' => 'material_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'material.mat_desc:text:Material',
            'nf_cnf',
            'nf_nat_op',
            'nf_nf',
            'nf_cod_prod',
            'nf_ncm',
            'nf_u_com',
            'nf_q_com',
            'nf_v_un_com',
            'nf_tot_nf',
            'nf_n_item',
            'nf_xprod',
            'nf_data_emissao',
            // 'nf_xdate2',
            // 'nf_xdate3',
            // 'nf_xboolean1:boolean',
            // 'nf_xboolean2:boolean',
            // 'nf_xboolean3:boolean',
            // 'nf_xvarchar1',
            // 'nf_xvarchar2',
            // 'nf_xvarchar3',
            ['label' => 'Supp ID',
            'attribute' => 'supplier_id',
            'contentOptions'=>['style' => 'width: 80px;', 'class' => 'text-left']
            ],
            'batch',
            // 'nf_xinterger3',

            ['class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '60'],
            'template' => '{view} {update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nf */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nfs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nf-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'material_id',
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
            'nf_xdate2',
            'nf_xdate3',
            'nf_xboolean1:boolean',
            'nf_xboolean2:boolean',
            'nf_xboolean3:boolean',
            'nf_xvarchar1',
            'nf_xvarchar2',
            'nf_xvarchar3',
            'supplier_id',
            'batch',
            'nf_xinterger3',
        ],
    ]) ?>

</div>

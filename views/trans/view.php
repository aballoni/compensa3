<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Trans */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Trans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trans-view">

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
            'trans_doc',
            'trans_type',
            'nf_id',
            'material_id',
            'intuser_id',
            'intclient_id',
            'location_from_id',
            'location_to_id',
            'trans_qty',
            'trans_uprice',
            'trans_uom',
            'trans_remarks',
            'cmline_x1:boolean',
            'cmline_x2:boolean',
            'timex1',
            'timex2',
            'trans_tot_price',
        ],
    ]) ?>

</div>

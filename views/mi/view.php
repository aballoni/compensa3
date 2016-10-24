<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mi-view">

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
            'mi_desc',
            'material_id',
            'location_id',
            'intclient_id',
            'mi_qty',
            'timex1',
            'mi_remarks',
            'intuser_id',
            'mi_uprice',
            'mi_tot_price',
        ],
    ]) ?>

</div>

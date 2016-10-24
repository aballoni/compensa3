<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cmline */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cmlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cmline-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'cm_id' => $model->cm_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'cm_id' => $model->cm_id], [
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
            'cm_id',
            'cmline_qty',
            'material_id',
            'cmline_manual',
            'nf_id',
            'cmline_reference',
            'cmline_dimensions',
            'cmline_x1:boolean',
            'cmline_x2:boolean',
            'intuser_id',
            'cmline_timex1',
            'cmline_timex2',
            'cmline_desc',
            'location_from_id',
            'location_to_id',
            'cmline_uprice',
            'cmline_tot_price',
        ],
    ]) ?>

</div>

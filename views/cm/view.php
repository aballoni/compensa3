<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cm-view">

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
            'cm_desc',
            'cm_expeditor',
            'cm_expeditor_phone',
            'cm_receiver',
            'cm_receiver_phone',
            'cm_date_expedite',
            'cm_date_eta',
            'cm_modal',
            'cm_vessel_name',
            'cm_tug_name',
            'cm_truck_plate',
            'cm_transporter',
            'cm_remarks',
            'cm_xdate1',
            'cm_xdate2',
            'cm_xdate3',
            'cm_xboolean1:boolean',
            'cm_xboolean2:boolean',
            'cm_xboolean3:boolean',
            'cm_xboolean4:boolean',
            'cm_xboolean5:boolean',
            'cm_xvarchar1',
            'cm_xvarchar2',
            'cm_xvarchar3',
            'cm_xinterger1',
            'cm_xinterger2',
            'cm_xinterger3',
            'location_from_id',
            'location_to_id',
        ],
    ]) ?>

</div>

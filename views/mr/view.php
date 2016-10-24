<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mr */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mr-view">

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
            'mr_desc',
            'po_id',
            'poline_id',
            'nf_id',
            'location_id',
            'timex1',
            'mr_remarks',
            'intuser_id',
        ],
    ]) ?>

</div>

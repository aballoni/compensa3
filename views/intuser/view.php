<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Intuser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Intusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intuser-view">

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
            'intuser_desc',
            'intuser_password',
            'intuser_remarks',
            'dep_id',
            'intuser_xvarchar1',
            'intuser_xdate1',
            'intuser_xboolean1:boolean',
            'intuser_xinterger1',
        ],
    ]) ?>

</div>

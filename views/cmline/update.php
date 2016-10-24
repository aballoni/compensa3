<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cmline */

$this->title = 'Update: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cmlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'cm_id' => $model->cm_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cmline-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

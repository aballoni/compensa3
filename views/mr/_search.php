<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mr_desc') ?>

    <?= $form->field($model, 'po_id') ?>

    <?= $form->field($model, 'poline_id') ?>

    <?= $form->field($model, 'nf_id') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'timex1') ?>

    <?php // echo $form->field($model, 'mr_remarks') ?>

    <?php // echo $form->field($model, 'intuser_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

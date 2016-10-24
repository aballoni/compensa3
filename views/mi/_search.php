<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mi_desc') ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'intclient_id') ?>

    <?php // echo $form->field($model, 'mi_qty') ?>

    <?php // echo $form->field($model, 'timex1') ?>

    <?php // echo $form->field($model, 'mi_remarks') ?>

    <?php // echo $form->field($model, 'intuser_id') ?>

    <?php // echo $form->field($model, 'mi_uprice') ?>

    <?php // echo $form->field($model, 'mi_tot_price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

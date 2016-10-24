<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uom-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'uom_desc') ?>

    <?= $form->field($model, 'uom_remarks') ?>

    <?= $form->field($model, 'uom_xdate1') ?>

    <?= $form->field($model, 'uom_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'uom_interger1') ?>

    <?php // echo $form->field($model, 'uom_xvarchar1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

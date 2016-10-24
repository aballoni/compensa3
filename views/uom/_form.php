<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Uom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uom_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_xdate1')->textInput() ?>

    <?= $form->field($model, 'uom_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'uom_interger1')->textInput() ?>

    <?= $form->field($model, 'uom_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

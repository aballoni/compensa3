<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mr_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'po_id')->textInput() ?>

    <?= $form->field($model, 'poline_id')->textInput() ?>

    <?= $form->field($model, 'nf_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'timex1')->textInput() ?>

    <?= $form->field($model, 'mr_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intuser_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

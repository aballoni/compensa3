<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Location */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="location-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'location_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_xdate1')->textInput() ?>

    <?= $form->field($model, 'location_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'location_interger1')->textInput() ?>

    <?= $form->field($model, 'location_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

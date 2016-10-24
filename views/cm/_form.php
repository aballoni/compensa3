<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cm_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_expeditor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_expeditor_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_receiver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_receiver_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_date_expedite')->textInput() ?>

    <?= $form->field($model, 'cm_date_eta')->textInput() ?>

    <?= $form->field($model, 'cm_modal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_vessel_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_tug_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_truck_plate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_transporter')->textInput() ?>

    <?= $form->field($model, 'cm_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_xdate1')->textInput() ?>

    <?= $form->field($model, 'cm_xdate2')->textInput() ?>

    <?= $form->field($model, 'cm_xdate3')->textInput() ?>

    <?= $form->field($model, 'cm_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'cm_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'cm_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'cm_xboolean4')->checkbox() ?>

    <?= $form->field($model, 'cm_xboolean5')->checkbox() ?>

    <?= $form->field($model, 'cm_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cm_xinterger1')->textInput() ?>

    <?= $form->field($model, 'cm_xinterger2')->textInput() ?>

    <?= $form->field($model, 'cm_xinterger3')->textInput() ?>

    <?= $form->field($model, 'location_from_id')->textInput() ?>

    <?= $form->field($model, 'location_to_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

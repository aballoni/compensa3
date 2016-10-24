<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trans_doc')->textInput() ?>

    <?= $form->field($model, 'trans_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_id')->textInput() ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'intuser_id')->textInput() ?>

    <?= $form->field($model, 'intclient_id')->textInput() ?>

    <?= $form->field($model, 'location_from_id')->textInput() ?>

    <?= $form->field($model, 'location_to_id')->textInput() ?>

    <?= $form->field($model, 'trans_qty')->textInput() ?>

    <?= $form->field($model, 'trans_uprice')->textInput() ?>

    <?= $form->field($model, 'trans_uom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trans_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cmline_x1')->checkbox() ?>

    <?= $form->field($model, 'cmline_x2')->checkbox() ?>

    <?= $form->field($model, 'timex1')->textInput() ?>

    <?= $form->field($model, 'timex2')->textInput() ?>

    <?= $form->field($model, 'trans_tot_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

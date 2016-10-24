<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cmline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cmline-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cm_id')->textInput() ?>

    <?= $form->field($model, 'cmline_qty')->textInput() ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'cmline_manual')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_id')->textInput() ?>

    <?= $form->field($model, 'cmline_reference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cmline_dimensions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cmline_x1')->checkbox() ?>

    <?= $form->field($model, 'cmline_x2')->checkbox() ?>

    <?= $form->field($model, 'intuser_id')->textInput() ?>

    <?= $form->field($model, 'cmline_timex1')->textInput() ?>

    <?= $form->field($model, 'cmline_timex2')->textInput() ?>

    <?= $form->field($model, 'cmline_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_from_id')->textInput() ?>

    <?= $form->field($model, 'location_to_id')->textInput() ?>

    <?= $form->field($model, 'cmline_uprice')->textInput() ?>

    <?= $form->field($model, 'cmline_tot_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mi-form">

    <?php $form = ActiveForm::begin(); ?>

<!--     <?= $form->field($model, 'mi_desc')->textInput(['maxlength' => true]) ?>
 -->
    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'intclient_id')->textInput() ?>

    <?= $form->field($model, 'mi_qty')->textInput() ?>

    <?= $form->field($model, 'timex1')->textInput() ?>

    <?= $form->field($model, 'mi_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intuser_id')->textInput() ?>

    <?= $form->field($model, 'mi_uprice')->textInput() ?>

    <?= $form->field($model, 'mi_tot_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

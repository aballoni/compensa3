<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Material */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mat_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_id')->textInput() ?>

    <?= $form->field($model, 'cat_id')->textInput() ?>

    <?= $form->field($model, 'material_vpn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_mpn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_sn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mattype_id')->textInput() ?>

    <?= $form->field($model, 'material_bin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equip_id')->textInput() ?>

    <?= $form->field($model, 'material_dimenssion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_weight')->textInput() ?>

    <?= $form->field($model, 'owner_id')->textInput() ?>

    <?= $form->field($model, 'material_picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batch')->textInput() ?>

    <?= $form->field($model, 'avg_price')->textInput() ?>

    <?= $form->field($model, 'tot_price')->textInput() ?>

    <?= $form->field($model, 'u_price')->textInput() ?>

    <?= $form->field($model, 'q')->textInput() ?>

    <?= $form->field($model, 'tot_q')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

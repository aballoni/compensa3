<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Stock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stock_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stock_date')->textInput() ?>

    <?= $form->field($model, 'stock_qty1')->textInput() ?>

    <?= $form->field($model, 'stock_qty2')->textInput() ?>

    <?= $form->field($model, 'stock_value1')->textInput() ?>

    <?= $form->field($model, 'stock_value2')->textInput() ?>

    <?= $form->field($model, 'stock_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'stock_interger1')->textInput() ?>

    <?= $form->field($model, 'stock_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

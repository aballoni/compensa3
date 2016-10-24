<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Budget */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="budget-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'budget_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'budget_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_id')->textInput() ?>

    <?= $form->field($model, 'budget_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'budget_xdate1')->textInput() ?>

    <?= $form->field($model, 'budget_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'budget_interger1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

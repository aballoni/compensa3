<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Intuser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intuser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'intuser_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intuser_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intuser_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_id')->textInput() ?>

    <?= $form->field($model, 'intuser_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intuser_xdate1')->textInput() ?>

    <?= $form->field($model, 'intuser_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'intuser_xinterger1')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

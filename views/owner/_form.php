<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Owner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="owner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'owner_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner_xdate1')->textInput() ?>

    <?= $form->field($model, 'owner_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'owner_xinterger1')->textInput() ?>

    <?= $form->field($model, 'owner_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

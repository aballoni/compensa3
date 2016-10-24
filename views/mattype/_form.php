<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mattype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mattype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mattype_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mattype_xinterger1')->textInput() ?>

    <?= $form->field($model, 'mattype_xdate1')->textInput() ?>

    <?= $form->field($model, 'mattype_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'mattype_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

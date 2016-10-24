<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Intclient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intclient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'intclient_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intclient_remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_id')->textInput() ?>

    <?= $form->field($model, 'intclient_xinterger1')->textInput() ?>

    <?= $form->field($model, 'intclient_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'intclient_xdate1')->textInput() ?>

    <?= $form->field($model, 'intclient_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

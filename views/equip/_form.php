<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Equip */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equip-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'equip_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equip_xdate1')->textInput() ?>

    <?= $form->field($model, 'equip_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'equip_xinterger1')->textInput() ?>

    <?= $form->field($model, 'equip_xvarchar1')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

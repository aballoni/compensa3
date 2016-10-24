<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EquipSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equip-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'equip_desc') ?>

    <?= $form->field($model, 'equip_xdate1') ?>

    <?= $form->field($model, 'equip_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'equip_xinterger1') ?>

    <?php // echo $form->field($model, 'equip_xvarchar1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

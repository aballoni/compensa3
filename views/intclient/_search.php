<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IntclientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intclient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'intclient_desc') ?>

    <?= $form->field($model, 'intclient_remarks') ?>

    <?= $form->field($model, 'dep_id') ?>

    <?= $form->field($model, 'intclient_xinterger1') ?>

    <?php // echo $form->field($model, 'intclient_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'intclient_xdate1') ?>

    <?php // echo $form->field($model, 'intclient_xvarchar1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

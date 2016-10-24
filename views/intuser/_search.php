<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IntuserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intuser-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'intuser_desc') ?>

    <?= $form->field($model, 'intuser_password') ?>

    <?= $form->field($model, 'intuser_remarks') ?>

    <?= $form->field($model, 'dep_id') ?>

    <?php // echo $form->field($model, 'intuser_xvarchar1') ?>

    <?php // echo $form->field($model, 'intuser_xdate1') ?>

    <?php // echo $form->field($model, 'intuser_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'intuser_xinterger1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

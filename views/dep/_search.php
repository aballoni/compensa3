<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DepSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dep-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dep_desc') ?>

    <?= $form->field($model, 'dep_remarks') ?>

    <?= $form->field($model, 'dep_xdate1') ?>

    <?= $form->field($model, 'dep_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'dep_xinterger1') ?>

    <?php // echo $form->field($model, 'dep_xvarchar1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

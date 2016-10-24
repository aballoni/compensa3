<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CostSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cost_desc') ?>

    <?= $form->field($model, 'cost_remarks') ?>

    <?= $form->field($model, 'cost_xvarchar1') ?>

    <?= $form->field($model, 'cost_xdate1') ?>

    <?php // echo $form->field($model, 'cost_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'cost_xinterger1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

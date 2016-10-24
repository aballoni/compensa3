<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BudgetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="budget-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'budget_desc') ?>

    <?= $form->field($model, 'budget_remarks') ?>

    <?= $form->field($model, 'dep_id') ?>

    <?= $form->field($model, 'budget_xvarchar1') ?>

    <?php // echo $form->field($model, 'budget_xdate1') ?>

    <?php // echo $form->field($model, 'budget_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'budget_interger1') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

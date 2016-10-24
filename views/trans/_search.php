<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trans-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'trans_doc') ?>

    <?= $form->field($model, 'trans_type') ?>

    <?= $form->field($model, 'nf_id') ?>

    <?= $form->field($model, 'material_id') ?>

    <?php // echo $form->field($model, 'intuser_id') ?>

    <?php // echo $form->field($model, 'intclient_id') ?>

    <?php // echo $form->field($model, 'location_from_id') ?>

    <?php // echo $form->field($model, 'location_to_id') ?>

    <?php // echo $form->field($model, 'trans_qty') ?>

    <?php // echo $form->field($model, 'trans_uprice') ?>

    <?php // echo $form->field($model, 'trans_uom') ?>

    <?php // echo $form->field($model, 'trans_remarks') ?>

    <?php // echo $form->field($model, 'cmline_x1')->checkbox() ?>

    <?php // echo $form->field($model, 'cmline_x2')->checkbox() ?>

    <?php // echo $form->field($model, 'timex1') ?>

    <?php // echo $form->field($model, 'timex2') ?>

    <?php // echo $form->field($model, 'trans_tot_price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

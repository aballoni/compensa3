<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmlineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cmline-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cm_id') ?>

    <?= $form->field($model, 'cmline_qty') ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'cmline_manual') ?>

    <?php // echo $form->field($model, 'nf_id') ?>

    <?php // echo $form->field($model, 'cmline_reference') ?>

    <?php // echo $form->field($model, 'cmline_dimensions') ?>

    <?php // echo $form->field($model, 'cmline_x1')->checkbox() ?>

    <?php // echo $form->field($model, 'cmline_x2')->checkbox() ?>

    <?php // echo $form->field($model, 'intuser_id') ?>

    <?php // echo $form->field($model, 'cmline_timex1') ?>

    <?php // echo $form->field($model, 'cmline_timex2') ?>

    <?php // echo $form->field($model, 'cmline_desc') ?>

    <?php // echo $form->field($model, 'location_from_id') ?>

    <?php // echo $form->field($model, 'location_to_id') ?>

    <?php // echo $form->field($model, 'cmline_uprice') ?>

    <?php // echo $form->field($model, 'cmline_tot_price') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

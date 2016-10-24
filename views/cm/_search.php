<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cm_desc') ?>

    <?= $form->field($model, 'cm_expeditor') ?>

    <?= $form->field($model, 'cm_expeditor_phone') ?>

    <?= $form->field($model, 'cm_receiver') ?>

    <?php // echo $form->field($model, 'cm_receiver_phone') ?>

    <?php // echo $form->field($model, 'cm_date_expedite') ?>

    <?php // echo $form->field($model, 'cm_date_eta') ?>

    <?php // echo $form->field($model, 'cm_modal') ?>

    <?php // echo $form->field($model, 'cm_vessel_name') ?>

    <?php // echo $form->field($model, 'cm_tug_name') ?>

    <?php // echo $form->field($model, 'cm_truck_plate') ?>

    <?php // echo $form->field($model, 'cm_transporter') ?>

    <?php // echo $form->field($model, 'cm_remarks') ?>

    <?php // echo $form->field($model, 'cm_xdate1') ?>

    <?php // echo $form->field($model, 'cm_xdate2') ?>

    <?php // echo $form->field($model, 'cm_xdate3') ?>

    <?php // echo $form->field($model, 'cm_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'cm_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'cm_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'cm_xboolean4')->checkbox() ?>

    <?php // echo $form->field($model, 'cm_xboolean5')->checkbox() ?>

    <?php // echo $form->field($model, 'cm_xvarchar1') ?>

    <?php // echo $form->field($model, 'cm_xvarchar2') ?>

    <?php // echo $form->field($model, 'cm_xvarchar3') ?>

    <?php // echo $form->field($model, 'cm_xinterger1') ?>

    <?php // echo $form->field($model, 'cm_xinterger2') ?>

    <?php // echo $form->field($model, 'cm_xinterger3') ?>

    <?php // echo $form->field($model, 'location_from_id') ?>

    <?php // echo $form->field($model, 'location_to_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

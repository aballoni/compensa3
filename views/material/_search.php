<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaterialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="material-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mat_desc') ?>

    <?= $form->field($model, 'uom_id') ?>

    <?= $form->field($model, 'cat_id') ?>

    <?= $form->field($model, 'material_vpn') ?>

    <?php // echo $form->field($model, 'material_manufacturer') ?>

    <?php // echo $form->field($model, 'material_mpn') ?>

    <?php // echo $form->field($model, 'material_sn') ?>

    <?php // echo $form->field($model, 'mattype_id') ?>

    <?php // echo $form->field($model, 'material_bin') ?>

    <?php // echo $form->field($model, 'material_tag') ?>

    <?php // echo $form->field($model, 'equip_id') ?>

    <?php // echo $form->field($model, 'material_dimenssion') ?>

    <?php // echo $form->field($model, 'material_weight') ?>

    <?php // echo $form->field($model, 'owner_id') ?>

    <?php // echo $form->field($model, 'material_picture') ?>

    <?php // echo $form->field($model, 'batch') ?>

    <?php // echo $form->field($model, 'avg_price') ?>

    <?php // echo $form->field($model, 'tot_price') ?>

    <?php // echo $form->field($model, 'u_price') ?>

    <?php // echo $form->field($model, 'q') ?>

    <?php // echo $form->field($model, 'tot_q') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'supplier_name') ?>

    <?= $form->field($model, 'supplier_brand') ?>

    <?= $form->field($model, 'supplier_cnpj') ?>

    <?= $form->field($model, 'supplier_ie') ?>

    <?php // echo $form->field($model, 'supplier_im') ?>

    <?php // echo $form->field($model, 'supplier_address') ?>

    <?php // echo $form->field($model, 'supplier_number') ?>

    <?php // echo $form->field($model, 'supplier_detail') ?>

    <?php // echo $form->field($model, 'supplier_place') ?>

    <?php // echo $form->field($model, 'supplier_city') ?>

    <?php // echo $form->field($model, 'supplier_state') ?>

    <?php // echo $form->field($model, 'supplier_cep') ?>

    <?php // echo $form->field($model, 'supplier_country') ?>

    <?php // echo $form->field($model, 'supplier_phone1') ?>

    <?php // echo $form->field($model, 'supplier_phone2') ?>

    <?php // echo $form->field($model, 'supplier_phone3') ?>

    <?php // echo $form->field($model, 'supplier_phone4') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

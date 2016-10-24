<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'jp_line') ?>

    <?= $form->field($model, 'jp_blueline') ?>

    <?= $form->field($model, 'jp_list') ?>

    <?php // echo $form->field($model, 'jp_or_qty') ?>

    <?php // echo $form->field($model, 'jp_or_aq_value') ?>

    <?php // echo $form->field($model, 'jp_or_book_value') ?>

    <?php // echo $form->field($model, 'jp_phy_qty') ?>

    <?php // echo $form->field($model, 'jp_tag') ?>

    <?php // echo $form->field($model, 'jp_inv_qty') ?>

    <?php // echo $form->field($model, 'jp_inv_value') ?>

    <?php // echo $form->field($model, 'jp_nf') ?>

    <?php // echo $form->field($model, 'jp_unit_price') ?>

    <?php // echo $form->field($model, 'jp_icms') ?>

    <?php // echo $form->field($model, 'jp_supl_icms') ?>

    <?php // echo $form->field($model, 'jp_supl_icms_nf') ?>

    <?php // echo $form->field($model, 'jp_value_inaccount') ?>

    <?php // echo $form->field($model, 'jp_xdate1') ?>

    <?php // echo $form->field($model, 'jp_xdate2') ?>

    <?php // echo $form->field($model, 'jp_xdate3') ?>

    <?php // echo $form->field($model, 'jp_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'jp_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'jp_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'jp_xvarchar1') ?>

    <?php // echo $form->field($model, 'jp_xvarchar2') ?>

    <?php // echo $form->field($model, 'jp_xvarchar3') ?>

    <?php // echo $form->field($model, 'jp_xinterger1') ?>

    <?php // echo $form->field($model, 'jp_xinterger2') ?>

    <?php // echo $form->field($model, 'jp_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

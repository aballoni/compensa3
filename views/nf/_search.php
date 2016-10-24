<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NfSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nf-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'nf_cnf') ?>

    <?= $form->field($model, 'nf_nat_op') ?>

    <?= $form->field($model, 'nf_nf') ?>

    <?php // echo $form->field($model, 'nf_cod_prod') ?>

    <?php // echo $form->field($model, 'nf_ncm') ?>

    <?php // echo $form->field($model, 'nf_u_com') ?>

    <?php // echo $form->field($model, 'nf_q_com') ?>

    <?php // echo $form->field($model, 'nf_v_un_com') ?>

    <?php // echo $form->field($model, 'nf_tot_nf') ?>

    <?php // echo $form->field($model, 'nf_n_item') ?>

    <?php // echo $form->field($model, 'nf_xprod') ?>

    <?php // echo $form->field($model, 'nf_data_emissao') ?>

    <?php // echo $form->field($model, 'nf_xdate2') ?>

    <?php // echo $form->field($model, 'nf_xdate3') ?>

    <?php // echo $form->field($model, 'nf_xboolean1')->checkbox() ?>

    <?php // echo $form->field($model, 'nf_xboolean2')->checkbox() ?>

    <?php // echo $form->field($model, 'nf_xboolean3')->checkbox() ?>

    <?php // echo $form->field($model, 'nf_xvarchar1') ?>

    <?php // echo $form->field($model, 'nf_xvarchar2') ?>

    <?php // echo $form->field($model, 'nf_xvarchar3') ?>

    <?php // echo $form->field($model, 'supplier_id') ?>

    <?php // echo $form->field($model, 'batch') ?>

    <?php // echo $form->field($model, 'nf_xinterger3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

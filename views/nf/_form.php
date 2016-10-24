<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'nf_cnf')->textInput() ?>

    <?= $form->field($model, 'nf_nat_op')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_nf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_cod_prod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_ncm')->textInput() ?>

    <?= $form->field($model, 'nf_u_com')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_q_com')->textInput() ?>

    <?= $form->field($model, 'nf_v_un_com')->textInput() ?>

    <?= $form->field($model, 'nf_tot_nf')->textInput() ?>

    <?= $form->field($model, 'nf_n_item')->textInput() ?>

    <?= $form->field($model, 'nf_xprod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_data_emissao')->textInput() ?>

    <?= $form->field($model, 'nf_xdate2')->textInput() ?>

    <?= $form->field($model, 'nf_xdate3')->textInput() ?>

    <?= $form->field($model, 'nf_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'nf_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'nf_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'nf_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nf_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_id')->textInput() ?>

    <?= $form->field($model, 'batch')->textInput() ?>

    <?= $form->field($model, 'nf_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

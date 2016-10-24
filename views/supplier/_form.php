<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_cnpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_ie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_im')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_cep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_phone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_phone2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_phone3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_phone4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

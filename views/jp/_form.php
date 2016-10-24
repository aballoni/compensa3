<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'jp_line')->textInput() ?>

    <?= $form->field($model, 'jp_blueline')->textInput() ?>

    <?= $form->field($model, 'jp_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jp_or_qty')->textInput() ?>

    <?= $form->field($model, 'jp_or_aq_value')->textInput() ?>

    <?= $form->field($model, 'jp_or_book_value')->textInput() ?>

    <?= $form->field($model, 'jp_phy_qty')->textInput() ?>

    <?= $form->field($model, 'jp_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jp_inv_qty')->textInput() ?>

    <?= $form->field($model, 'jp_inv_value')->textInput() ?>

    <?= $form->field($model, 'jp_nf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jp_unit_price')->textInput() ?>

    <?= $form->field($model, 'jp_icms')->textInput() ?>

    <?= $form->field($model, 'jp_supl_icms')->textInput() ?>

    <?= $form->field($model, 'jp_supl_icms_nf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jp_value_inaccount')->textInput() ?>

    <?= $form->field($model, 'jp_xdate1')->textInput() ?>

    <?= $form->field($model, 'jp_xdate2')->textInput() ?>

    <?= $form->field($model, 'jp_xdate3')->textInput() ?>

    <?= $form->field($model, 'jp_xboolean1')->checkbox() ?>

    <?= $form->field($model, 'jp_xboolean2')->checkbox() ?>

    <?= $form->field($model, 'jp_xboolean3')->checkbox() ?>

    <?= $form->field($model, 'jp_xvarchar1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jp_xvarchar2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jp_xvarchar3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jp_xinterger1')->textInput() ?>

    <?= $form->field($model, 'jp_xinterger2')->textInput() ?>

    <?= $form->field($model, 'jp_xinterger3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

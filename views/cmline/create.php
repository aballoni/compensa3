<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cmline */

$this->title = 'CM Item';
$this->params['breadcrumbs'][] = ['label' => 'Cmlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cmline-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mr */

$this->title = 'Material Receipt';
$this->params['breadcrumbs'][] = ['label' => 'Mrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

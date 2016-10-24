<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nf */

$this->title = 'Nota Fiscal';
$this->params['breadcrumbs'][] = ['label' => 'Nfs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nf-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

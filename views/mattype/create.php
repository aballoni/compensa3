<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mattype */

$this->title = 'Material Type';
$this->params['breadcrumbs'][] = ['label' => 'Mattypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mattype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

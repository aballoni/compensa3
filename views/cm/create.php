<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cm */

$this->title = 'Cargo Manifest';
$this->params['breadcrumbs'][] = ['label' => 'Cms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

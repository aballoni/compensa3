<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Intclient */

$this->title = 'Internal Client';
$this->params['breadcrumbs'][] = ['label' => 'Intclients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intclient-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

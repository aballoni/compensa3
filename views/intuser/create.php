<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Intuser */

$this->title = 'User';
$this->params['breadcrumbs'][] = ['label' => 'Intusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

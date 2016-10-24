<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jp */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'material_id',
            'jp_line',
            'jp_blueline',
            'jp_list',
            'jp_or_qty',
            'jp_or_aq_value',
            'jp_or_book_value',
            'jp_phy_qty',
            'jp_tag',
            'jp_inv_qty',
            'jp_inv_value',
            'jp_nf',
            'jp_unit_price',
            'jp_icms',
            'jp_supl_icms',
            'jp_supl_icms_nf',
            'jp_value_inaccount',
            'jp_xdate1',
            'jp_xdate2',
            'jp_xdate3',
            'jp_xboolean1:boolean',
            'jp_xboolean2:boolean',
            'jp_xboolean3:boolean',
            'jp_xvarchar1',
            'jp_xvarchar2',
            'jp_xvarchar3',
            'jp_xinterger1',
            'jp_xinterger2',
            'jp_xinterger3',
        ],
    ]) ?>

</div>

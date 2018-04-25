<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\fragment */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fragments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fragment-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确认要删除该碎片吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            [
                'attribute'=>'name',
                'value'=>$model->modules->name,

                'label'=>'图片所属模块'
            ],
            'content:ntext',
            'create_time',
            'update_time',
        ],
    ]) ?>

</div>

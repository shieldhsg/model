<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Images */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '查看图片', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-view">

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定要删除该图片吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= Html::img(['/file','id'=>$model->file_id]) ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            [
                'attribute'=>'name',
                'value'=>$model->modules->name,

                'label'=>'图片所属模块'
            ],
            'url:url',
            'create_time',
            'update_time',

        ],
    ]) ?>

</div>

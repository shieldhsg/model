<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '更新文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">


    <p>
        <?= Html::a('重新编辑', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除该文章吗',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute'=>'name',
                'value'=>$model->modules->name,

                'label'=>'图片所属模块'
            ],            'name',
            'abstract',
            'content:html',
        ],
    ]) ?>

</div>

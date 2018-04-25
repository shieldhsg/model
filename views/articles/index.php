<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\articlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <p>该功能可以对网站中对文章进行管理</p>
    <p>
        <?=
        Html::a('添加文章', ['create'], [
            'class' => 'btn btn-success',
            'id' => 'create', // 按钮的id随意
            'target' => '_blank',
        ])
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute'=>'name',
                'value'=>'modules.name',
                'label'=>'文章所属模块'
            ],
            'name',
            'abstract',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}  {delete}',
                'header' => '操作',
                'buttons' => [
                    'view' => function ($url, $model, $key) {
                        return Html::a("预览", $url, [
                            'title' => '预览',
                            // btn-update 目标class
                            'class' => 'btn btn-primary',
                            // 固定写法
                            'target' => '_self',
                        ]);
                    },
                    'update' => function ($url, $model, $key) {
                        return Html::a("编辑", $url, [
                            'title' => '编辑',
                            // btn-update 目标class
                            'class' => 'btn btn-warning',
                            // 固定写法
                            'target' => '_blank',
                        ]);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('删除', $url, [
                            'title' => '删除',
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => '确定要删除该文章吗?',
                                'method' => 'post',
                            ],
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
</div>

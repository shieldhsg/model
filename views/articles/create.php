<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = '添加文章';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">

    <?= $this->render('_form', [
        'model' => $model,
        'modules'=>$modules,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = 'Create Article';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <a href="https://packagist.org/packages/kriss/yii2-wang-editor" >测试例子</a>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

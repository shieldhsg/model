<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UserBackend */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User Backends', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-backend-view">

    <p>
        <?= Html::a('停用', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '您确定要停用该用户吗',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'email:email',
        ],
    ]) ?>
    头像:<?= Html::img(['/file','id'=>$model->file_id]) ?>

</div>

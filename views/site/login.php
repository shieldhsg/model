<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = '童趣大本营 登陆页面';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<style type="text/css">
body{
    background: #C6E746!important;
}
.logo {
    width: 15%;
}
</style>

<div class="login-box">
    <div class="login-logo">
        <img class="logo" src="/images/logo.jpeg">
        <a href="#"><b>童趣tms管理系统</b></a>

    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">请输入您的用户名和密码</p>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label('用户名')
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label('密码')
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox()->label('记住我')?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('登陆', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>

        <!-- /.social-auth-links -->

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->

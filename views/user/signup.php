<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 2018/1/31
 * Time: 下午7:54
 */

?>

<div class="site-signup">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = \yii\bootstrap\ActiveForm::begin(['id'=>'form-signup'])?>
                <?= $form->field($model,'username')->label('登陆名')->textInput(['autofocus'=>true])?>
                <?= $form->field($model,'email')->label('邮箱')?>
                <?= $form->field($model,'password')->label('米帕')->passwordInput()?>
                <div class="form-group">
                    <?= \yii\helpers\Html::submitButton('添加',['class'=>'btn btn-primary','name'=>'signup-button']) ?>
                </div>
            <?php \yii\bootstrap\ActiveForm::end() ?>
        </div>
    </div>
</div>

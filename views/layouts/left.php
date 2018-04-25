<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?= \yii\helpers\Html::img(['/file','id'=>Yii::$app->user->getIdentity()->file_id,['class'=>'img-circle']]) ?>            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->getIdentity()->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>

        <?=
        \dmstr\widgets\Menu::widget([
            'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
            'items' => \mdm\admin\components\MenuHelper::getAssignedMenu(Yii::$app->user->id)
        ]);
        ?>

    </section>

</aside>

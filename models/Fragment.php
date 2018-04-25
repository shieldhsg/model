<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%fragment}}".
 *
 * @property int $id 非业务主键
 * @property string $name 碎片名称
 * @property string $content 碎片内容
 * @property int $module_id 文件id
 * @property int $status 数据状态
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class Fragment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fragment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'],'string'],
            [['module_id','status'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'name' => '碎片名称',
            'content' => '碎片内容',
            'module_id' => '所属模块',
            'status' => '数据状态',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }

    /**
     * 关联表
     */
    public function getModules(){
        // hasOne要求返回两个参数 第一个参数是关联表的类名 第二个参数是两张表的关联关系
        return $this->hasOne(Modules::className(), ['id' => 'module_id']);
    }
}

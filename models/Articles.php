<?php

namespace app\models;

use app\models\query\ArticlesQuery;
use Yii;

/**
 * This is the model class for table "{{%articles}}".
 *
 * @property int $id 非业务主键
 * @property int $module_id 属于哪个模块
 * @property string $name 文章名称
 * @property string $abstract 摘要
 * @property string $content 文章内容
 * @property int $status 数据状态
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%articles}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['module_id', 'status'], 'integer'],
            [['content'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['name', 'abstract'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '文章编号',
            'module_id' => '所属模块',
            'name' => '文章名称',
            'abstract' => '摘要',
            'content' => '文章内容',
            'status' => '数据状态',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }

    /**
     * @inheritdoc
     * @return ArticlesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticlesQuery(get_called_class());
    }


    /**
     * 关联表
     */
    public function getModules(){
        // hasOne要求返回两个参数 第一个参数是关联表的类名 第二个参数是两张表的关联关系
        return $this->hasOne(Modules::className(), ['id' => 'module_id']);
    }
}

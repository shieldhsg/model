<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%modules}}".
 *
 * @property int $id 非业务主键
 * @property string $name 模块名称
 * @property int $type
 * @property int $status 数据状态
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class Modules extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%modules}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['create_time', 'update_time'], 'safe'],
            [['name', 'status'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '非业务主键',
            'name' => '模块名称',
            'type' => 'Type',
            'status' => '数据状态',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }
}

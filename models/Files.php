<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%files}}".
 *
 * @property int $id 非业务主键
 * @property string $name 文件名称
 * @property string $original_name 文件原始名称
 * @property int $file_size 文件大小
 * @property string $file_ext 文件扩展名
 * @property string $url 地址
 * @property int $status 数据状态
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class Files extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%files}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file_size'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['name', 'original_name', 'url', 'status'], 'string', 'max' => 255],
            [['file_ext'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '非业务主键',
            'name' => '文件名称',
            'original_name' => '文件原始名称',
            'file_size' => '文件大小',
            'file_ext' => '文件扩展名',
            'url' => '地址',
            'status' => '数据状态',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }
}

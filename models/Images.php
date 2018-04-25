<?php

namespace app\models;

use Yii;
use app\models\Files;

/**
 * This is the model class for table "{{%images}}".
 *
 * @property int $id 非业务主键
 * @property string $name 图片名称
 * @property int $module_id 模块id
 * @property int $file_id 文件id
 * @property string $url 图片点击链接
 * @property int $status 数据状态
 * @property string $create_time 创建时间
 * @property string $update_time 更新时间
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%images}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['module_id', 'file_id','status'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'name' => '图片名称',
            'module_id' => '模块',
            'file_id' => '文件',
            'url' => '图片点击链接',
            'status' => '数据状态',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }

    public function behaviors()
    {
        return
		[
		    [
            'class' => 'mdm\upload\UploadBehavior',
            'attribute' => 'file', // required, use to receive input file
            'savedAttribute' => 'file_id', // optional, use to link model with saved file.
            'uploadPath' => '../../uploads/', // saved directory. default to '@runtime/upload'
            'autoSave' => true, // when true then uploaded file will be save before ActiveRecord::save()
            'autoDelete' => true, // when true then uploaded file will deleted before ActiveRecord::delete()
             ]
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

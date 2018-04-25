<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%gr_notice_log}}".
 *
 * @property int $id 非业务主键
 * @property int $type 类型,1为每日提醒，2为每周提醒，3为每月提醒，4为月底提醒
 * @property string $username 提醒人
 * @property string $detail 详情
 * @property int $create_time 创建时间
 */
class GrNoticeLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gr_notice_log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detail'], 'required'],
            [['detail'], 'string'],
            [['create_time'], 'integer'],
            [['type'], 'string', 'max' => 4],
            [['username'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '非业务主键',
            'type' => '类型,1为每日提醒，2为每周提醒，3为每月提醒，4为月底提醒',
            'username' => '提醒人',
            'detail' => '详情',
            'create_time' => '创建时间',
        ];
    }
}

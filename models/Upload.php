<?php
namespace  app\models;

use yii\db\ActiveRecord;

class Upload extends  ActiveRecord
{
    public $file;

    public function rule()
    {
        return [
            [["file"],"file",],
        ];
    }
}

?>
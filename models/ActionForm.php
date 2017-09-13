<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ActionForm extends Model
{
    public $title;
    public $text;
    public $data;
    
        public function rules()
    {
        return [
            [['title', 'text'], 'required']
        ];
    }

}
<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    
    public function rules()
    {
        return[
            [['name', 'email'], 'required'], // Поля name и email обязательны для заполнения;
            ['email', 'email'], // В поле email должен быть правильный адрес email.
        ];
    }
}
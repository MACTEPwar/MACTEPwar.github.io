<?php

namespace app\models;

use yii\base\Model;

class Login extends Model
{
    public $email;
    public $password;
    
    public function rules()
    {
        return [
            [['email','password'],'required'],
            ['email','email'],
            ['password','validatePassword']
        ];
    }
    
    public function validatePassword($attribute,$params)
    {
        $user = User::findOne($this->email);
        if (!$user || ($user->password != $this->password))
        {
            $this->addError($attribute, 'пароль или пользователь введены не верно');
        }
    }
}
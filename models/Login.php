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
    
//    public function validatePassword($attribute,$params)
//    {
//        $user = $this->getUser();
//        if (!$user || ($user->password != $this->password))
//        {
//            $this->addError($attribute, 'пароль или пользователь введены не верно');
//        }
//    }
    
     public function validatePassword($attribute,$params)
    {
        if (!$this->hasErrors())
        {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password))
            {
                $this->addError($attribute, 'пароль или пользователь введены не верно');
            }
        }
    }
    
    public function getUser()
    {
        return User::findOne($this->email);
    }
    
}
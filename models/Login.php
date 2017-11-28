<?php

namespace app\models;

use yii\base\Model;
use app\models\Users;

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
            echo $user['password'];
            if (!$user || !($this->password === $user['password']))
            {
                $this->addError($attribute, 'пароль или пользователь введены не верно');
            }
        }
    }
    
    public function getUser()
    {
        return Users::findOne(['email'=>$this->email]);

    }
}
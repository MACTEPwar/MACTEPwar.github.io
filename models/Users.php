<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Users extends ActiveRecord implements IdentityInterface
{
    public $id;
    public $email;
    public $username;
    public $password;
    public $authKey;
    
    //private static $users;
    public static function findIdentity($id)
    {
        return self::findOne($id);
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }
    
    public function getAuthKey()
    {
        return $this->authKey;
    }
    
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
    
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
    public function getUsers()
    {
        return Users::find()->all();
    }
}
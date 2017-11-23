<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

//class User extends \yii\base\Object implements \yii\web\IdentityInterface
class User extends ActiveRecord implements IdentityInterface
{
    public $id;
    public $email;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'id' => '100',
            'email' => '2@b.b',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'email' => '2@b.b',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return self::findOneId($id);
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], strval($username)) === 0) {
                return new static($user);
            }
        }

        return null;
    }
    public static function findOneId($id)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['id'], strval($id)) === 0) {
                return new static($user);
            }
        }
        return null;
    } 
    public static function findOne($email)
    {
        foreach (self::$users as $user)
        {
            if (strcasecmp($user['email'], strval($email)) === 0) 
            {
                return new static($user);
            }
        }
        return null;
    }
    
    public static function findOneTest($email)
    {
//        foreach (self::$users as $user)
//        {
//            if ($user['email']==$email)
//            {
//                echo '2';
//                return new ($user);
//            }
//        }
//        echo '3';
//        return null;
        return $email;
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}

<?php

class UserService
{
    public static function getUser($username)
    {
        $daoUser = new DaoUser();
        return $daoUser->findByUsername($username);
    }

    public static function setUser(UserEntity $obj)
    {
        $daoUser = new DaoUser();

        if ($daoUser->findById($obj->user_id) == null) {

            return $daoUser->save($obj);
        }

        $daoUser->update($obj);
        return true;
    }
}
<?php

class DaoUser
{
    public function findAll()
    {
        $result = MySQLBD::queryRead("SELECT * FROM user_client");
        $list = array();
        foreach ($result as $row) {
            $list[] = UserEntity::arrayToObj($row);
        }
        return $list;
    }

    public function findById($id)
    {
        $result = MySQLBD::queryRead("SELECT * FROM user_client WHERE user_id = ?", $id);
        if (count($result) < 1) {
            return null;
        }
        return UserEntity::arrayToObj($result[0]);
    }

    public function findByUsername($username)
    {
        $result = MySQLBD::queryRead("SELECT * FROM user_client WHERE username = ?", $username);
        if (count($result) < 1) {
            return null;
        }
        return UserEntity::arrayToObj($result[0]);
    }

    public function save(UserEntity $obj)
    {
        $query = "INSERT INTO user_client(                 
                username,
                user_password,
                mail,
                registration_date,
                user_profile     
                ) VALUES (?, ?, ?, ?, ?)";
        $affected_rows = MySQLBD::queryWrite(
            $query,
            $obj->username,
            $obj->user_password,
            $obj->mail,
            $obj->registration_date,
            $obj->user_profile
        );
        return $affected_rows > 0;
    }

    public function update(UserEntity $obj)
    {
        $query = "UPDATE user_client SET                 
                mail = ?
                WHERE user_id = ?";
        MySQLBD::queryWrite(
            $query,
            $obj->mail,
            $obj->user_id
        );
    }

}
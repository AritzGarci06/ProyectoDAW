<?php

class DaoBackdrop
{
    public function findAll()
    {
        $result = MySQLBD::queryRead("SELECT * FROM backdrop");
        $list = array();
        foreach ($result as $row) {
            $list[] = BackdropEntity::arrayToObj($row);
        }
        return $list;
    }

    public function findById($id)
    {
        $result = MySQLBD::queryRead("SELECT * FROM backdrop WHERE movie_id = ?", $id);
        $list = array();
        foreach ($result as $row) {
            $list[] = BackdropEntity::arrayToObj($row);
        }
        return $list;
    }

    public function save(BackdropEntity $backdrop)
    {
        $query = "INSERT INTO backdrop VALUES (?,?)";
        MySQLBD::queryWrite(
            $query,
            $backdrop->link,
            $backdrop->imdb_id,
        );
    }

}
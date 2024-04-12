<?php
class DaoGenre
{
    public function findById($id)
    {
        $result = MySQLBD::queryRead("SELECT * FROM movie_genre m join genre g on m.genre_id = g.genre_id where m.movie_id = ?;", $id);
        $list = array();
        foreach ($result as $row) {
            $list[] = GenreEntity::arrayToObj($row);
        }
        return $list;
    }

    public function findAll(){
        $result = MySQLBD::queryRead("SELECT * FROM genre");
        $list = array();
        foreach ($result as $row) {
            $list[] = GenreEntity::arrayToObj($row);
        }
        return $list;
    }
}
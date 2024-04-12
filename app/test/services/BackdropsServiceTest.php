<?php

namespace model\services;

use PHPUnit\Framework\TestCase;
require_once "app/model/services/BackdropService.php";
require_once "app/model/dao/DaoBackdrop.php";
require_once "app/model/entity/BackdropEntity.php";
require_once "app/model/config/MySQLBD.php";
class BackdropsServiceTest extends TestCase
{

    public function testGetMovies()
    {
        $arr = BackdropsService::getBackdrops();
        $this->assertFalse(empty($arr));
    }
}

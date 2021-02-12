<?php

namespace App\Models;


abstract class Main {

    
    static function get($path) {
       
        $query = \APP\DB::$db->query("SELECT * FROM `pages_hw` WHERE `path` = '". $path ."'");
        $result = $query->fetchAll();
        
        return $result;

    }


}
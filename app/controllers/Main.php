<?php

namespace App\Controllers;

use App\Models\Main as Model;
use App\Views\Main as View;

abstract class Main {
    
    static function on($path) {

        $data = Model::get($path);
        View::render($data);
        

    }
}
<?php

namespace App\Controllers;

use App\Models\Main as Model;
use App\Views\Main as View;
use App\Views\Page404 as View404;

abstract class Main {
    
    static function on($path) {

        $data = Model::get($path);

        if(empty($data) || count($data) == 0) {
            View404::render();
        } else {
            View::render($data);
        }

    }
}
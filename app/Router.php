<?php 

namespace App;

abstract class Router {

    static function on() {
       
        $path = $_REQUEST['path'];

        $path = array_filter(explode('/', $path));

        if (!empty($path[0])) {
            $path = $path[0];
        } else {
            $path = 'home';
        }

        $class_name = 'App\\Controllers\\'. $path;
        
        if(!class_exists($class_name)) $class_name = 'App\\Controllers\\Main';

        $class_name::on($path);
        
    }
}
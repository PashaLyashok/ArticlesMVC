<?php
// https://github.com/PashaLyashok/ArticlesMVC

require_once './app/Autoloader.php';
App\DB::connect();
require_once './app/functions.php';
App\Router::on();
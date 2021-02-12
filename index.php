<?php
// https://github.com/PashaLyashok/ArticlesMVC
// 2.Делать .htaccess (если не получится, то спросить у препода в воскресенье)
// 3.Делать остальную часть дз
require_once './app/Autoloader.php';
App\DB::connect();
require_once './app/functions.php';
App\Router::on();
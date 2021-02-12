<?php

function get_nav() {
    global $li;

    $query = APP\DB::$db->query("SELECT `path` FROM `pages_hw`");
    
    foreach ($query as $nav) {
        $li .= '<li><a href="'. $nav['path'] .'">'. $nav['path'] .'</a></li>';
    }

    return $li;
}
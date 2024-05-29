<?php

require_once 'support.php';

function getVersion() {
    return random_int(1, 1000);
}

function getMainMenu() {
    $menu_json = file_get_contents(__DIR__ . '/../menu.json');
    $menu = json_decode($menu_json, true);

    echo '<div id="main-menu">';
    echo generateMenuElements($menu);
    echo '</div>';
} 

function getFooterMenu(){
    $menu_json = file_get_contents(__DIR__ . '/../menu.json');
    $menu = json_decode($menu_json, true);

    echo '<div id="footer-menu">';
    echo generateMenuElements($menu);
    echo '</div>';
}

function getPosts() {
    $posts_json = file_get_contents(__DIR__ . '/../posts.json');
    $posts = json_decode($posts_json, true);

    echo '<section id="posts">';
    echo generatePosts($posts);
    echo '</section>';
}

function getBanner($location, $url = '#') {
    echo '<a href="' . $url . '">';
    echo '<img src="' . $location . '" style="width: 100%;" alt="">';
    echo '</a>';
}

function getSocialLink($icon, $url = '#') {
    echo '<a href="' . $url . '">';
    echo '<img src="' . $icon . '" style="width: 100%;" alt="">';
    echo '</a>';
}

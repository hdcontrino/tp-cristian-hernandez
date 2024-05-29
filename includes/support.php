<?php

function generateMenuElements($menu, $hidden = false)
{
    usort($menu, function ($a, $b) {
        return $a['order'] <=> $b['order'];
    });

    echo '<ul class="menu ' . ($hidden ? 'hidden' : '') . '">';

    foreach ($menu as $item)
        include __DIR__ . '/../components/menu-item.php';

    echo '</ul>';
}

function generatePosts($posts) {
    usort($posts, function ($a, $b) {
        return $a['order'] <=> $b['order'];
    });

    echo '<div class="posts-group">';

    foreach ($posts as $post)
        include __DIR__ . '/../components/post-item.php';

    echo '</div>';
}

<?php
add_theme_support('post-thumbnails');

function the_short(int $letters): void
{
    $short = get_the_excerpt();

    echo trim(substr($short, 0, $letters));

    if (strlen($short) > $letters) {
        echo '...';
    }
}

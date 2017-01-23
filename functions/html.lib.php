<?php

// functions/html.lib.php 

function create_attr_str(array $classes) : string {
    if (empty($classes)) {
        return '';
    }
    $res = ' class="';
    foreach($classes as $class) {
        $res .= $class . ' ';
    }
    $res .= '" ';
    return $res;
}

function render_nav(array $menu_lang, array $menu_cfg) : string {
    $res = '';
    $k = 0;

    foreach($menu_lang as $key => $menu_item) {
        $classes = ['nav-link'];
        $res .= '<a href="' . $menu_cfg[$key] . '"';
        if ($k === 0) {
            $classes[] = 'active';
        }
        $res .= create_attr_str($classes);
        $res .= '" title="' . $menu_lang[$key] . '">';
        $res .= $menu_lang[$key];
        $res .= '</a>';
        $k++;
    }

    return $res;
}

<?php

// functions/core.lib.php

function run_controller(string $uri) {
    $routes = include '../config/routes.config.php';
    if (isset($routes[$uri])) {
        include '../controllers/' . $routes[$uri] . '.ctrl.php';
        call_user_func($routes[$uri] . '_controller');
    } else {
        echo '404';
    }
}

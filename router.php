<?php

# Router for php built-in server (for development)
# e.g.
#  php -S localhost:8080 router.php

if (file_exists(__DIR__ . '/' . $_SERVER['REQUEST_URI'])) {
    return false; // serve the requested resource as-is.
}

if (file_exists(__DIR__ . '/' . $_SERVER['REQUEST_URI'] . '.php')) {
    include_once __DIR__ . '/' . $_SERVER['REQUEST_URI'] . '.php';
}

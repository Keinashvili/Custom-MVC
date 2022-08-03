<?php

// For defining routes
function url($url='') {
    echo ADDR.$url;
}

// Display errors in template file
function error($errorName) {
    if (key_exists($errorName,$_SESSION)){
        echo $_SESSION[$errorName];
    }
}
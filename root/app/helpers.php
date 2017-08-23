<?php

/**
 * Check for the active URL and append a class
 * @param $path
 * @param string $active
 * @return string
 * Created by smartrahat Date: 2016.12.07 Time: 07:18 PM
 */
function isActive($path, $active = 'active nav-active nav-expanded'){
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}
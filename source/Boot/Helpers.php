<?php

/**
 * Format and dump a variable and die
 * 
 * @param $variable Variable to be formated
 */
function dd($variable = [])
{
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
    die();
}

/**
 * Gets the query string data
 *
 * @param string $param The param to get in URL.
 * @param $filter The filter to be applied in the param.
 */
function get(string $param, $filter = FILTER_SANITIZE_STRING)
{
    return filter_input(INPUT_GET, $param, $filter);
}

/**
 * Gets the body data
 *
 * @param string $param The param to get in body request.
 * @param $filter The filter to be applied in the param.
 */
function post(string $param, $filter = FILTER_SANITIZE_STRING) 
{
    return filter_input(INPUT_POST, $param, $filter);
}

/**
 * Gets the current date
 * 
 * @param string $dateFormat Format to date be parsed
 * @return DateTime
 */
function getCurrentDate(string $dateFormat = 'Y-m-d H:i:s')
{
    return date($dateFormat);
}

/**
 * Redirect the user to a specific URL
 * 
 * @param string $url URL to which the user will be redirected to
 */
function redirect(string $url)
{
    header('Location: ' . $url);
}
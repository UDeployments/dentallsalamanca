<?php

/**
 * Function to return the path of the URL
 * @return string
 */
function getPath(): string
{
    return request()->path();
}

<?php

function vd($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function dd($variable)
{
    vd($variable);
    die();
}
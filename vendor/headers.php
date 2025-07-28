<?php

function redirect ($require)
{
    header("Location: {$require}");
    exit;
}
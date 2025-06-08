#!/usr/bin/env/ php
<?php

chdir(__DIR__);

$command = $argv[1] ?? null;

switch ($command) {
    case 'start':
        $cmd = 'php -S localhost:8080';
        system($cmd); 
        break;

    default:
        echo "Please write available command!";
        break;
}
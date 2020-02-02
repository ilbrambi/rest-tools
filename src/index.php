<?php

include 'vendor/autoload.php';


use ilbrambi\RestTools\RestTools;
use RestService\Server;

$tools = new RestTools();

Server::create('/')
    ->addDeleteRoute('tools/string/brackets/delete', function ($string) use ($tools) {
        return $tools->removeExternalBracketsFromString($string);
    })->run();

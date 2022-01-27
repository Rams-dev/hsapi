<?php

$router = new \Bramus\Router\Router();
session_start();

$router->get('/', 'Rams\Apihs\controllers\hubspotClients@index');

$router->run();
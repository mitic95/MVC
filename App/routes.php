<?php

$router->get('', 'Pagescontroller@home');

$router->get('about', 'Pagescontroller@about');

$router->get('contact', 'Pagescontroller@contact');

$router->get('users', 'Usercontroller@index');

$router->post('users', 'Usercontroller@store');
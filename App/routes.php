<?php

$router->get('', 'Pagescontroller@home');

$router->get('register', 'Pagescontroller@register');
$router->post('register', 'Usercontroller@store');

$router->get('login', 'Pagescontroller@login');

$router->get('user/list', 'Pagescontroller@listAllUser');
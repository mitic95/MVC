<?php

use Core\Router;
use Core\Request;

require 'vendor/autoload.php';
require 'Core/bootstrap.php';

Router::load('App/routes.php')->direct(Request::uri(), Request::method());
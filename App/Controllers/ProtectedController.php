<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 8/14/18
 * Time: 5:32 PM
 */

namespace App\Controllers;

/**
 * abstract Class ProtectedController
 * @package App\Controllers
 */
abstract class ProtectedController extends Controller
{
    /**
     * ProtectedController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        if(!isset($_SESSION['login'])){
            header('Location: /');
        }
    }
}
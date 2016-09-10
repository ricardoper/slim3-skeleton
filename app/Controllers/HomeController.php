<?php namespace App\Controllers;

use App\Kernel\Controller;

class HomeController extends Controller
{

    /**
     * Index Action
     *
     * @return string
     */
    public function index()
    {
        return $this->render('home.twig');
    }
}

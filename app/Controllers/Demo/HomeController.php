<?php namespace App\Controllers\Demo;

use App\Kernel\ControllerAbstract;

class HomeController extends ControllerAbstract
{

    /**
     * Index Action
     *
     * @return string
     */
    public function index()
    {
        return $this->render('Demo/Home/index.twig');
    }
}

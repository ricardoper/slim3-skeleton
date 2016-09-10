<?php namespace App\Controllers;

use App\Kernel\Controller;

class HelloController extends Controller
{

    /**
     * Index Action
     *
     * @param string $name
     * @return string
     */
    public function index($name)
    {
        return $this->render('hello.twig', ['name' => $name]);
    }
}

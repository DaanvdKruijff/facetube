<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $this->app->view()->set('title', 'Home');

        $this->app->render('home/index');
    }
}

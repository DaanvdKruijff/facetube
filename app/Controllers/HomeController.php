<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // Redirect if authenticated
        $this->redirectIfAuthenticated();

        $this->app->view()->set('title', 'Home');
        $this->app->render('home/index');
    }
}

<?php

namespace App\Controllers;

class AuthController extends Controller
{
    public function signup()
    {
        //

        $this->app->view()->set('title', 'Sign up');
        $this->app->render('auth/signup');
    }

    public function signin()
    {
        //

        $this->app->view()->set('title', 'Sign in');
        $this->app->render('auth/signin');
    }
}

<?php

namespace App\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $this->app->view()->set('title', 'dashboard');
        $this->app->render('dashboard/index');
    }
}

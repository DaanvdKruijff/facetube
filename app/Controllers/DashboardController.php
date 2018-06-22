<?php

namespace App\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Redirect if not authenticated
        $this->redirectIfNotAuthenticated();

        $this->app->view()->set('title', 'dashboard');
        $this->app->render('dashboard/index');
    }
}

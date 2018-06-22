<?php

namespace App\Controllers;

class PostsController extends Controller
{
    public function create()
    {
        $db = $this->app->get('db');

        // Redirect if not authenticated
        $this->redirectIfNotAuthenticated();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        	//
        }

        $this->app->view()->set('title', 'Post aanmaken');
        $this->app->render('posts/create.php');
    }

    public function view()
    {
        $db = $this->app->get('db');

        // Redirect if not authenticated
        $this->redirectIfNotAuthenticated();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //
        }

        // $this->app->view()->set('title', 'Post bekijken');
        // $this->app->render('posts/view.php');
    }
}

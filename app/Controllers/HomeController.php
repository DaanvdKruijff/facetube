<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $db = $this->app->get('db');

        // Redirect if authenticated
        $this->redirectIfAuthenticated();

        // Get posts
        $postsQuery = $db->prepare('SELECT * FROM Posts');
        $postsQuery->execute();

        var_dump($postsQuery);

        // Get videos
        $videosQuery = $db->prepare('SELECT * FROM Videos');
        $videosQuery->execute();

        var_dump($videosQuery);

        // Get comments
        $commentsQuery = $db->prepare('SELECT * FROM Comments');
        $commentsQuery->execute();

        var_dump($commentsQuery);

        $this->app->view()->set('title', 'Home');
        $this->app->view()->set('posts', $postsQuery->fetch(\PDO::FETCH_ASSOC));
        $this->app->view()->set('videos', $videosQuery->fetch(\PDO::FETCH_ASSOC));
        $this->app->view()->set('comments', $commentsQuery->fetch(\PDO::FETCH_ASSOC));
        $this->app->render('home/index');
    }
}

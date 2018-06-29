<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // Redirect if authenticated
        $this->redirectIfAuthenticated();

        // Get posts
        $postsQuery = $db->prepare('SELECT * FROM Posts');
        $postsQuery->execute();
        $posts = $postsQuery->fetch(PDO::FETCH_ASSOC);

        // Get videos
        $videosQuery = $db->prepare('SELECT * FROM Videos');
        $videosQuery->execute();
        $videos = $videosQuery->fetch(PDO::FETCH_ASSOC);

        // Get comments
        $commentsQuery = $db->prepare('SELECT * FROM Comments');
        $commentsQuery->execute();
        $comments = $commentsQuery->fetch(PDO::FETCH_ASSOC);

        $this->app->view()->set('title', 'Home');
        $this->app->view()->set('posts', $posts);
        $this->app->view()->set('videos', $videos);
        $this->app->view()->set('comments', $comments);
        $this->app->render('home/index');
    }
}

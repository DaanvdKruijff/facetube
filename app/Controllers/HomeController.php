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
        $posts = $postsQuery->fetchAll(\PDO::FETCH_ASSOC);

        // Get videos
        $videosQuery = $db->prepare('SELECT * FROM Videos');
        $videosQuery->execute();
        $videos = $videosQuery->fetchAll(\PDO::FETCH_ASSOC);

        // Get comments
        $commentsQuery = $db->prepare('SELECT g.Gebruikersnaam, c.Inhoud FROM Comments c JOIN Gebruikers g ON c.GebruikerID = g.GebruikerID GROUP BY g.Gerbuikersnaam ');
        $commentsQuery->execute();
        $comments = $commentsQuery->fetchAll(\PDO::FETCH_ASSOC);

        $this->app->view()->set('title', 'Home');
        $this->app->view()->set('posts', $posts);
        $this->app->view()->set('videos', $videos);
        $this->app->view()->set('comments', $comments);
        $this->app->render('home/index');
    }
}

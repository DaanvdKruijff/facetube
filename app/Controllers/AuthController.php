<?php

namespace App\Controllers;

class AuthController extends Controller
{
    public function signup()
    {
        $db = $this->app->get('db');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $query = $db->prepare('INSERT INTO (GebruikerID, Gebruikersnaam, Voornaam, Achternaam, Email, Wachtwoord) VALUES (NULL, ?, ?, ?, ?, ?)');
            $query->execute([$_POST['username'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']]);

            // Redirect
            $this->app->redirect('/auth/signin');
        }

        $this->app->view()->set('title', 'Sign up');
        $this->app->render('auth/signup');
    }

    public function signin()
    {
        $db = $this->app->get('db');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $query = ($dbh->prepare('DELETE FROM fruit')->execute();
            $found = $query->rowCount();

            var_dump($found);
        }

        $this->app->view()->set('title', 'Sign in');
        $this->app->render('auth/signin');
    }
}

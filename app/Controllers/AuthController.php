<?php

namespace App\Controllers;

use PDO;

class AuthController extends Controller
{
    public function signup()
    {
        $db = $this->app->get('db');

        // Redirect if authenticated
        $this->redirectIfAuthenticated();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $query = $db->prepare('INSERT INTO Gebruikers (GebruikerID, Gebruikersnaam, Voornaam, Achternaam, Email, Wachtwoord) VALUES (NULL, ?, ?, ?, ?, ?)');
            $query->execute([$_POST['username'], $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']]);

            // Check of gebruiker bestaat
            // $this->app->view()->set('error', 'Deze gebruiker bestaat al.');

            // Redirect
            $this->app->redirect('/auth/signin');
        }

        $this->app->view()->set('title', 'Sign up');
        $this->app->render('auth/signup');
    }

    public function signin()
    {
        $db = $this->app->get('db');

        // Redirect if authenticated
        $this->redirectIfAuthenticated();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $query = $db->prepare('SELECT GebruikerID FROM Gebruikers WHERE Email = ? AND Wachtwoord = ?');
            $query->execute([$_POST['email'], $_POST['password']]);

            // Check if user is found
            $found = $query->rowCount();

            if ($found) {
                $user = $query->fetch(PDO::FETCH_ASSOC);

                // Set User ID in Session
                $_SESSION['user'] = $user['GebruikerID'];

                // Redirect
                $this->app->redirect('/dashboard');
            } else {
                $this->app->view()->set('error', 'Deze gebruiker bestaat niet.');
            }
        }

        $this->app->view()->set('title', 'Sign in');
        $this->app->render('auth/signin');
    }
}

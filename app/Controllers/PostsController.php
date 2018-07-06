<?php

namespace App\Controllers;

class PostsController extends Controller
{
    public function create()
    {
        $db = $this->app->get('db');

        // Redirect if not authenticated
        $this->redirectIfNotAuthenticated();

        if($_SERVER['REQUEST_METHOD'] == "POST") {


        	if (isset($_POST["titel"], $_POST["inhoud"], $_POST["submit"])) {

        		$query = $db->prepare('INSERT INTO Posts (GebruikersID, Titel, Inhoud) VALUES (?, ?, ?)');
                $query->execute([$_SESSION['user'], $_POST['titel'], $_POST['inhoud']]);

                if(isset($_POST['video']))
                {
                    $lastID = $db->insert_id;
                    $query = $db->prepare('INSERT INTO Videos (PostID, Titel) VALUES (?, ?)');
                    $query->execute([$lastID, $_POST['titel']]);
                }

                $message = "Uw bericht is succesvol geplaatst.";

                echo $message;

			}
        }


        $this->app->view()->set('title', 'Post aanmaken');
        $this->app->render('posts/create.php');
    }

    public function createcomment()
    {
        $db = $this->app->get('db');

        // Redirect if not authenticated
        $this->redirectIfNotAuthenticated();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_POST['inhoud'])) {
                $query = $db->prepare('INSERT INTO Comments (GebruikerID, PostID, Inhoud) VALUES (?, ?, ?)');
                $query->execute([$_SESSION['user'], $_GET['id'], $_POST['inhoud']]);

            }

        }

         $this->app->view()->set('title', 'Post bekijken'); //EDIT DIT
         $this->app->render('posts/view.php'); //EDIT DIT
    }


        public function ShowPostContent()
        {
            $db = $this->app->get('db');

            $this->redirectIfNotAuthenticated();

            $postsQuery = $db->prepare('SELECT * FROM Posts');
            $postsQuery->execute();
            $posts = $postsQuery->fetchAll(\PDO::FETCH_ASSOC);

            $this->app->view()->set('title', 'Alle posts bekijken');
            $this->app->view()->set('posts', $posts);
            $this->app->render('posts/index.php');
        }

    }
}
}

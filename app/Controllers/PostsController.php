<?php

namespace App\Controllers;

class PostsController extends Controller
{
    public function create()
    {
        $db = $this->app->get('db');

        if($_SERVER['REQUEST_METHOD'] == "POST") {


        	if (isset($_POST["titel"], $_POST["inhoud"], $_POST["submit"])) {

        		$query = $db->prepare('INSERT INTO Posts (GebruikersID, Titel, Inhoud) VALUES (?, ?, ?)');
                $query->execute([SESSION['user']], [$_POST['titel'], [$_POST['inhoud']]);

                if(isset($_POST['video']))
                {
                    $lastID = $db->insert_id;
                    $query = $db->prepare('INSERT INTO Videos (PostID, Titel) VALUES (?, ?)');
                    $query->execute([$lastID], [$_POST['titel']]);
                }
        		
			} 


        }


        $this->app->view()->set('title', 'Post aanmaken');
        $this->app->render('posts/create.php');
    }
    public function view()
    {
       $db = $this->app->get('db');

        if($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            
        }

    }
}

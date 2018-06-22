<?php

namespace App\Controllers;

class PostsController extends Controller
{
    public function create()
    {
        $db = $this->app->get('db');

        if($_SERVER['REQUEST_METHOD'] == "POST") {


        	if (isset($_POST["titel"], $_POST["inhoud"], $_POST["submit"])) {

        		
        		
			} 


        }


        $this->app->view()->set('title', 'Post aanmaken');
        $this->app->render('posts/create.php');
    }
    public function view()
    {
        
    }
}

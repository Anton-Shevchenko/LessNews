<?php

namespace app\controllers;

use app\models\Category;
use app\models\Comment;

class AdminController extends AppController
{
	public $layout = 'admin';
	public function indexAction()
	{
		$category = new Category;
		$coment = new Comment;

		$categories = $category->findAll();
		$comments = $coment->findAll();

		

		if(isset($_POST['newNews']))
		{
			if (isset($_POST['text'])) {
	
			$category = $_POST['category'];
			$name = $_POST['name'];
			$text = $_POST['text'];
			$image = $_POST['upload'];
			$tags = $_POST['tags'];

			echo $name;
		    }


		}



		$this->set(compact('categories', 'comments'));

	}
}
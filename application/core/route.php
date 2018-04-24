<?php


class Route
{

	static function start()
	{
		// контролер і action за замовчуванням
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// отримуємо ім'я контролера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		// отримуємо ім'я action
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		// добавляємо префікси
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

		/*
		echo "Model: $model_name <br>";
		echo "Controller: $controller_name <br>";
		echo "Action: $action_name <br>";
		*/

		// підбираємо файл з класом моделі (файла моделі може і не бути)

		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		// підбираємо файл з класом контролера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			/*
			правильно було б кинути тут Exeption,
			але для спрощення одразу зробимо редирект на сторінку 404
			*/
			Route::ErrorPage404();
		}
		
		// створюємо контролер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// викликаємо action контролера
			$controller->$action();
		}
		else
		{

			Route::ErrorPage404();
		}
	
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
    
}

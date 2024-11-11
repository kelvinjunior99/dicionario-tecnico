<?php 

	function routesURL()
	{
		
		if(isset($_GET['url']))
		{	

			$url = $_GET['url'] ? $_GET['url'] : "home";
		}
		else 
		{
			$url = "home";
		}

		switch ($url) {
			case 'home':
				include_once "view/pages/home.php";
				break;
			
			case 'auto_comple':
					include_once "view/pages/auto_comple.php";
					break;

			case 'software':
				include_once "view/pages/conteudos/software.html";
				break;
			
				case 'hardware':
					include_once "view/pages/conteudos/hardware.html";
					break;

			
			default:
				include_once "view/pages/404.php";
				
				break; 
		}
		



	}

 ?>
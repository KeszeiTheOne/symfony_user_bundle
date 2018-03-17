<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller {

	public function showAction(Request $httpRequest) {
		return $this->render("home/home.html.twig");
	}

}

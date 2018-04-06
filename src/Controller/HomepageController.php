<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomepageController
 *
 * @package App\Controller
 */
class HomepageController extends Controller {

	/**
	 * Renders homepage.
	 *
	 * @Route("/", name="homepage")
	 */
	public function index() {
		return $this->render( 'Homepage/index.html.twig', [
			'organizer' => $this->getParameter( 'organizerName' ),
			'start' => $this->getParameter( 'actionStart' ),
			'end' => $this->getParameter( 'actionEnd' ),
			'place' => $this->getParameter( 'place' ),
			'price' => $this->getParameter( 'price' ),
			'priceNonScout' => $this->getParameter( 'priceForNonScouts' )
		] );
	}

}

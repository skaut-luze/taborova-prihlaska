<?php
/**
 * Created by PhpStorm.
 * User: scheras
 * Date: 6.4.18
 * Time: 13:57
 */

namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomepageControllerTest extends WebTestCase {

	public function testShowIndex() {
		$client = static::createClient();

		$client->request( 'GET', '/' );

		$this->assertEquals( 200, $client->getResponse()->getStatusCode() );
	}

}
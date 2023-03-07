<?php

declare(strict_types=1);

namespace Gin0115\Infection_Test\Tests;

use PHPUnit\Framework\TestCase;
use Gin0115\Infection_Test\User;
use Gin0115\Infection_Test\FilterClass;

class TestFilterClass extends TestCase {

	public function testFilterWithDefaultAge(): void {

		$users = array(
			User::withAge( 19 ),
			User::withAge( 17 ),
		);

		$filter  = new FilterClass();
		$results = $filter->__invoke( $users );

		$this->assertCount( 1, $results );
	}

	public function testFilterWithCustomAge(): void {

		$users = array(
			User::withAge( 19 ),
			User::withAge( 22 ),
		);

		$filter  = new FilterClass( 21 );
		$results = $filter->__invoke( $users );

		$this->assertCount( 1, $results );
	}
}

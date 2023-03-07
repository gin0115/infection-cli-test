<?php

namespace Gin0115\Infection_Test;

class User {

	private $age;

	public function __construct( int $age ) {
		$this->age = $age;
	}

	public static function withAge( int $age ): self {
		$user = new User( $age );
		return $user;
	}

	public function getAge(): int {
		return $this->age;
	}
}

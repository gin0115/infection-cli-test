<?php

namespace Gin0115\Infection_Test;

use Gin0115\Infection_Test\User;

final class FilterClass {

	private const DEFAULT_AGE = 18;

	private $age;

	public function __construct( int $age = self::DEFAULT_AGE ) {
		$this->age = $age;
	}

	/**
	 * @param User[] $collection
	 * @return User[]
	 */
	public function __invoke( array $collection ): array {
		return array_filter(
			$collection,
			function ( User $item ): bool {
				return $item->getAge() >= $this->age;
			}
		);
	}

}

<?php
/**
 * Created by PhpStorm.
 * User: petersdata
 * Date: 1/31/18
 * Time: 8:25 AM
 */
class Motorcycle {
	public function brakes() {
}

	private $year;
	private $make;
	private $model;

	public function __construct(int $newYear,string $newMake, string $newModel) {
		try {
			$this->setYear($newYear);
			$this->setMake($newMake);
			$this->setModel($newModel);
}

	public function getYear() : int {
			return($this->year);
		}

class Motorcycle {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait Abs {
    public function brakes() {
        parent::brakes();
    }
}


	public function getMake() : string {
			return($this->make);
		}

	public function getModel() : string {
			return($this->Model);
		}

			public function setYear($newYear) {
				$this->year = ($newYear);
	}
			public function setYear($newMake) {
			$this->make = ($newMake);
		}
			public function setModel($newModel) {
			$this->model = ($newModel);
		}

			public function __construct(int $newYear, string $newMake, string $newModel) {
			try {
				$this->setYear($newYear);
				$this->setMake($newMake);
				$this->setModel($newModel);
			}


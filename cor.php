<?php

    abstract class Vehicle
    {
        protected $next;
        protected $passanger;

        public function setNext(Vehicle $vehicle)
        {
            $this->next = $vehicle;
        }

        public function Ride(int $nPassenger)
        {
            if ($this->canRide($nPassenger)) {
                echo sprintf('The number of passengers is %s, then you should ride a %s.' . PHP_EOL, $nPassenger, get_called_class());
            } elseif ($this->next) {
                echo sprintf('Cannot Ride using %s.' . PHP_EOL, get_called_class());
                $this->next->Ride($nPassenger);
            } else {
                throw new Exception('None of the vehicle have enough space');
            }
        }

        public function canRide($amount): bool
        {
            return $this->passanger >= $amount;
        }
    }

    class Motorcycle extends Vehicle
    {
        protected $passanger;
        public function __construct(int $passanger)
        {
            $this->passanger = $passanger;
        }
    }

    class Car extends Vehicle
    {
        protected $passanger;
        public function __construct(int $passanger)
        {
            $this->passanger = $passanger;
        }
    }

    class Bus extends Vehicle
    {
        protected $passanger;
        public function __construct(int $passanger)
        {
            $this->passanger = $passanger;
        }
    }

    $motor = new Motorcycle(1);
    $car = new Car(3);
    $bus = new Bus(35);

    $motor->setNext($car);
    $car->setNext($bus);

    $motor->Ride(13);
?>
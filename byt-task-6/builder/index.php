<?php

class Spaceship {
    public $hull;
    public $engine;
    public $weapons;

    public function __toString() {
        return "Spaceship with {$this->hull} hull, {$this->engine} engine, and {$this->weapons} weapons.<br>";
    }
}

interface SpaceshipBuilderInterface {
    public function setHull($hull);
    public function setEngine($engine);
    public function setWeapons($weapons);
    public function getSpaceship();
}


class SpaceshipBuilder implements SpaceshipBuilderInterface {
    private $spaceship;

    public function __construct() {
        $this->spaceship = new Spaceship();
    }

    public function setHull($hull) {
        $this->spaceship->hull = $hull;
        return $this;
    }

    public function setEngine($engine) {
        $this->spaceship->engine = $engine;
        return $this;
    }

    public function setWeapons($weapons) {
        $this->spaceship->weapons = $weapons;
        return $this;
    }

    public function getSpaceship() {
        return $this->spaceship;
    }
}


$builder = new SpaceshipBuilder();

// 1
$spaceship1 = $builder->setHull("Titanium")
                      ->setEngine("Warp Drive")
                      ->setWeapons("Laser Cannons")
                      ->getSpaceship();
echo $spaceship1;

// 2
$spaceship2 = $builder->setHull("Carbon")
                      ->setEngine("Ion")
                      ->setWeapons("Plasma Guns")
                      ->getSpaceship();
echo $spaceship2;

// 3
$spaceship3 = $builder->setHull("Steel")
                      ->setEngine("Chemical")
                      ->setWeapons("Missiles")
                      ->getSpaceship();
echo $spaceship3;


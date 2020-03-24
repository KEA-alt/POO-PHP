<?php

class Character 
{
    public $name;
    private $lifePoints = 100;
    public $rhinoshield = false;
    //public $attack;

    function __construct(string $name) {
        $this->name = $name;
    }

    public function getLifePoints() {
        return $this->lifePoints;
    }

    public function useRhinoshield(Character $target){
        $bool = $target->rhinoshield;
        $target->rhinoshield = false;
        return $bool;
    }

    public function setLifePoints($dmg) {
        $this->lifePoints -= $dmg;
        if ($this->lifePoints < 0) {
            $this->lifePoints = 0;
            return;
        }
    }

    public function attack(Character $target) {
        if($this->useRhinoshield($target)) {
        }else {
            $attack = rand(5, 15);
            $target->setLifePoints($attack);
            $status = "$this->name attaque {$target->name}! Il reste {$target->getLifePoints()} à {$target->name} !";
            return $status;
        }
    }
}
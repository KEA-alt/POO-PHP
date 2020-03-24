<?php

class Character 
{
    public $name;
    private $lifePoints = 100;
    public $rhinoshield = false;
    public $lastAttack;
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
            $target->setLifePoints(0);
            return;
        }else {
        $target->setLifePoints($this->choiceAttack());
        return;
        }
    }
}
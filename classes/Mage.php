<?php

class Mage extends Character
{
    public $magicPoints = 100;

    function __construct(string $name) {
        $this->name = $name;
    }

    public function magicAttack() {
        $costMagic = rand(5, 10);
        if($this->magicPoints > $costMagic){
            $this->magicPoints -= $costMagic;
            $costMagic = $costMagic*2;
            return $costMagic;
        }else if($this->magicPoints > 0){
            $costMagic = $this->magicPoints;
            $this->magicPoints -= $costMagic;
            return $costMagic;
        }
        else if($this->magicPoints == 0){
            return 2;
        }
    }

    public function shieldAttack() {
        $costMagic = rand(5, 10);
        if($this->magicPoints > $costMagic){
            $this->magicPoints -= $costMagic;
            $this->rhinoshield = true;
            return;
        }
        return 2;
    }


    public function attack(Character $target) {
        $target->setLifePoints($this->choiceAttack());
    }

    public function choiceAttack() {
        if(rand(0,1)) {
            return $this->magicAttack();
        }
        else{
            return $this->shieldAttack();
        }
    }
}
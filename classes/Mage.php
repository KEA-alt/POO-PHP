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
            $costMagic *= 2;
            $this->lastAttack = "{$this->name} utilise son attaque magique et lui inflige {$costMagic} PV";
            return $costMagic;
        }else if($this->magicPoints > 0){
            $costMagic = $this->magicPoints;
            $this->magicPoints -= $costMagic;
            $this->lastAttack = "{$this->name} utilise le reste de son attaque magique et lui inflige {$costMagic} PV";
            return $costMagic;
        }
        else if($this->magicPoints == 0){
            $this->lastAttack = "{$this->name} utilise son couteau et lui inflige 2 PV";
            return 2;
        }
    }

    public function shieldAttack() {
        $costMagic = rand(5, 10);
        if($this->magicPoints > $costMagic){
            $this->magicPoints -= $costMagic;
            $this->rhinoshield = true;
            $this->lastAttack = "{$this->name} utilise bouclier";
            return;
        }
        $this->lastAttack = "{$this->name} utilise son couteau et lui inflige 2 PV";
        return 2;
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
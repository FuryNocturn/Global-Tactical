<?php

namespace Global_Tactical;

abstract class Unit
{
    protected $hp = 50;
    protected $name;
    protected $weapon;
    protected $armor;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setArmor(Armor $armor = null)
    {
       show("{$this->name} encuentra una mejor armarura");

        $this->armor = $armor;
    }

    public function setWeapon(Weapon $weapon = null)
    {
        show("{$this->name} encuentra una mejor arma");
       
        $this->weapon = $weapon;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        show("{$this->name} camina hacia $direction");
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }

    public function attack(Unit $opponent)
    {
        show($this->weapon->getDescription($this, $opponent));

        $opponent->takeDamage($this->weapon->getDamage());
    }

    public function takeDamage($damage)
    {
        $this->hp = $this->hp - $this->absorbDamage($damage);

        show("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
        show("{$this->name} muere");

        exit();
    }

}

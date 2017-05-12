<?php

namespace Global_Tactical\Weapon;

use Global_Tactical\Weapon;
use Global_Tactical\Unit;

class LuckBow Extends Weapon
{
	 protected $damage = 20;

	 public function getDamage()
	 {
	 	if ($this->hasluck()) {
	 		return $this->damage * 2;
	 	}
	 }

	 public function getDescription(Unit $attacker, unit $opponent)
	 {
	 	return "{$attacker->getName()} lanza una flecha rapida a {$opponent->getName()}";
	 }
}
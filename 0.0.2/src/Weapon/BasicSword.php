<?php

namespace Global_Tactical\Weapon;

use Global_Tactical\Weapon;
use Global_Tactical\Unit;

class BasicSword Extends Weapon
{
	 protected $damage = 40;

	 public function getDescription(Unit $attacker, unit $opponent)
	 {
	 	return "{$attacker->getName()} lanza una estocada a {$opponent->getName()}";
	 }
}

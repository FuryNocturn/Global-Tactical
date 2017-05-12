<?php

namespace Global_Tactical\Weapon;

use Global_Tactical\Weapon;
use Global_Tactical\Unit;

class BasicBow Extends Weapon
{
	 protected $damage = 20;

	 public function getDescription(Unit $attacker, unit $opponent)
	 {
	 	return "{$attacker->getName()} lanza una flecha a {$opponent->getName()}";
	 }
}

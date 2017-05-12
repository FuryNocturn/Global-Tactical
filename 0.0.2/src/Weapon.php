<?php

namespace Global_Tactical;

abstract class Weapon
{
	protected $damage = 0;
	protected $magical = false;

	public function getDamage()
	{
		return $this->damage;
	}

	abstract public function getDescription(Unit $attacker, unit $opponent);
}


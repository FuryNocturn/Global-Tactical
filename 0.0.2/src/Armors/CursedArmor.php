<?php

namespace Global_Tactical\Armors;

use Global_Tactical\Armor;

class CursedArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage * 2;
    }
}

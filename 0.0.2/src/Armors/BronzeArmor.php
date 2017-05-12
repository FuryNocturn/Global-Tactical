<?php

namespace Global_Tactical\Armors;

use Global_Tactical\Armor;

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}

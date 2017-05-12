<?php

namespace Global_Tactical\Armors;

use Global_Tactical\Armor;

class SilverArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}

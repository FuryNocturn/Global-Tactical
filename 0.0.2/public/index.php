<?php

namespace Global_Tactical;

require '../vendor/autoload.php';






//comandos

$tare = new Soldier('Tare', new Weapon\BasicSword);
$tare->setArmor(new Armors\SilverArmor);
$kevin = new Archer('Kevin', new Weapon\BasicBow);
$kevin->setArmor(new Armors\BronzeArmor);
$kevin->move('al Norte hasta encontrarse con el enemigo');
$kevin->attack($tare);
$kevin->attack($tare);
$tare->move('el enemigo para luchar cuerpo a cuerpo');
$tare->attack($kevin);
$kevin->move('el sur para alejarse del enemigo y poder dispara');
$kevin->setWeapon(new Weapon\LuckBow);
$kevin->attack($tare);
$kevin->attack($tare);
$kevin->attack($tare);
$kevin->attack($tare);
$kevin->attack($tare);
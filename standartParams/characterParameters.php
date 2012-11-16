<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 12.16.11
 * Time: 03:15
 * To change this template use File | Settings | File Templates.
 */
class characterParameters
{
    public $strength = 21;
    public $dexterity= 21;
    public $wisdom   =14;

    public $health = 100;
    public $mana   = 100;

    public function __construct()
    {
        $this->strength = dice::roll3D6();
        $this->dexterity= dice::roll3D6();
        $this->wisdom = dice::roll3D6();
    }

    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;
    }

    public function getDexterity()
    {
        return $this->dexterity;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setMana($mana)
    {
        $this->mana = $mana;
    }

    public function getMana()
    {
        return $this->mana;
    }

    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function setWisdom($wisdom)
    {
        $this->wisdom = $wisdom;
    }

    public function getWisdom()
    {
        return $this->wisdom;
    }


}

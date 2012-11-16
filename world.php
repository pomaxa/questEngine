<?php
/**
 * @author pomaxa none <pomaxa@gmail.com>
 */
class world
{

    public function __construct()
    {

    }

    public function hiddenTreasure()
    {
        $sid = dice::rollD21();
        return new treasure($sid);
    }

    public static function hiddenTrap()
    {
        return dice::rollD21();
    }

    public function specialGuest()
    {
        return dice::rollD21();
    }
}

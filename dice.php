<?php
/**
 * @author pomaxa none <pomaxa@gmail.com>
 */
class dice
{

    public static function rollD6()
    {
        return rand(1,6);
    }

    public static function roll2D6()
    {
        return self::rollD6() + self::rollD6();
    }

    public static function roll3D6()
    {
        return self::rollD6() + self::rollD6() + self::rollD6();
    }

    public static function rollD4()
    {
        return rand(1,4);
    }

    public static function rollD8()
    {
        return rand(1,8);
    }

    public static function rollD10()
    {
        return rand(1,10);
    }

    public static function rollD21()
    {
        return rand(1,21);
    }

}

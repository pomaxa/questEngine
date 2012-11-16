<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pomaxa
 * Date: 12.16.11
 * Time: 02:51
 * To change this template use File | Settings | File Templates.
 */
class trap
{
    public $type;
    public $broken = true;
    public $damage;

    public function __construct($specialId)
    {
        if($specialId <= 6) {
            //it totally broken / nothing happend
        }

        if($specialId > 6 && $specialId < 13) {
            // only visible effect
        }

        if($specialId >= 13 && $specialId < 17) {
            //simple shock
        }

        if($specialId >= 17 && $specialId <=20) {
            if(dice::rollD4() >2) {
                //somebody gonna get heart
            } else {
                //a little shock
            }
        }

        if($specialId == 21) {
            if(dice::rollD4() >2) {
                //somebody gonna die
            } else {
                //somebody gonna get heart
            }

        }

        return $this;
    }

    public function isBroken()
    {
        return $this->broken;
    }
}

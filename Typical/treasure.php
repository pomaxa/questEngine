<?php
/**
 * @author pomaxa none <pomaxa@gmail.com>
 */
class treasure
{
    public function __construct($specialId)
    {

        if($specialId <= 4) {
            //only empty chest...
        }

        if($specialId > 4 && $specialId < 13) {
            // some trash
        }

        if($specialId >= 13 && $specialId < 17) {
            //some really good things
        }

        if($specialId >= 17 && $specialId <=20) {
            //really cool things
        }

        if($specialId == 21) {
            // pretty rare stuff
        }
        //todo: logic of detecting type of trasure
        return 'something';
    }
}

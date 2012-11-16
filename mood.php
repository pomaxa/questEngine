<?php
/**
 * @author pomaxa none <pomaxa@gmail.com>
 */
class mood
{
    public function __construct()
    {

    }

    public function character()
    {
        //todo: translate it by text.
        return dice::roll3D6();
    }

    public function area()
    {
        return dice::roll3D6();
    }

    public function reaction()
    {
        return dice::roll3D6();
    }
}
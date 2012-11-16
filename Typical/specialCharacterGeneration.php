<?php
/**
 * @author pomaxa none <pomaxa@gmail.com>
 */
class specialCharacterGeneration
{

    public $charName;
    public $charBio;

    public $charParams;

    public function __construct($sid)
    {
        $this->charParams = new characterParameters();

        return $this;
    }

    protected function generateBio()
    {
        $this->charBio = 'this information must be passed from ...';
    }

    protected function generateName()
    {
        $charName = array('octopus', 'banana', 'bolt', 'colt', 'fck');
        $this->charName= $charName[rand(0, count($charName)-1)];
    }

}

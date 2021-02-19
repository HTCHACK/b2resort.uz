<?php
class language
{
    public $lang;
    
    public function set($lang)
    {
        $this->lang = $lang;
        echo $this->lang;
    }
}

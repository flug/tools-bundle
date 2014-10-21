<?php

namespace Clooder\ToolsBundle\Twig;
class StringManipulationExtension extends \Twig_Extension {

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('pad_left', [$this, 'strPadLeft']),
            new \Twig_SimpleFilter('pad_right', [$this, 'strPadRight'])
        ];
    }



    public function strPadLeft($string, $pad_lenght, $pad_string)
    {
        return $this->strPad($string, $pad_lenght, $pad_string, STR_PAD_LEFT);
    }

    public function strPadRight($string, $pad_lenght, $pad_string)
    {
        return $this->strPad($string, $pad_lenght, $pad_string, STR_PAD_RIGHT);
    }

    private function strPad($string, $pad_lenght, $pad_string, $pad_type = STR_PAD_LEFT)
    {
        return str_pad($string, $pad_lenght, $pad_string, $pad_type);
    }

    public function getName()
    {
        return "clooder_string_manipulation";
    }
}



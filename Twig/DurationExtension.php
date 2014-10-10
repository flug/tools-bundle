<?php


namespace Clooder\ToolsBundle\Twig;


class DurationExtension extends \Twig_Extension
{


    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('minutes_to_hours', [$this, 'convertScdToHrs'])
        ];
    }

    public function convertScdToHrs($minutes, $format = "H:i:s")
    {
        $seconds = strtotime($minutes . " minutes") - time();
        return gmdate( $format, $seconds);
    }


    public function getName()
    {
        return 'clooder_duration';
    }
}
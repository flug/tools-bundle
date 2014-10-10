<?php


namespace Clooder\ToolsBundle\Twig;


class BitExtension extends \Twig_Extension
{


    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('bitrate_convert', array($this, 'bitRateConvert')),
            new \Twig_SimpleFilter('audiorate_convert', array($this, 'audioRateConvert')),
            new \Twig_SimpleFilter('size_convert', array($this, 'sizeConvert'))
        ];
    }


    public function bitRateConvert($bitrate, $bitLabel = 'kbps')
    {
        $this->formatConverter($bitrate, ',', $bitLabel);
    }

    public function audioRateConvert($bitrate, $bitLabel = 'KHz')
    {
        $this->formatConverter($bitrate, '.', $bitLabel);
    }

    private function formatConverter($bitrate, $delimiter, $bitLabel = 'kbps')
    {
        return number_format(floatval($bitrate) / 1000, 0, $delimiter, ' ') . " " . $bitLabel;
    }


    public function sizeConvert($bits)
    {

        $sz     = 'BKMGTP';
        $factor = floor((strlen($bits) - 1) / 3);

        return sprintf("%.2f", $bits / pow(1024, $factor)) . @$sz[$factor];
    }
    public function getName()
    {
        return 'clooder_bit';
    }
} 
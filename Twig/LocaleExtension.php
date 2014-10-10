<?php


namespace Clooder\ToolsBundle\Twig;

use Symfony\Component\Intl\Intl;

class LocaleExtension extends \Twig_Extension
{


    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('display_locale', [$this, 'getDisplayLanguages'])
        ];
    }

    public function getDisplayLanguages($lngCode)
    {
        $languages = Intl::getRegionBundle()->getCountryNames();

        if (array_key_exists($lngCode, $languages)) {
            return $languages[$lngCode];
        }
    }


    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return "clooder_locale";
    }
}

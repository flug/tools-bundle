<?php


namespace Clooder\ToolsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;



class Configuration implements ConfigurationInterface
{


    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('clooder_tools');

        return $treeBuilder;
    }
} 
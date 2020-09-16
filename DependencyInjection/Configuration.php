<?php
/**
 * This file is a part of MindfireExpiryField Bundle
 */

namespace Mindfire\Bundle\ExpiryFieldBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from app/config files
 */
class Configuration implements ConfigurationInterface
{

    /**
     * Config Tree Builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('mindfire_expiry_field');

        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            $rootNode = $treeBuilder->root('mindfire_expiry_field');
        }

        $rootNode = $treeBuilder->getRootNode();
        return $treeBuilder;
    }

}

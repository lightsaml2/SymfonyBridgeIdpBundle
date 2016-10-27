<?php

namespace LightSaml\SymfonyBridgeIdpBundle;

use LightSaml\SymfonyBridgeBundle\DependencyInjection\Compiler\AddMethodCallCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LightSamlSymfonyBridgeIdpBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AddMethodCallCompilerPass(
            'lightsaml.party.sp_entity_descriptor_store',
            'lightsaml.sp_entity_store',
            'add'
        ));
    }
}

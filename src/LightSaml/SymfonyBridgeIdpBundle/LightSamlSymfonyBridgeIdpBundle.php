<?php

/*
 * This file is part of the LightSAML Symfony Bridge IDP Bundle package.
 *
 * (c) Milos Tomic <tmilos@lightsaml.com>
 *
 * This source file is subject to the GPL-3 license that is bundled
 * with this source code in the file LICENSE.
 */

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

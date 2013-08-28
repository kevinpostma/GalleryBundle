<?php

namespace Kp\Bundle\GalleryBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Sylius\Bundle\ResourceBundle\DependencyInjection\Compiler\ResolveDoctrineTargetEntitiesPass;
use Sylius\Bundle\ResourceBundle\SyliusResourceBundle;

class KpGalleryBundle extends Bundle
{
    public static function getSupportedDrivers()
    {
        return array(
            SyliusResourceBundle::DRIVER_DOCTRINE_ORM
        );
    }

    public function build(ContainerBuilder $container)
    {
        $interfaces = array(
            'Kp\Bundle\GalleryBundle\Model\galleryInterface'         => 'kp.model.gallery.class',
        );

        $container->addCompilerPass(new ResolveDoctrineTargetEntitiesPass('kp_gallery', $interfaces));
    }
}

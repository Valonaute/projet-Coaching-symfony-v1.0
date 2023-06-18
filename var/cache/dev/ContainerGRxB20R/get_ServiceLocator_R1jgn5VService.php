<?php

namespace ContainerGRxB20R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R1jgn5VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R1jgn5V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R1jgn5V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CategoryController::showcategoryfront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController::showProducts' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\RegisterController::index' => ['privates', '.service_locator.nKyAywb', 'get_ServiceLocator_NKyAywbService', true],
            'App\\Controller\\UserSecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CategoryController:showcategoryfront' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\ProductController:showProducts' => ['privates', '.service_locator.DZowHzb', 'get_ServiceLocator_DZowHzbService', true],
            'App\\Controller\\RegisterController:index' => ['privates', '.service_locator.nKyAywb', 'get_ServiceLocator_NKyAywbService', true],
            'App\\Controller\\UserSecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CategoryController::showcategoryfront' => '?',
            'App\\Controller\\ProductController::showProducts' => '?',
            'App\\Controller\\RegisterController::index' => '?',
            'App\\Controller\\UserSecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CategoryController:showcategoryfront' => '?',
            'App\\Controller\\ProductController:showProducts' => '?',
            'App\\Controller\\RegisterController:index' => '?',
            'App\\Controller\\UserSecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
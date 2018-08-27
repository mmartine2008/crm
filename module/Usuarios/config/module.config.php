<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Usuarios;

use Zend\Router\Http\Literal;

return [
   'router' => [
        'routes' => [
            'login' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/login',
                    'defaults' => [
                        'controller'    => Controller\UsuariosController::class,
                        'action'        => 'login',
                    ],
                ],
            ],
        ],
    ],          
     'controllers' => array(
         'invokables' => array(
             'Usuarios\Controller\Usuarios' => 'Usuarios\Controller\UsuariosController',
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'usuarios' => __DIR__ . '/../view',
         ),
     ),
 ];
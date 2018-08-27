<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Crm;

return array(
     'controllers' => array(
         'invokables' => array(
             'Crm\Controller\Crm' => 'Crm\Controller\CrmController',
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'crm' => __DIR__ . '/../view',
         ),
     ),
    'router' => array(
         'routes' => array(
             'crm' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/crm[/:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Crm\Controller\Crm',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),

     'view_manager' => array(
         'template_path_stack' => array(
             'crm' => __DIR__ . '/../view',
         ),
     ),
 );
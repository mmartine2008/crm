<?php

namespace Usuarios\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class UsuariosController extends AbstractActionController {
     public function indexAction()
     {
     }

     public function addAction()
     {
     }

     public function editAction()
     {
     }

     public function deleteAction()
     {
     }
     
     public function loginAction()
     {
         $view = $this->procesarLogin();
         
         return $view;
     }
     
     private function validarUsuario()
     {
        return false;
     }
     
     private function procesarLogin()
     {
         $this->layout()->setTemplate('layout/simple');
         
         $view = new ViewModel();
         
        $request = $this->getRequest();
        $mensaje = "";
        
        if ($request->isPost()) {
            if ($this->validarUsuario()) {
                $this->redirect()->toRoute('home');
            } 
            $mensaje = "Usuario no valido";
        }  
        
        $view->setVariable('mensaje', $mensaje);
         
        return $view;    
     }
     
 }

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of PrivilegeController
 *
 * @author magloire
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PrivilegeController extends Controller {

    /**
     * @Route("/privilege/createall", name="create_All_Privileges")
     */
    public function createPrivilegesAction() {
        $privManager=$this->get("el_manager")->getPrivilegeManager();
//        $privManager->deleteAllPrivileges();
//        $priv=$privManager->createPrivileges();
        $method="getMenuList";
        
        $priv=call_user_func(array($privManager, $method));
//        $priv=$privManager->$method();
//        $priv = new \stdClass();
//        $priv->nom = "test";
        $response = new Response(json_encode($priv));
        $response->headers->set("Content-Type", "application/json");
        return $response;
    }

   

}

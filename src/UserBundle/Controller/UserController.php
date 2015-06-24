<?php

namespace UserBundle\Controller;

require_once "src/UserBundle/Model/User.php";

class UserController
{
    public function indexAction()
    {
        return array(
            'template' => 'index'
        );
    }

    public function showAction($id)
    {
        foreach ($id as $key => $value) {
            $userId = $value;
        }

        foreach ($_SERVER['users'] as $key => $value) {

            if($value["id"] == $userId) {
                $user = $value;
            }
        }

        $userObject = new \UserBundle\Model\User($user);

        return array(
            'template' => 'show',
            'user' => $userObject
        );
    }
}

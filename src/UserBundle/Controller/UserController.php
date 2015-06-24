<?php

namespace UserBundle\Controller;

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
        // var_dump($_SERVER['users']);
        // $model = $
        return array(
            'template' => 'show',
            'user' => $id
        );
    }
}

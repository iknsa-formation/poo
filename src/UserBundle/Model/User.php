<?php

namespace User\Model;

class User
{
    private $nom;
    private $email;
    private $salt;
    private $password;


    public function __construct(array $data)
    {
        $this->populate($data);
    }
    
    public function populate(array $data)
    {
        foreach ($data as $key => $value) {

        $setter = 'set'.ucfirst($key);

        if (method_exists($this, $setter)) {
            $this->$setter($value);
            }
        }
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
}

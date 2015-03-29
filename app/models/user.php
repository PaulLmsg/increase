<?php

class user extends \Phalcon\Mvc\Model {
    protected $id;
    protected $identite;
    protected $mail;
    protected $password;
    protected $role;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdentite($identite)
    {
        $this->identite = $identite;
    }

    public function getIdentite()
    {
        return $this->identite;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function columnMap()
    {
        return array(
            'id' => 'id',
            'mail' => 'mail',
            'password' => 'password',
            'identite' => 'identite',
            'role' => 'role'
        );
    }

    public function initialize()
    {
        $this->hasMany("id", "useCase", "idDev",array("alias"=>"usecasesUser"));
        $this->hasMany("id", "message", "idUser",array("alias"=>"messagesUser"));
        $this->hasMany("id", "projet", "idClient",array("alias"=>"projets"));
    }
} 
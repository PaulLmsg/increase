<?php


class message extends \Phalcon\Mvc\Model {
    protected $id;
    protected $objet;
    protected $content;
    protected $date;
    protected $idUser;
    protected $idProjet;
    protected $idFil;


    public function setContent($content)
    {
        $this->content = $content;
    }

 
    public function getContent()
    {
        return $this->content;
    }


    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getDate()
    {
        return $this->date;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdFil($idFil)
    {
        $this->idFil = $idFil;
    }

    public function getIdFil()
    {
        return $this->idFil;
    }

    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    }

    public function getIdProjet()
    {
        return $this->idProjet;
    }

    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    public function getIdUser()
    {
        return $this->idUser;
    }

    public function setObjet($objet)
    {
        $this->objet = $objet;
    }

    public function getObjet()
    {
        return $this->objet;
    }

    public function columnMap()
    {
        return array(
            'id' => 'id',
            'objet' => 'objet',
            'content' => 'content',
            'date' => 'date',
            'idUser' => 'idUser',
            'idProjet' => 'idProjet',
            'idFil' => 'idFil'
        );
    }

    public function initialize()
    {
        $this->belongsTo("idUser", "user", "id");
        $this->belongsTo("idFil", "message", "id");
        $this->hasMany("id", "message", "idFil",array("alias"=>"messagesFil"));
    }
} 
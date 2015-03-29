<?php

class usecase extends \Phalcon\Mvc\Model {
    protected $code;
    protected $nom;
    protected $poids;
    protected $avancement;
    protected $idProjet;
    protected $idDev;

    public function setCode($code)
    {
    	$this->code = $code;
    }
    
    public function getCode()
    {
    	return $this->code;
    }
    
    public function setNom($nom)
    {
    	$this->nom = $nom;
    }
    
    public function getNom()
    {
    	return $this->nom;
    }

    public function setPoids($poids)
    {
    	$this->poids = $poids;
    }
    
    public function getPoids()
    {
    	return $this->poids;
    }
    
    public function setAvancement($avancement)
    {
        $this->avancement = $avancement;
    }

    public function getAvancement()
    {
        return $this->avancement;
    }
    
    public function setIdProjet($idProjet)
    {
    	$this->idProjet = $idProjet;
    }
    
    public function getIdProjet()
    {
    	return $this->idProjet;
    }

    public function setIdDev($idDev)
    {
        $this->idDev = $idDev;
    }

    public function getIdDev()
    {
        return $this->idDev;
    }

    public function columnMap()
    {
        return array(
            'code' => 'code',
            'nom' => 'nom',
            'poids' => 'poids',
            'avancement' => 'avancement',
            'idProjet' => 'idProjet',
            'idDev' => 'idDev'
        );
    }

    public function initialize()
    {
        $this->belongsTo("idDev", "user", "id");
        $this->belongsTo("idProjet", "projet", "id");
        $this->hasMany("code", "tache", "codeUseCase",array("alias"=>"taches"));
    }
} 
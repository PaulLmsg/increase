<?php

class tache extends \Phalcon\Mvc\Model {
    protected $id;
    protected $libelle;
    protected $date;
    protected $avancement;
    protected $codeUseCase;

    public function setId($id)
    {
    	$this->id = $id;
    }
    
    public function getId()
    {
    	return $this->id;
    }
    
    public function setLibelle($libelle)
    {
    	$this->libelle = $libelle;
    }
    
    public function getLibelle()
    {
    	return $this->libelle;
    }

    public function setDate($date)
    {
    	$this->date = $date;
    }
    
    public function getDate()
    {
    	return $this->date;
    }
    
    public function setAvancement($avancement)
    {
        $this->avancement = $avancement;
    }


    public function getAvancement()
    {
        return $this->avancement;
    }


    public function setCodeUseCase($codeUseCase)
    {
        $this->codeUseCase = $codeUseCase;
    }


    public function getCodeUseCase()
    {
        return $this->codeUseCase;
    }

    public function columnMap()
    {
        return array(
            'id' => 'id',
            'libelle' => 'libelle',
            'date' => 'date',
            'avancement' => 'avancement',
            'codeUseCase' => 'codeUseCase'
        );
    }

    public function initialize()
    {
        $this->belongsTo("codeUseCase", "useCase", "code");
    }
} 
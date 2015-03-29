<?php


class projet extends \Phalcon\Mvc\Model {
    protected $id;
    protected $nom;
    protected $description;
    protected $dateLancement;
    protected $dateFinPrevue;
    protected $idClient;

    public function setId($id)
    {
    	$this->id = $id;
    }
    
    public function getId()
    {
    	return $this->id;
    }
    
    public function setNom($nom)
    {
    	$this->nom = $nom;
    }
    
    public function getNom()
    {
    	return $this->nom;
    }
    
    public function setDescription($description)
    {
    	$this->description = $description;
    }
    
    public function getDescription()
    {
    	return $this->description;
    }
    
    public function setDateLancement($dateLancement)
    {
    	$this->dateLancement = $dateLancement;
    }
    
    public function getDateLancement()
    {
    	return $this->dateLancement;
    }   
    
    public function setDateFinPrevue($dateFinPrevue)
    {
        $this->dateFinPrevue = $dateFinPrevue;
    }

    public function getDateFinPrevue()
    {
        return $this->dateFinPrevue;
    }

    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    public function getIdClient()
    {
        return $this->idClient;
    }


    public function getAvancement(){
        $sum = 0;
        $avancement = 0;
        foreach( $this->getUseCasesProjet() as $usecase){
            $sum += $usecase->getPoids();
        }
        foreach( $this->getUseCasesProjet() as $usecase){
            $poidpercent = $usecase->getPoids()*100/$sum;
            $avancement += round($poidpercent*$usecase->getAvancement()/100);
        }
        return $avancement;
    }

    public function getDayLeft(){
        $datetime1 = new DateTime($this->getDateFinPrevue());
        $datetime2 = new DateTime(date("Y-m-d"));
        $interval = date_diff($datetime1, $datetime2);
        return $interval->format('%a');
    }

    public function getLateState(){
        $datetime1 = new DateTime($this->getDateLancement());
        $datetime2 = new DateTime(date("Y-m-d"));
        $datetime3 = new DateTime($this->getDateFinPrevue());
        $daysSpent = date_diff($datetime2, $datetime1);
        $daysPlanned = date_diff($datetime3, $datetime1);
        $tpsPerCent = $daysSpent->format('%a')*100/$daysPlanned->format('%a');
        if($this->getDayLeft() < 0)
            return "danger";
        else if($this->getDayLeft()>=$tpsPerCent)
            return "success";
        else
            return "warning";
    }

    public function columnMap()
    {
        return array(
            'id' => 'id',
            'nom' => 'nom',
            'description' => 'description',
            'dateLancement' => 'dateLancement',
            'dateFinPrevue' => 'dateFinPrevue',
            'idClient' => 'idClient'
        );
    }

    public function initialize()
    {
        $this->belongsTo("idClient", "user", "id");
        $this->hasMany("id", "useCase", "idProjet",array("alias"=>"UseCasesProjet"));
        $this->hasMany("id", "message", "idProjet",array("alias"=>"messagesProjet"));
    }
} 
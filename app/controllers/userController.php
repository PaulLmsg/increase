<?php


class userController extends ControllerBase {
    public function projectsAction($id)
    {
        $projects=projet::find(array(
            "idClient = $id"
        ));
        $this->view->setVar("projects", $projects);
        foreach($projects as $project){
        	$this->jquery->getAndBindTo("#ouvrir".$project->getId(), "click", "user/project/".$project->getId() ,"#detailProject");
        }
        $this->jquery->compile($this->view);
    }
    public function projectAction($id)
    {
        $project=projet::findFirst($id);
        $this->view->setVar("project", $project);
        $usecases = $project->getUseCasesProjet();
        $devs = array();
        foreach($usecases as $usecase){
            $code = $usecase->getIdDev();
            $dev = user::findFirst($code);
            $devnom = $dev->getIdentite();
            array_push($devs, $devnom);
        }
        $devsunique = array_unique($devs);
        $this->view->setVar("devs", $devsunique);
    }
} 
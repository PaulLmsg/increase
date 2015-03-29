<?php


class AuthorController extends ControllerBase {
    public function projectsAction($id)
    {
        $usecases=useCase::find(array(
            "idDev = $id"
        ));
        $projects = array();
        foreach($usecases as $usecase){
            array_push($projects, $usecase->getProjet());
        }
        $this->view->setVar("projects", $projects);
        foreach($projects as $project){
        	$this->jquery->getAndBindTo("#ouvrir".$project->getId(), "click", "user/project/".$project->getId() ,"#detailProject");
        }
        $this->jquery->compile($this->view);
    }
}
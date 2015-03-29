<?php


class projectsController extends ControllerBase {
    public function equipeAction($id)
    {
        $project=projet::findFirst($id);
        $this->view->setVar("project", $project);
        $usecases = $project->getUseCasesProjet();
        $devs = array();
        foreach($usecases as $usecase){
            $code = $usecase->getIdDev();
            $dev = user::findFirst($code);
            array_push($devs, $dev);
        }
        $this->view->setVar("devs", $devs);
    }
} 
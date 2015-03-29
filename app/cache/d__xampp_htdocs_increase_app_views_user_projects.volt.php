<h2>Projets</h2>
<br>
<?php echo $this->getContent(); ?>
<?php foreach ($projects as $project) { ?>
    <div class="row">
        <div class="col-md-2"><?php echo $project->getNom(); ?></div>
        <div class="col-md-4">
            <div class="progress">
                <div class="progress-bar progress-bar-<?php echo $project->getLateState(); ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $project->getAvancement(); ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php echo $project->getAvancement(); ?>%;">
                    <?php echo $project->getAvancement(); ?>%
                </div>
            </div>
        </div>
        <div class="col-md-2">Il vous reste <?php echo $project->getDayLeft(); ?> jours</div>
        <div class="col-md-2">
            <div class="btn-group" role="group">
                <a class="btn btn-default" id="ouvrir<?php echo $project->getId(); ?>">Ouvrir le projet...</a>
            </div>
        </div>
    </div>
    <br>
    </tr>
    <?php
    if(isset($project))
			echo $script_foot;
		else 
			echo 'Pas de projets.';
			?>
    
<?php } ?>
<div id="detailProject"></div>
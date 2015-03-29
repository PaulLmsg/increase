<h2>Mes projets</h2>
<br>
<?php echo $this->getContent(); ?>
<?php foreach ($projects as $project) { ?>
    <div class="row">
        <div class="col-md-2"><?php echo $project->getNom(); ?></div>
        <div class="col-md-6">
            <div class="progress">
                <div class="progress-bar progress-bar-<?php echo $project->getLateState(); ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $project->getAvancement(); ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php echo $project->getAvancement(); ?>%;">
                    <?php echo $project->getAvancement(); ?>%
                </div>
            </div>
        </div>
        <div class="col-md-2">reste <?php echo $project->getDayLeft(); ?> jours</div>
        <div class="col-md-2">
            <div class="btn-group" role="group">
                <a class="btn btn-default">Afficher</a>
            </div>
        </div>
    </div>
    <br>
    </tr>
<?php } ?>
<?php echo $this->getContent(); ?>
<h2><?php echo $project->getNom(); ?></h2>
<div class="panel panel-default">
    <div class="panel-heading">Détail du projet</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="../../public/img/project.jpg" alt="#">
                </a>
            </div>
            <div class="col-md-9">
                <div class="col-md-12">
                    <strong>Description :</strong>
                    <br>
                    <?php echo $project->getDescription(); ?>
                    <br><br>
                </div>
                <div class="col-md-6">
                    <strong>Date de Lancement :</strong>
                    <br>
                    <?php echo $project->getDateLancement(); ?>
                </div>
                <div class="col-md-6">
                    <strong>Date de Fin prévue :</strong>
                    <br>
                    <?php echo $project->getDateFinPrevue(); ?>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Equipe</div>
    <div class="panel-body">
        <?php foreach ($devs as $dev) { ?>
        <div class="row">
            <div class="col-md-9">
                <?php echo $dev; ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="btn-group" role="group">
    <a class="btn btn-default" href="#">Messages</a>
</div>
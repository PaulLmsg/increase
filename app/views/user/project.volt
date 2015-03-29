{{ content() }}
<h2>{{ project.getNom() }}</h2>
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
                    {{ project.getDescription() }}
                    <br><br>
                </div>
                <div class="col-md-6">
                    <strong>Date de Lancement :</strong>
                    <br>
                    {{ project.getDateLancement() }}
                </div>
                <div class="col-md-6">
                    <strong>Date de Fin prévue :</strong>
                    <br>
                    {{ project.getDateFinPrevue() }}
                    <br><br>
                </div>
                <div class="row">

            </div>
                <div class="panel panel-default">
    <div class="panel-heading">Equipe</div>
    <div class="panel-body">
        {% for dev in devs %}
        <div class="row">
            <div class="col-md-9">
                {{ dev }}
            </div>
        </div>
        {% endfor %}
    </div>
</div>
            </div>
        </div>
    </div>
</div>

<div class="btn-group" role="group">
    <a class="btn btn-default" href="#">Messages</a>
</div>
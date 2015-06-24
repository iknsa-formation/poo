<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title" style="overflow:auto;">
            <h2 class="pull-left"><?= $actionToCall['user']->getNom(); ?></h2>
            <h6 class="pull-right"><?= $actionToCall['user']->getEmail(); ?></h6>
        </div>
    </div>
    <div class="panel-body">
        <?= $actionToCall['user']->getPassword(); ?>
    </div>
</div>
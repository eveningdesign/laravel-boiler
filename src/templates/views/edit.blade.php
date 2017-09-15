<?php echo config('boiler.blade.layout').PHP_EOL; ?>
<?php echo "@section('content')".PHP_EOL; ?>
<div class="row">
    <div class="col-sm-12">
        <h3>Edit <?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($names->reset()->singular()->get()); ?></h3>
    </div>
    <div class="col-sm-12">
        <?php echo "<?php echo \\Form::model(".$names->getSingularInstanceName().", ['method' => 'PUT', 'route' => [".$names->getNamespacedConstantClass()."::UPDATE_ROUTE, ".$names->getSingularInstanceName()."->".$names->makeWrappedNamespacedColumnConstant('id')."]]); ?>".PHP_EOL; ?>
        <?php echo "@include(".$names->getNamespacedConstantClass()."::FORM_VIEW)".PHP_EOL; ?>
        <?php echo "<?php echo \\Form::close(); ?>".PHP_EOL; ?>
    </div>
</div>
<?php echo "@stop"; ?>

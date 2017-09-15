<?php echo \EveningDesign\Boiler\Support\Helpers::getLayout().PHP_EOL; ?>
<?php echo \EveningDesign\Boiler\Support\Helpers::getContentSection().PHP_EOL; ?>
<div class="row">
    <div class="col-sm-12">
        <<?php echo \EveningDesign\Boiler\Support\Helpers::getHeading(); ?>>Create <?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($names->reset()->singular()->get()); ?></<?php echo \EveningDesign\Boiler\Support\Helpers::getHeading(); ?>>
    </div>
    <div class="col-sm-12">
        <?php echo "<?php echo \\Form::model(".$names->getSingularInstanceName().", ['method' => 'POST', 'route' => [".$names->getNamespacedConstantClass()."::STORE_ROUTE]]); ?>".PHP_EOL; ?>
        <?php echo "@include(".$names->getNamespacedConstantClass()."::FORM_VIEW)".PHP_EOL; ?>
        <?php echo "<?php echo \\Form::close(); ?>".PHP_EOL; ?>
    </div>
</div>
<?php echo "@stop"; ?>
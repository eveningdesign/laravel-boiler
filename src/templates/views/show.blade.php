<?php echo \EveningDesign\Boiler\Support\Helpers::getLayout().PHP_EOL; ?>
<?php echo \EveningDesign\Boiler\Support\Helpers::getContentSection().PHP_EOL; ?>
<div class="row">
    <div class="col-sm-12">
        <<?php echo \EveningDesign\Boiler\Support\Helpers::getHeading(); ?>><?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($names->reset()->singular()->get()); ?> Details</<?php echo \EveningDesign\Boiler\Support\Helpers::getHeading(); ?>>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="<?php echo "<?php echo route(".$names->getNamespacedConstantClass()."::EDIT_ROUTE, ".$names->getSingularInstanceName()."->".$names->makeWrappedNamespacedColumnConstant('id')."); ?>"; ?>" class="btn btn-warning <?php echo \EveningDesign\Boiler\Support\Helpers::getButtonSize(); ?>">Edit</a>
        <a href="<?php echo "<?php echo route(".$names->getNamespacedConstantClass()."::INDEX_ROUTE); ?>"; ?>" class="btn btn-default <?php echo \EveningDesign\Boiler\Support\Helpers::getButtonSize(); ?>">View All</a>
    </div>
</div>
<div class="row">
    <table class="<?php echo \EveningDesign\Boiler\Support\Helpers::getTableClass(); ?>">
@foreach($columns as $column)
        <tr>
            <td><?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($column->Field); ?></td>
            <td><?php echo "<?php echo ".$names->getSingularInstanceName().'->'.$names->makeWrappedNamespacedColumnConstant($column->Field)."; ?>"; ?></td>
        </tr>
@endforeach
    </table>
</div>
<?php echo "@stop"; ?>

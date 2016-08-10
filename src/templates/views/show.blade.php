<?php echo "@extends('app')".PHP_EOL; ?>
<?php echo "@section('content')".PHP_EOL; ?>
<div class="row">
    <div class="col-sm-12">
        <h3><?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($names->reset()->singular()->get()); ?> Details</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="<?php echo "<?php echo route(".$names->getNamespacedConstantClass()."::EDIT_ROUTE, ".$names->getSingularInstanceName()."->id); ?>"; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="<?php echo "<?php echo route(".$names->getNamespacedConstantClass()."::INDEX_ROUTE); ?>"; ?>" class="btn btn-default btn-sm">View All</a>
    </div>
</div>
<div class="row">
    <table class="table table-bordered table-striped">
@foreach($columns as $column)
        <tr>
            <td><?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($column->Field); ?></td>
            <td><?php echo "<?php echo ".$names->getSingularInstanceName().'->'.$column->Field."; ?>"; ?></td>
        </tr>
@endforeach
    </table>
</div>
<?php echo "@stop"; ?>
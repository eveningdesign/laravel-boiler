<?php echo "@extends('app')".PHP_EOL; ?>
<?php echo "@section('content')".PHP_EOL; ?>
<div class="row">
    <div class="col-sm-12">
        <h3>View <?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($names->reset()->singular()->get()); ?></h3>
    </div>
    <table class="table table-bordered">
@foreach($columns as $column)
        <tr>
            <td><?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($column->Field); ?></td>
            <td><?php echo "<?php echo $".$names->getSingularInstanceName().'->'.$column->Field."; ?>"; ?></td>
        </tr>
@endforeach
    </table>
</div>
<?php echo "@stop"; ?>
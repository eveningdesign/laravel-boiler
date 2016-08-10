<?php echo "@extends('app')".PHP_EOL; ?>
<?php echo "@section('content')".PHP_EOL; ?>
<div class="row">
    <div class="col-sm-12">
        <h3>All <?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($names->reset()->plural()->get()); ?></h3>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
@foreach($columns as $column)
                <th><?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($column->Field); ?></th>
@endforeach
            </tr>
        </thead>
        <tbody>
        <?php echo "@foreach(".$names->getPluralInstanceName()." as ".$names->getSingularInstanceName().")".PHP_EOL; ?>
            <tr>
@foreach($columns as $column)
                <td><?php echo "{!! ".$names->getSingularInstanceName()."->".$column->Field." !!}"; ?></td>
@endforeach
            </tr>
        <?php echo "@endforeach".PHP_EOL; ?>
        </tbody>
    </table>
</div>
<?php echo "@stop".PHP_EOL; ?>
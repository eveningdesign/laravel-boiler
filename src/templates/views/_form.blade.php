<table class="table table-bordered">
@foreach($columns as $column)
    <tr>
        <td><?php echo "<?php echo \\Form::label('".$column->Field."', '".\EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($column->Field)."'); ?>"; ?></td>
        <td><?php echo "<?php echo \\Form::text('".$column->Field."'); ?>"; ?></td>
    </tr>
@endforeach
</table>
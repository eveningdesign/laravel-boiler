<table class="table table-bordered">
@foreach($columns as $column)
    <tr>
        <td><?php echo "<?php echo \\Form::label('".$column->Field."', '".\EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($column->Field)."'); ?>"; ?></td>
        <td><?php echo "<?php echo \\Form::text('".$column->Field."'); ?>"; ?></td>
    </tr>
@endforeach
    <tr>
        <td colspan="2" class="text-center">
            <?php echo "<?php echo \\Form::submit('Save', ['class' => 'btn btn-success']); ?>".PHP_EOL; ?>
            <a href="<?php echo "<?php echo route(".$names->getNamespacedConstantClass()."::INDEX_ROUTE); ?>".PHP_EOL; ?>">Cancel</a></td>
    </tr>
</table>
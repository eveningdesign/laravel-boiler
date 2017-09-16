<?php echo "@if(\$errors->any())".PHP_EOL; ?>
<div class="alert alert-danger">
    <ul>
        <?php echo "@foreach(\$errors->all() as \$message)".PHP_EOL; ?>
            <?php echo "<li><?php echo \$message; ?></li>".PHP_EOL; ?>
        <?php echo "@endforeach".PHP_EOL; ?>
    </ul>
</div>
<?php echo "@endif".PHP_EOL; ?>
<table class="<?php echo \EveningDesign\Boiler\Support\Helpers::getTableClass(); ?>">
@foreach($columns as $column)
    <tr>
        <td><?php echo "<?php echo \\Form::label(".$names->makeNamespacedColumnConstant($column->Field).", '".\EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($column->Field)."'); ?>"; ?></td>
        <td><?php echo "<?php echo \\Form::text(".$names->makeNamespacedColumnConstant($column->Field)."); ?>"; ?></td>
    </tr>
@endforeach
    <tr>
        <td colspan="2" class="text-center">
            <?php echo "<?php echo \\Form::submit('Save', ['class' => 'btn btn-success']); ?>".PHP_EOL; ?>
            <a href="<?php echo "<?php echo route(".$names->getNamespacedConstantClass()."::INDEX_ROUTE); ?>"; ?>">Cancel</a></td>
    </tr>
</table>
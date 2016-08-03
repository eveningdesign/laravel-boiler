<?php echo "@extends('app')".PHP_EOL; ?>
<?php echo "@section('content')".PHP_EOL; ?>
<div class="row">
    <div class="col-sm-12">
        <h3>All {!! $names->reset()->plural()->studly()->get() !!}</h3>
    </div>
</div>
<?php echo "@stop"; ?>
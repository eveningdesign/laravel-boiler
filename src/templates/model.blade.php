<?php echo "<?php".PHP_EOL; ?>

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class <?php echo $names->getModelName(); ?> extends Model
{
@foreach($allColumns->pluck('Field') as $field)
    <?php echo $names->makeColumnConstantDefinition($field).PHP_EOL; ?>
@endforeach

    protected $fillable = [
    @foreach($filteredColumns->pluck('Field')->map(function($i) {return $names->makePrefixedColumnConstant("self::", $i);}) as $column)
    <?php echo $column; ?>,
@endforeach
];
}

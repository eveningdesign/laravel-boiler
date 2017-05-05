<?php echo "<?php".PHP_EOL; ?>

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class <?php echo $names->getModelName(); ?> extends Model
{
    @foreach($allColumns->pluck('Field') as $field)
    <?php echo sprintf("const COL_%s = '%s';%s", strtoupper($field), $field, PHP_EOL); ?>
    @endforeach

    protected $fillable = [
        <?php echo $filteredColumns->pluck('Field')->map(function($i) {return sprintf("self::COL_%s", strtoupper($i));})->implode(','.PHP_EOL); ?>
    ];
}

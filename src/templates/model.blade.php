<?php echo "<?php".PHP_EOL; ?>

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class <?php echo $names->getModelName(); ?> extends Model {

    protected $fillable = [<?php echo $columns->pluck('Field')->map(function($i) {return "'$i'";})->implode(', '); ?>];
}

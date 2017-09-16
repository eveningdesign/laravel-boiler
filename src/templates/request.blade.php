<?php echo "<?php".PHP_EOL; ?>

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class <?php echo $names->getRequestClass(); ?> extends FormRequest
{
    public function authorize()
    {
        return true;

    }

    public function rules()
    {
        return [
@foreach($columns as $column)
            '<?php echo $column->Field; ?>' => 'required',
@endforeach
        ];
    }

    public function messages()
    {
        return [
@foreach($columns as $column)
            '<?php echo $column->Field; ?>.required' => 'The <?php echo \EveningDesign\Boiler\Support\Helpers::makeHumanFriendly($column->Field); ?> field is required.',
@endforeach
        ];
    }
}

<?php echo "<?php"; ?>

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\<?php echo $names->getModelName(); ?>;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class <?php echo $names->getControllerClass(); ?> extends Controller
{
    public function index()
    {
        <?php echo $names->getPlurarInstanceName()." = ".$names->getModelName()."::all();".PHP_EOL; ?>
        return view(<?php echo $names->getNamespacedConstantClass()."::INDEX_VIEW"; ?>)->with('<?php echo $names->getPlurarInstanceName(""); ?>', <?php echo $names->getPlurarInstanceName(); ?>);
    }

    public function create()
    {
        <?php echo $names->getSingularInstanceName()." = new ".$names->getModelName()."();".PHP_EOL; ?>
        return view(<?php echo $names->getNamespacedConstantClass()."::CREATE_VIEW"; ?>)->with('<?php echo $names->getSingularInstanceName(""); ?>', <?php echo $names->getSingularInstanceName(); ?>);
    }

    public function store(Request $request)
    {
        $input = $request->except(['_token', '_method']);
        <?php echo $names->getSingularInstanceName(); ?> = <?php echo $names->getModelName(); ?>::create($input);
        return redirect()->route(<?php echo $names->getNamespacedConstantClass(); ?>::SHOW_ROUTE, [<?php echo $names->getSingularInstanceName(); ?>->id]);
    }

    public function show($id)
    {
        <?php echo $names->getSingularInstanceName(); ?> = <?php echo $names->getModelName(); ?>::find($id);
        return view(<?php echo $names->getNamespacedConstantClass(); ?>::SHOW_VIEW)->with('<?php echo $names->getSingularInstanceName(""); ?>', <?php echo $names->getSingularInstanceName(); ?>);
    }

    public function edit($id)
    {
        <?php echo $names->getSingularInstanceName(); ?> = <?php echo $names->getModelName(); ?>::find($id);
        return view(<?php echo $names->getNamespacedConstantClass(); ?>::EDIT_VIEW)->with('<?php echo $names->getSingularInstanceName(""); ?>', <?php echo $names->getSingularInstanceName(); ?>);
    }

    public function update(Request $request, $id)
    {
        $input = $request->except(['_token', '_method']);
        <?php echo $names->getSingularInstanceName(); ?> = <?php echo $names->getModelName(); ?>::update($input);
        return redirect()->route(<?php echo $names->getNamespacedConstantClass(); ?>::SHOW_ROUTE, [<?php echo $names->getSingularInstanceName(); ?>->id]);
    }

    public function destroy($id)
    {
        <?php echo $names->getModelName(); ?>::destroy($id);
    }
}

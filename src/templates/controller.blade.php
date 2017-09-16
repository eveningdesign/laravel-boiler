<?php echo "<?php".PHP_EOL; ?>

namespace App\Http\Controllers;

use <?php echo $names->getNamespacedConstantClass(); ?>;
use <?php echo $names->getNamespacedModelName(); ?>;
use <?php echo $names->getNamespacedRequestClass(); ?>;

class <?php echo $names->getControllerClass(); ?> extends Controller
{
    public function index()
    {
        <?php echo $names->getPluralInstanceName()." = ".$names->getModelName()."::all();".PHP_EOL; ?>
        return view(<?php echo $names->getConstantClass()."::INDEX_VIEW"; ?>)->with('<?php echo $names->getPluralInstanceName(""); ?>', <?php echo $names->getPluralInstanceName(); ?>);
    }

    public function create()
    {
        <?php echo $names->getSingularInstanceName()." = new ".$names->getModelName()."();".PHP_EOL; ?>
        return view(<?php echo $names->getConstantClass()."::CREATE_VIEW"; ?>)->with('<?php echo $names->getSingularInstanceName(""); ?>', <?php echo $names->getSingularInstanceName(); ?>);
    }

    public function store(<?php echo $names->getRequestClass(); ?> $request)
    {
        $input = $request->except(['_token', '_method']);
        <?php echo $names->getSingularInstanceName(); ?> = <?php echo $names->getModelName(); ?>::create($input);
        return redirect()->route(<?php echo $names->getConstantClass(); ?>::SHOW_ROUTE, [<?php echo $names->getSingularInstanceName(); ?>-><?php echo $names->makeWrappedColumnConstant('id'); ?>]);
    }

    public function show($id)
    {
        <?php echo $names->getSingularInstanceName(); ?> = <?php echo $names->getModelName(); ?>::find($id);
        return view(<?php echo $names->getConstantClass(); ?>::SHOW_VIEW)->with('<?php echo $names->getSingularInstanceName(""); ?>', <?php echo $names->getSingularInstanceName(); ?>);
    }

    public function edit($id)
    {
        <?php echo $names->getSingularInstanceName(); ?> = <?php echo $names->getModelName(); ?>::find($id);
        return view(<?php echo $names->getConstantClass(); ?>::EDIT_VIEW)->with('<?php echo $names->getSingularInstanceName(""); ?>', <?php echo $names->getSingularInstanceName(); ?>);
    }

    public function update(<?php echo $names->getRequestClass(); ?> $request, $id)
    {
        $input = $request->except(['_token', '_method']);
        <?php echo $names->getSingularInstanceName(); ?> = <?php echo $names->getModelName(); ?>::find($id);
        <?php echo $names->getSingularInstanceName(); ?>->update($input);
        return redirect()->route(<?php echo $names->getConstantClass(); ?>::SHOW_ROUTE, [<?php echo $names->getSingularInstanceName(); ?>-><?php echo $names->makeWrappedColumnConstant('id'); ?>]);
    }

    public function destroy($id)
    {
        <?php echo $names->getModelName(); ?>::destroy($id);
        return redirect()->route(<?php echo $names->getConstantClass(); ?>::INDEX_ROUTE);
    }
}

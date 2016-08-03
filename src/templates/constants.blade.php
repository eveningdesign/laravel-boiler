<?php echo "<?php".PHP_EOL; ?>
namespace App\Constants;

class {!! $constantsName !!} {

    const CONTROLLER = "{!! $controllerName !!}";
    const VIEWS = "{!! $viewPath !!}";

    const INDEX_ACTION = self::CONTROLLER."@index";
    const INDEX_VIEW = self::VIEWS.".index";

    const CREATE_ACTION = self::CONTROLLER."@create";
    const CREATE_VIEW = self::VIEWS.".create";

    const STORE_ACTION = self::CONTROLLER."@store";

    const SHOW_ACTION = self::CONTROLLER."@show";
    const SHOW_VIEW = self::VIEWS.".show";

    const EDIT_ACTION = self::CONTROLLER."@edit";
    const EDIT_VIEW = self::VIEWS.".edit";

    const UPDATE_ACTION = self::CONTROLLER."@update";

    const DESTROY_ACTION = self::CONTROLLER."@destroy";

    const FORM_VIEW = self::VIEWS."_form";

}

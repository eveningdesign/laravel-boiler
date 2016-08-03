<?php echo "<?php".PHP_EOL; ?>
namespace App\Constants;

class {!! $constantsName !!} {

    const ROUTE_BASE = "{!! $routeBase !!}";
    const CONTROLLER = "{!! $controllerName !!}";
    const VIEWS = "{!! $viewPath !!}";

    const INDEX_ROUTE = self::ROUTE_BASE.".index";
    const INDEX_ACTION = self::CONTROLLER."@index";
    const INDEX_VIEW = self::VIEWS.".index";

    const CREATE_ROUTE = self::ROUTE_BASE.".create";
    const CREATE_ACTION = self::CONTROLLER."@create";
    const CREATE_VIEW = self::VIEWS.".create";

    const STORE_ROUTE = self::ROUTE_BASE.".store";
    const STORE_ACTION = self::CONTROLLER."@store";

    const SHOW_ROUTE = self::ROUTE_BASE.".show";
    const SHOW_ACTION = self::CONTROLLER."@show";
    const SHOW_VIEW = self::VIEWS.".show";

    const EDIT_ROUTE = self::ROUTE_BASE.".edit";
    const EDIT_ACTION = self::CONTROLLER."@edit";
    const EDIT_VIEW = self::VIEWS.".edit";

    const UPDATE_ROUTE = self::ROUTE_BASE.".update";
    const UPDATE_ACTION = self::CONTROLLER."@update";

    const DESTROY_ROUTE = self::ROUTE_BASE.".destroy";
    const DESTROY_ACTION = self::CONTROLLER."@destroy";

    const FORM_VIEW = self::VIEWS."_form";

}

<?php echo "<?php".PHP_EOL; ?>
namespace App\Constants;

class {!! $names->getConstantClass() !!} {

    const PATH = "{!! $names->getRouteBase() !!}";
    const ROUTE_BASE = "{!! $names->getRouteBase() !!}";
    const CONTROLLER = "{!! $names->getControllerClass() !!}";
    const VIEWS = "{!! $names->getViewPath() !!}";

    const INDEX_ROUTE = self::ROUTE_BASE.".index";
    const INDEX_ACTION = self::CONTROLLER."<?php echo "@index"; ?>";
    const INDEX_VIEW = self::VIEWS.".index";

    const CREATE_ROUTE = self::ROUTE_BASE.".create";
    const CREATE_ACTION = self::CONTROLLER."<?php echo "@create"; ?>";
    const CREATE_VIEW = self::VIEWS.".create";

    const STORE_ROUTE = self::ROUTE_BASE.".store";
    const STORE_ACTION = self::CONTROLLER."<?php echo "@store"; ?>";

    const SHOW_ROUTE = self::ROUTE_BASE.".show";
    const SHOW_ACTION = self::CONTROLLER."<?php echo "@show"; ?>";
    const SHOW_VIEW = self::VIEWS.".show";

    const EDIT_ROUTE = self::ROUTE_BASE.".edit";
    const EDIT_ACTION = self::CONTROLLER."<?php echo "@edit"; ?>";
    const EDIT_VIEW = self::VIEWS.".edit";

    const UPDATE_ROUTE = self::ROUTE_BASE.".update";
    const UPDATE_ACTION = self::CONTROLLER."<?php echo "@update"; ?>";

    const DESTROY_ROUTE = self::ROUTE_BASE.".destroy";
    const DESTROY_ACTION = self::CONTROLLER."<?php echo "@destroy"; ?>";

    const FORM_VIEW = self::VIEWS."._form";

}

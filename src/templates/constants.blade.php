<?php echo "<?php".PHP_EOL; ?>
namespace App\Constants;

class {{ $names->getConstantClass() }} {

    const INDEX_ROUTE = {{ sprintf("%s.index", $names->getRouteBase()) }};
    const INDEX_ACTION = {{ sprintf("%s@index", $name->getControllerClass()) }};
    const INDEX_VIEW = {{ sprintf("%s.index", $names->getViewPath()) }};

    const CREATE_ROUTE = {{ sprintf("%s.create", $names->getRouteBase()) }};
    const CREATE_ACTION = {{ sprintf("%s@create", $name->getControllerClass()) }};
    const CREATE_VIEW = {{ sprintf("%s.create", $names->getViewPath()) }};

    const STORE_ROUTE = {{ sprintf("%s.store", $names->getRouteBase()) }};
    const STORE_ACTION = {{ sprintf("%s@store", $name->getControllerClass()) }};

    const SHOW_ROUTE = {{ sprintf("%s.show", $names->getRouteBase()) }};
    const SHOW_ACTION = {{ sprintf("%s@show", $name->getControllerClass()) }};
    const SHOW_VIEW = {{ sprintf("%s.show", $names->getViewPath()) }};

    const EDIT_ROUTE = {{ sprintf("%s.edit", $names->getRouteBase()) }};
    const EDIT_ACTION = {{ sprintf("%s@edit", $name->getControllerClass()) }};
    const EDIT_VIEW = {{ sprintf("%s.edit", $names->getViewPath()) }};

    const UPDATE_ROUTE = {{ sprintf("%s.update", $names->getRouteBase()) }};
    const UPDATE_ACTION = {{ sprintf("%s@update", $name->getControllerClass()) }};

    const DESTROY_ROUTE = {{ sprintf("%s.destroy", $names->getRouteBase()) }};
    const DESTROY_ACTION = {{ sprintf("%s@destroy", $name->getControllerClass()) }};

    const FORM_VIEW = {{ sprintf("%s._form", $names->getViewPath()) }};

}

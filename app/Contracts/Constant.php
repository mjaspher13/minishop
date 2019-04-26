<?php

namespace App\Contracts;


interface Constant
{
    /**
     * Constant variables
     */
    const STATUS_INTEGER_ACTIVE = 1;
    const STATUS_INTEGER_INACTIVE = 0;
    const STATUS_INTEGER_DELETED = 2;
    const STATUS_TEXT_ACTIVE = 'ACTIVE';
    const STATUS_TEXT_INACTIVE = 'INACTIVE';

   
    const MODULE_TYPE_MAIN = "MAIN";
    const MODULE_TYPE_SETTINGS = "SETTINGS";
    const MODULE_TYPE_INTEGER_MAIN = 2;
    const MODULE_TYPE_INTEGER_SETTINGS = 1;
    const MODULE_DEFAULT_SETTINGS_MATERIALIZED_ICON = "launch";

    const GRID_VIEW_EDIT_BUTTON = "mode_edit";
    const GRID_VIEW_DELETE_BUTTON = "delete_forever";
    const GRID_VIEW_ADD_BUTTON = "add";
    const GRID_VIEW_CHANGE_PASSWORD = "vpn_key";
    const GRID_VIEW_CONNECTION_ACTIVE = "visibility";
    const GRID_VIEW_CONNECTION_INACTIVE = "visibility_off";

    const PERMISSION_TYPE_CREATE = "create";
    const PERMISSION_TYPE_READ = "read";
    const PERMISSION_TYPE_UPDATE = "update";
    const PERMISSION_COLOR_GREEN = "bg-green";
    const PERMISSION_COLOR_GREY = "bg-grey";

    const USERTYPE_INTEGER_ADMIN = 1;
    const USERTYPE_INTEGER_CUSTOMER = 2;
}
